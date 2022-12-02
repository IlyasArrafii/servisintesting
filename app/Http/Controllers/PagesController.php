<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\generateKode;
use App\Models\Komplain;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Carbon;

class PagesController extends Controller
{

    public function index()
    {
        $layanan = Layanan::all();
        $getDataArtikel = Artikel::latest()->orderBy('id', 'asc')->limit(3)->get();
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        // dd($getDataArtikel);
        return view('public.home.index', compact('layanan', 'today', 'getDataArtikel'));
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function pesanan()
    {
        if (isset(Auth::user()->id)) {
            $id_user = Auth::user()->id;
            $detaildata = Pemesanan::where('id_user', $id_user)->orderby('id', 'desc')->get();
            $jumlah = Pemesanan::where('id_user', $id_user)->where('status', '0')->count();
            if ($jumlah > 0) {
                $text = 'Anda belom memiliki pesanan';
                return view('public.pesanan.index', compact('detaildata', 'text'));
            } else {
                return view('public.pesanan.index', compact('detaildata'));
            }
        } else {
            return redirect('/login');
        }
    }
    public function profil()
    {
        if (isset(Auth::user()->id)) {
            return view('public.akun.profil');
        } else {
            return redirect('/login');
        }
    }
    public function pemesanan($slug)
    {
        $generateKode = new generateKode();
        $kode =  $generateKode->KodePemesanan();

        $layanan = Layanan::where('slug', $slug)->get();
        return view('public.pemesanan.index', compact('layanan', 'kode'));
    }
    public function detailpemesanan($id)
    {
        $pemesanan = Pemesanan::where(\DB::raw('substr(kode_pemesanan, 20, 5)'), '=', $id)->get();
        return view('public.pemesanan.detail', compact('pemesanan'));
    }
    public function syaratpemesanan($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->get();
        return view('public.pemesanan.syarat', compact('pemesanan'));
    }
    public function batalpemesanan($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->delete();
        return redirect('/');
    }
    public function checkout(Request $request)
    {
        $pemesanan = Pemesanan::where('id', $request->input('id'))->update([
            'status' => '1',
        ]);
        $id_user = Auth::user()->id;
        $detaildata = Pemesanan::where('id_user', $id_user)->get();
        return redirect('/pesanan');
    }
    public function kebijakan()
    {
        return view('public.kebijakan.index');
    }
    public function caramemesan()
    {
        return view('public.cara.index');
    }
    public function keunggulan()
    {
        return view('public.cara.keunggulan');
    }
    public function komplain($id)
    {
        $id_user = Auth::user()->id;
        $detaildata = Pemesanan::where('id_user', $id_user)->where('id', $id)->orderby('id', 'desc')->get();
        $jumlahdata = Komplain::where('id', $id)->count();
        $datakomplain = Komplain::where('id_user', $id)->where('id', $id)->get();
        // foreach ($datakomplain as $item_k) {
        //     $status = $item_k->status;
        // }
        // if ($status == "1") {
        //     return redirect('/pesanan');
        // }
        return view('public.pesanan.complain', compact('detaildata', 'datakomplain', 'jumlahdata'));
    }
    public function kirimkomplain(Request $request)
    {
        $request->validate([
            'komplain' => 'required',
        ]);
        $data = Pemesanan::where('id_user', $request->input('id_user'))->get();
        Komplain::create([
            'id_user' => $request->input('id_user'),
            'kode_pemesanan' => $request->input('id_pemesanan'),
            'kode_layanan' => $request->input('kode_layanan'),
            'deskripsi' => $request->input('komplain'),
            'status' => '1',
        ]);
        Pemesanan::where('id', $request->input('id_pemesanan'))->update([
            'status' => '6'
        ]);
        foreach ($data as $item) {
            $id_pemesanan = $item->kode_pemesanan;
            $nama = $item->name;
            $alamat = $item->alamat;
            $nama_layanan = $item->Layanan['nama_layanan'];
        }
        return redirect('https://wa.me/+6285772277727?text=Hai Servisin! %0ASaya ingin mengajukan komplain dengan data berikut:%0A%0AID Pemesanan : ' . $id_pemesanan . '%0ANama : ' . $nama . '%0AAlamat : ' . $alamat . '%0ALayanan : ' . $nama_layanan . '%0ADetail Komplain : ' . $request->input('komplain') . '%0A%0AMohon untuk segera diperbaiki kembali. %0ATerimakasih!');
    }

    // Handle Detail Artikel
    public function detailArtikel($slug)
    {
        $getDetailArtikel = Artikel::where('slug', $slug)->get();
        return view('public.artikel.detail', compact('getDetailArtikel'));
    }

    // Handle Artikel Selengkapnya
    public function selengkapnyaArtikel()
    {
        $getDataAllArtikel = Artikel::all();
        return view('public.artikel.selengkapnya', compact('getDataAllArtikel'));
    }
}

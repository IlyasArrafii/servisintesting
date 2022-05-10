<?php

namespace App\Http\Controllers;

use App\Models\generateKode;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PagesController extends Controller
{

    public function index()
    {
        $layanan = Layanan::all();
        return view('public.home.index', compact('layanan'));
    }
    public function login()
    {
        return view('public.akun.login');
    }
    public function register()
    {

        return view('public.akun.register');
    }
    public function pesanan()
    {
        if (isset(Auth::user()->id)) {
            $id_user = Auth::user()->id;
            $detaildata = Pemesanan::where('id_user', $id_user)->orderby('id', 'desc')->get();
            $jumlah = Pemesanan::where('id_user', $id_user)->count();
            if ($jumlah < 1) {
                $text = 'Masih belom ada pesanan';
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
}

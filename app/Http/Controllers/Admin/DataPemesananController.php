<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.pemesanan.pemesanan', compact('pemesanan'));
    }
    public function konfirmasi($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->update([
            'status' => '2'
        ]);
        $data = Pemesanan::where('id', $id)->get();

        //ubah timezone menjadi jakarta
        date_default_timezone_set("Asia/Jakarta");

        //ambil jam dan menit
        $jam = date('H:i');

        //atur salam menggunakan IF
        if (
            $jam > '05:30' && $jam < '10:00'
        ) {
            $salam = 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'Siang';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }
        foreach ($data as $item) {
            $notelpon = $item->notelpon;
            $nama = $item->name;
            $alamat = $item->alamat;
            $kecamatan = $item->kecamatan;
            $kota = $item->kota;
            $detail_alamat = $item->detail_alamat;
            $keluhan = $item->keluhan;
            $nama_layanan = $item->Layanan['nama_layanan'];
        }
        return redirect('https://wa.me/+62' . $notelpon . '?text=Selamat ' . $salam . '%0AKami dari Servisin ingin mengonfirmasi Pemesanan Anda di Aplikasi dengan data sebagai berikut :%0A%0ANama : ' . $nama . '%0AAlamat : ' . $alamat . ', ' . $kecamatan . ', ' . $kota . '%0ADetail Alamat : ' . $detail_alamat . '%0ALayanan : ' . $nama_layanan . '%0AKeluhan : ' . $keluhan . '%0A%0AApakah Benar Anda Telah Melakukan Pemesanan ini?%0AJika Benar silahkan menjawab "Ya" , dan jika tidak memesan layanan ini silahkan menjawab "Tidak"%0A%0APemesanan akan otomatis dibatalkan Jika dalam batas waktu 1x24 jam tidak mengonfirmasi Pemesanan Anda');
    }
    public function mencariteknisi($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->update([
            'status' => '3'
        ]);
        return redirect('/pemesanan');
    }
    public function teknisidatang($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->update([
            'status' => '4'
        ]);
        return redirect('/pemesanan');
    }
    public function batalpesanan($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->delete();
        return redirect('/pemesanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->get();
        return view('admin.pemesanan.detail', compact('pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

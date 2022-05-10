<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\generateKode;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.layanan', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generateKode = new generateKode();
        $kode =  $generateKode->KodeLayanan();

        //DB Layanan
        $layanan = Layanan::All();
        return view('admin.layanan.addlayanan', compact('kode', 'layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'icon' => 'required'
        ]);
        Layanan::create([
            'kode_layanan' => $request->input('kode'),
            'nama_layanan' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
            'syarat' => $request->input('syarat'),
            'icon' => $request->file('icon')->store('image'),
        ]);
        return redirect('/layanan')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Layanan::where('id', $id)->get();
        return view('admin.layanan.editlayanan', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        if ($request->file('icon')) {
            $icon = $request->file('icon')->store('image');
            $data = Layanan::where('kode_layanan', $request->input('kode'))->first();
            if (!empty($data->icon)) {
                $test = Storage::delete($data->icon);
                $hasil = $icon;
                Layanan::where('kode_layanan', $request->input('kode'))
                    ->update([
                        'kode_layanan' => $request->input('kode'),
                        'nama_layanan' => $request->input('nama'),
                        'slug' => Str::slug($request->input('nama')),
                        'syarat' => $request->input('syarat'),
                        'icon' => $hasil
                    ]);
            } else {
                $hasil = $icon;
                Layanan::where('kode_layanan', $request->input('kode'))
                    ->update([
                        'kode_layanan' => $request->input('kode'),
                        'nama_layanan' => $request->input('nama'),
                        'slug' => Str::slug($request->input('nama')),
                        'syarat' => $request->input('syarat'),
                        'icon' => $hasil
                    ]);
            }
        } else {
            $data = Layanan::where('kode_layanan', $request->input('kode'))->first();
            Layanan::where('kode_layanan', $request->input('kode'))
                ->update([
                    'kode_layanan' => $request->input('kode'),
                    'nama_layanan' => $request->input('nama'),
                    'slug' => Str::slug($request->input('nama')),
                    'syarat' => $request->input('syarat'),
                    'icon' => $data->icon
                ]);
        }
        return redirect('/layanan')->with('warning', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan, $id)
    {
        if ($layanan->icon) {
            Storage::delete($layanan->icon);
        }
        Layanan::where('id', $id)->delete();
        return redirect('/layanan')->with('Danger', 'Data Berhasil Dihapus');
    }
}

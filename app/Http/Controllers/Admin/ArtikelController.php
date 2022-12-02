<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDataArtikel = Artikel::all();
        return view('admin.artikel.index', compact('getDataArtikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.addartikel');
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
            'judulArtikel' => 'required',
        ]);
        $simpanDataArtikel = Artikel::create([
            'judul' => $request->input('judulArtikel'),
            'slug' => Str::slug($request->input('judulArtikel')),
            'deskripsi' => $request->input('deskripsiArtikel'),
            'author' => auth()->guard('admin')->user()->name,
            'foto_artikel' => $request->file('fotoArtikel')->store('artikel'),
        ]);

        // dd($simpanDataArtikel);
        toast('Data Berhasil Ditambahkan', 'success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('admin.artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.editartikel', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        if ($request->file('fotoArtikel')) {
            $icon = $request->file('fotoArtikel')->store('artikel');
            $data = Artikel::where('id', $artikel)->first();
            if (!empty($data->icon)) {
                $test = Storage::delete($data->icon);
                $hasil = $icon;
                Artikel::where('kode_layanan', $artikel)->update([
                    'judul' => $request->input('judulArtikel'),
                    'slug' => Str::slug($request->input('judulArtikel')),
                    'author' => $request->input('namaAuthor'),
                    'deskripsi' => $request->input('deskripsiArtikel'),
                    'foto_artikel' => $hasil,
                ]);
            } else {
                $hasil = $icon;
                Artikel::where('id', $artikel)->update([
                    'judul' => $request->input('judulArtikel'),
                    'slug' => Str::slug($request->input('judulArtikel')),
                    'author' => $request->input('namaAuthor'),
                    'deskripsi' => $request->input('deskripsiArtikel'),
                    'foto_artikel' => $hasil,
                    'icon' => $hasil
                ]);
            }
        } else {
            $data = Artikel::where('id', $artikel)->first();
            Artikel::where('id', $artikel)->update([
                'judul' => $request->input('judulArtikel'),
                'slug' => Str::slug($request->input('judulArtikel')),
                'author' => $request->input('namaAuthor'),
                'deskripsi' => $request->input('deskripsiArtikel'),
                'foto_artikel' => $data->foto_artikel,
            ]);
        }
        toast('Data Berhasil Di Update', 'success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('admin.artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        if ($artikel->foto_artikel) {
            Storage::delete($artikel->foto_artikel);
        }
        Artikel::where('id', $artikel)->delete();
        toast('Data Berhasil Di Hapus', 'success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('admin.artikel.index');
    }
}

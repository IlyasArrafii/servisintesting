<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'notelpon' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'keluhan' => 'required',
        ]);
        Pemesanan::create([
            'kode_pemesanan' => $request->input('kode'),
            'kode_layanan' => $request->input('kode_layanan'),
            'id_user' => $request->input('id_user'),
            'name' => $request->input('nama'),
            'notelpon' => $request->input('notelpon'),
            'alamat' => $request->input('alamat'),
            'kecamatan' => $request->input('kecamatan'),
            'kota' => $request->input('kota'),
            'detail_alamat' => $request->input('detailalamat'),
            'keluhan' => $request->input('keluhan'),
            'status' => '0',
        ]);
        $id = substr($request->input('kode'), 19, 5);
        return redirect('/detail-pemesanan/' . $id . '');
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

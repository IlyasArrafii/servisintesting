<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return view('admin.admin.index', compact('admin'));
    }
    public function profile($id)
    {
        $admin = Admin::where('id', $id)->get();
        return view('admin.admin.profile', compact('admin'));
    }

    public function changepass(Request $request)
    {
        $request->validate([
            'password' => 'confirmed',
        ]);
        $user = Admin::where('id', $request->input('id_admin'))->update([
            'password' => bcrypt($request->input('password'))
        ]);
        toast('Berhasil Ganti Password', 'success')->autoClose(5000)->hideCloseButton()->timerProgressBar()->width('320px');

        return redirect('/admin/dashboard');
    }

    public function changeprofile(Request $request)
    {
        $admin = Admin::where('id', $request->input('id_admin'))->update([
            'name' => $request->input('nama'),
            'notelpon' => $request->input('telp')
        ]);
        toast('Berhasil Update Profile', 'success')->autoClose(5000)->hideCloseButton()->timerProgressBar()->width('320px');

        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //DB Admin
        $admin = Admin::All();

        return view('admin.admin.addadmin', compact('admin'));
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
            'username' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        Admin::create([

            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'notelepon' => $request->input('telp'),
            'jabatan' => $request->input('jabatan'),
            'gambar' => $request->file('gambar')->store('image'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/admin/anggota')->withSuccess('Data Berhasil Ditambahkan');
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
        $admin = Admin::where('id', $id)->get();
        return view('admin.admin.edit', compact('admin'));
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
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'telp' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar')->store('image');
            $data = Admin::where('id_anggota', $request->input('kode'))->first();
            if (!empty($data->gambar)) {
                $test = Storage::delete($data->gambar);
                $hasil = $gambar;
                Admin::where('id_anggota', $request->input('kode'))
                    ->update([
                        'id_anggota' => $request->input('kode'),
                        'nama' => $request->input('nama'),
                        'telpon' => $request->input('telp'),
                        'jabatan' => $request->input('jabatan'),
                        'email' => $request->input('email'),
                        'gambar' => $hasil,
                        'username' => $request->input('username'),
                        'password' => Hash::make($request->input('password'))
                    ]);
            } else {
                $hasil = $gambar;
                Admin::where('id_anggota', $request->input('kode'))
                    ->update([
                        'id_anggota' => $request->input('kode'),
                        'nama' => $request->input('nama'),
                        'telpon' => $request->input('telp'),
                        'jabatan' => $request->input('jabatan'),
                        'email' => $request->input('email'),
                        'gambar' => $hasil,
                        'username' => $request->input('username'),
                        'password' => Hash::make($request->input('password'))
                    ]);
            }
        } else {
            $data = Admin::where('id_anggota', $request->input('kode'))->first();
            Admin::where('id', $id)
                ->update([
                    'id_anggota' => $request->input('kode'),
                    'nama' => $request->input('nama'),
                    'telpon' => $request->input('telp'),
                    'jabatan' => $request->input('jabatan'),
                    'email' => $request->input('email'),
                    'gambar' => $data->gambar,
                    'username' => $request->input('username'),
                    'password' => Hash::make($request->input('password'))
                ]);
        }
        return redirect('/admin/anggota')->withSuccess('Data Berhasil Diupdate');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $admin = Admin::where('id', $id)->get();
        return view('admin.profile.index', compact('admin'));
    }
    public function profile($id)
    {
        $admin = Admin::where('id', $id)->get();
        $dataAdmin = Auth::user('admin')->password;
        return view('admin.admin.profile', compact('admin', 'dataAdmin'));
    }

    public function changepass(Request $request)
    {
        $request->validate([
            'newPassword' => 'confirmed',
        ]);

        $user = Admin::where('id', $request->input('id_admin'))->update([
            'password' => Hash::make($request->input('newPassword'))
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

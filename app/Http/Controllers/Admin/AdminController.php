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
            'telp' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        $admins = Admin::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'notelpon' => $request->input('telp'),
        ]);
        // Add Data Admin + Give Role
        if ($request->input('roles') == "Manager") {
            $role = $admins->assignRole('manager');
        } elseif ($request->input('roles') == "karyawan") {
            $role = $admins->assignRole('karyawan');
        };
        if ($request->input('give') == "create") {
            $role->givePermissionTo('create');
        } elseif ($request->input('give') == "update") {
            $role->givePermissionTo('update');
        } elseif ($request->input('give') == "delete") {
            $role->givePermissionTo('delete');
        } elseif ($request->input('give') == "show") {
            $role->givePermissionTo('show');
        }

        toast('Berhasil Menambahkan Admin', 'success')->autoClose(5000)->hideCloseButton()->timerProgressBar()->width('350px');
        return redirect('/admin/data-admin');
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
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'notelpon' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed'],
        ]);

        Admin::where('id', $request->kode)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'notelpon' => $request->notelpon,
            'password' => Hash::make($request->password)
        ]);
        toast('Berhasil Mengedit Data', 'success')->autoClose(5000)->hideCloseButton()->timerProgressBar()->width('350px');

        return redirect('/admin/data-admin')->withSuccess('Data Berhasil Diupdate');
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

    // Gate Settings
    public function settings(Admin $admin)
    {
        return view('admin.admin.setting.index', [
            'admin' => $admin,
            'admins' => Admin::get(),
        ]);
    }

    // View Ganti Password
    public function settingspassword(Admin $admin)
    {
        return view('admin.admin.setting.password', [
            'admin' => $admin,
            'admins' => Admin::get(),
        ]);
    }

    // View Ganti Profile
    public function settingsprofile(Admin $admin)
    {
        $gateData = auth()->guard('admin')->user()->id;
        $admins = Admin::where('id', $gateData);
        return view('admin.admin.setting.profile', compact('admins'));
    }

    // Update Buat Ganti Password/Sandi
    public function changepass(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPassword = auth()->guard('admin')->user()->password;
        $oldPassword = $request->old_password;
        if (Hash::check($oldPassword, $currentPassword)) {
            auth()->guard('admin')->user()->update([
                'password' => bcrypt($request->password),
            ]);
            toast('Berhasil Mengganti Password', 'success')->autoClose(3000)->timerProgressBar();
            return redirect()->route('admin.settings');
        } else {
            toast('Harap Cek Password saat ini', 'error')->autoClose(3000)->timerProgressBar();
            return back();
        }
    }

    // Update Buat Profile
    public function changeprofile(Request $request)
    {
        Admin::where('id', $request->input('id'))->update([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'notelpon' => $request->input('telp'),
        ]);
        toast('Berhasil Update Profile', 'success')->autoClose(5000)->timerProgressBar();

        return redirect()->route('admin.settings');
    }
}

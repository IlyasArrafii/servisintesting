<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AssignRolesController extends Controller
{
    // Give Roles
    public function giveroles()
    {
        $roles = Role::get();
        $admins = Admin::has('roles')->get();
        return view('admin.roles.assign.create', compact('roles', 'admins'));
    }

    // Assign Roles Melalui Email
    public function assignroles(Request $request)
    {
        $dataAdmin = Admin::where('email', $request->email)->first();
        $dataAdmin->assignRole($request->roles);
        toast('Berhasil Memberi Roles ke  ' . $request->email . '', 'success')->autoClose(5000)->timerProgressBar();
        return redirect()->route('admin.roles.assign.create');
    }

    // Ambil Data Admin Dari View Edit Roles Pada Button Sync(Edit untuk Hak Roles)
    public function synceditroles(Admin $admin)
    {
        return view('admin.roles.assign.syncroles', [
            'admin' => $admin, //Ambil Data ID
            'roles' => Role::get(), //Ambil Data Roles
            'admins' => Admin::has('roles')->get(),
        ]);
    }

    // Untuk Sync/Edit Hak Roles Pada Admin
    public function syncupdateroles(Admin $admin, Request $request)
    {
        $request->validate([
            'email' => 'required',
            'roles' => 'array|required',
        ]);

        $admin->syncRoles($request->roles);

        toast('Role Telah DiSynchronize ke ' . $admin->email . '', 'success')->autoClose(5000)->timerProgressBar();
        return redirect()->route('admin.roles.assign.create');
    }
}

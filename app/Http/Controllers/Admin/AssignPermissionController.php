<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignPermissionController extends Controller
{
    // View Give Permission dari Role
    public function givepermission()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('admin.permissions.assign.create', compact('roles', 'permissions'));
    }

    // Store Give Permission dari Role
    public function assignpermission(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'permissions' => 'array|required'
        ]);

        $role = Role::find($request->role);
        $role->givePermissionTo($request->permissions);

        toast('Permission Telah Ditambahkan ke Role ' . $role->name . '', 'success')->autoClose(5000)->timerProgressBar();
        return redirect()->route('admin.permission.assign.create');
    }

    // Ambil Data Role Dari View Edit Permission Pada Button Sync(Edit untuk Hak Permission)
    public function synceditpermission(Role $role)
    {
        return view('admin.permissions.assign.sync', [
            'role' => $role, //Ambil Data ID
            'roles' => Role::get(), //Ambil Data Roles
            'permissions' => Permission::get(),
        ]);
    }

    // Untuk Sync/Edit Hak Permission Pada Role
    public function syncupdatepermission(Role $role, Request $request)
    {
        $request->validate([
            'role' => 'required',
            'permissions' => 'array|required'
        ]);
        $role->syncPermissions($request->permissions);

        toast('Permission Telah DiSynchronize ke Role ' . $role->name . '', 'success')->autoClose(5000)->timerProgressBar();
        return redirect()->route('admin.permission.assign.create');
    }
}

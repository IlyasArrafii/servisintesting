<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // LOGIN ADMIN
    public function PostAdminLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = Admin::where('email', $email)->first();

        if ($admin) {
            if (Hash::check($password, $admin->password)) {
                $request->session()->put('SessionAdmin', $admin->nama);
                $request->session()->put('SessionNama', $admin->nama);
                $request->session()->put('SessionJabatan', $admin->nama);
                return redirect('/dashboard');
            } else {
                return back()->with('gagal', ' ');
            }
        } else {
            return back()->with('gagal', ' ');
        }
    }
    // PROSES LOGOUT ADMIN
    public function LogoutAdmin()
    {
        session()->forget('SessionAdmin');
        return redirect('/admin');
    }
}

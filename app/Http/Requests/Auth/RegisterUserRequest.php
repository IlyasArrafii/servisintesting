<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'notelpon' => ['required', 'numeric', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'notelpon.required' => 'No Telpon tidak boleh kosong',
            'notelpon.numeric' => 'Harap Masukkan Angka yang Valid',
            'notelpon.min' => 'Harap Masukkan No Telpon Minimal 10 Angka',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email telah terdaftar, harap masukkan email lain',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Konfirmasi Password Salah'
        ];
    }
}

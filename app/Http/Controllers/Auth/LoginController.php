<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // halaman login
    public function login()
    {
        return view('auth.login');
    }
    // function for doLogin
    public function doLogin(Request $r)
    {
        // validasi data yang diinput user
        $credential = $r->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        // cek apakah username dan passwordnya sesuai atau tidak dengan database
        if (Auth::attempt($credential)) {
            $r->session()->regenerate();
            return redirect()->route('todo');
        }else{
            return 'Gagal Masuk';
        }
    }
    // function logout
    public function logout()
    {
        Auth::logout();
        echo 'Logout Berhasil';
    }
}

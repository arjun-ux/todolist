<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // ke halaman register
    public function register()
    {
        return view('auth.register');
    }
    // function register
    public function doRegister(Request $r)
    {
        $r->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            're_password' => 'required|same:password'
        ]);
        // insert data user
        $user = User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => $r->password,
            're_password' => $r->re_password,
        ]);
        if($user){
            // jika berhasil maka redirect ke login
            return redirect()->route('todo')->with('success','Registration Successful! Please Login Now');
        }else{
            //jika gagal maka kembali ke halaman register dan tampilkan error
            return back()->with('error','Failed to Register! Please Try Again Later');
        }
    }

}

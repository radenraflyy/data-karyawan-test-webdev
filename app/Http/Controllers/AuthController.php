<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function pageLogin()
    {
        return view('pages.auth.login');
    }

    public function pageRegister()
    {
        return view('pages.auth.register');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $body = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($body);
        return redirect('auth/login')->with('success', 'Berhasil Resgiter');
    }

    public function generateToken()
    {
        $token = csrf_token();
        User::where('email', Auth::user()->email)->update(['akses_token' => $token]);
        return $token;
    }

    public function doLogin(Request $request)
    {
        $check = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($check)) {
            $this->generateToken();
            return redirect('/data-karyawan')->with('success', 'Selamat datang ' . Auth::user()->username);
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah!!');
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_pw' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        if ($request->password !== $request->confirm_password) {
            return redirect()->back()->with('warning', 'Confirm Password tidak cocok');
        } else if (Hash::check($request->old_pw, Auth::user()->password)) {
            User::where('email', Auth::user()->email)->update(['password' => Hash::make($request->password)]);
            Alert::success('Berhasil', 'Password Berhasil');
            return redirect()->back()->with('success', 'Berhasil Ganti Password');
        } else {
            return redirect()->back()->with('warning', 'Password lama tidak cocok');
        }
    }

    public function doLogout()
    {
        session()->flush();
        Auth::logout();
        return redirect('auth/login')->with('success', 'Berhasil Logout');
    }
}

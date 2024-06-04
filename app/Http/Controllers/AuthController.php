<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }

    public function siswa(Request $request)
    {
        $request->validate([
            'usernameSiswa' => 'required',
            'passwordSiswa' => 'required',
        ]);

        if (Auth::guard("siswa")->attempt([
            'username' => $request['usernameSiswa'],
            'password' => $request['passwordSiswa']
        ])) {
            session(['user' => Auth::guard("siswa")->user()]);
            return redirect()->route('dashboard');
        }

        return view("Auth.login")->with('error', 'Kredensial Tidak Sesuai');
    }

    public function guru(Request $request)
    {
        $request->validate([
            'usernameGuru' => 'required',
            'passGuru' => 'required',
        ]);

        if (Auth::guard("guru")->attempt([
            'username' => $request['usernameGuru'],
            'password' => $request['passGuru']
        ])) {
            session(['user' => Auth::guard("guru")->user()]);
            return redirect()->route('dashboard');
        }

        // dd("Error");

        return view("Auth.login")->with('error', 'Kredensial Tidak Sesuai');
    }

    public function admin()
    {
        return view('Auth.admin_login');
    }

    public function admin_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        if (Auth::guard("admin")->attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ])) {
            session(['user' => Auth::guard("admin")->user()]);
            return redirect()->route('dashboard');
        }

        return redirect()->route('login_admin');
    }

    public function logout(Request $request)
    {
        Auth::guard("siswa")->logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}

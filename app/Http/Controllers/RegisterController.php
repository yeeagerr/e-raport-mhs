<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kela;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view("Auth.register");
    }

    public function siswa()
    {
        $kelas = Kela::all();
        return view("Auth.register_siswa", compact('kelas'));
    }

    public function siswa_create(Request $request)
    {
        $request->validate(([
            'nama' => 'required',
            'nisn' => 'required',
            'kelas' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]));

        Siswa::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kela_id' => $request->kelas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function guru()
    {
        $kelas = Kela::all();
        return view("Auth.register_guru", compact('kelas'));
    }

    public function guru_create(Request $request)
    {
        $request->validate(([
            'nama' => 'required',
            'nuptk' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]));

        Guru::create([
            'nama' => $request->nama,
            'nuptk' => $request->nuptk,
            'kela_id' => $request->kelas ?? null,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
}

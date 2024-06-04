<?php

namespace App\Http\Controllers;

use App\Imports\AbsenImport;
use App\Imports\NilaiImport;
use App\Models\Ekskul;
use App\Models\Guru;
use App\Models\Kela;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    public function kelas($page)
    {
        $user = session("user");
        $kelas = Kela::orderBy('nama_kelas', 'ASC')->get();
        return view('Pages.guru.kelas', compact('user', 'kelas', 'page'));
    }

    public function kelas_input($id)
    {
        $user = session("user");
        $kelas = Kela::findOrFail($id);
        return view("Pages.guru.kelas_input", compact('user', 'kelas'));
    }

    public function kelas_input_post($id, Request $request)
    {
        $fileNilai = $request->file('excel_nilai');
        $fileAbsen = $request->file('excel_absen');
        // dd($fileAbsen);

        if ($fileNilai ?? "") {
            Excel::import(new NilaiImport, $fileNilai);
        }

        if ($fileAbsen ?? "") {
            Excel::import(new AbsenImport, $fileAbsen);
        }

        return redirect()->route('dashboard');
    }


    public function list_siswa($id)
    {
        $siswa = Siswa::where('kela_id', $id)->get();
        $user = session("user");
        return view("Pages.guru.list_siswa", compact('user', 'siswa'));
    }

    public function eskul()
    {
        $user = session("user");
        $eskul = Ekskul::all();
        $unikEskul = $eskul->unique('nama_ekskul');
        return view("Pages.guru.eskul", compact('user', 'unikEskul'));
    }

    public function list_eskul($ekskul)
    {
        $siswa = Ekskul::where('nama_ekskul', $ekskul)->get();
        $user = session("user");
        return view("Pages.guru.list_siswa_eskul", compact('user', 'siswa'));
    }

    public function absen_eskul(Siswa $id)
    {
        $user = session("user");
        return view("Pages.guru.absensi_ekskul", compact('user', 'id'));
    }

    public function update_show(Guru $id)
    {
        $user = session("user");
        $kelas = Kela::all();
        return view("Pages.guru.update", compact('user', 'kelas', 'id'));
    }

    public function update_post(Guru $id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
        ]);

        if ($request->password) {
            $id->update([
                'nama' => $request->nama,
                'nuptk' => $request->nuptk,
                'kela_id' => $request->kelas ?? null,
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);
        }

        $id->update([
            'nama' => $request->nama,
            'kela_id' => $request->kelas ?? null,
            'nuptk' => $request->nuptk,
            'username' => $request->username
        ]);

        if (Auth::guard("guru")->user()) {
            session(['user' => $id->first()]);
        }

        return redirect()->route('dashboard');
    }

    public function biodata_siswa(Siswa $id)
    {
        $user = session("user");

        return view('Pages.guru.biodata_siswa', compact(['user', 'id']));
    }
}

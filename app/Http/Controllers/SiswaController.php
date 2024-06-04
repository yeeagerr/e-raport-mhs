<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Guru;
use App\Models\Kela;
use App\Models\Nilai;
use App\Models\Siswa;

class SiswaController extends Controller
{

    public function update_show(Siswa $id)
    {
        $user = session('user');
        $siswa = $id;
        $kelas = Kela::all();
        return view("Pages.siswa.update", compact('user', 'kelas', 'siswa'));
    }

    public function update_post(Siswa $id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
        ]);

        if ($request->password) {
            $id->update([
                'nama' => $request->nama,
                'nisn' => $request->nisn ?? $id->nisn,
                'username' => $request->username,
                'kelas' => $request->kelas ?? $id->kelas,
                'password' => Hash::make($request->password)
            ]);
        }

        $id->update([
            'nama' => $request->nama,
            'nisn' => $request->nisn ?? $id->nisn,
            'kelas' => $request->kelas ?? $id->kelas,
            'username' => $request->username
        ]);

        if (Auth::guard("siswa")->user()) {
            session(['user' => $id->first()]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('list_siswa', $id->kelas_siswa->id);
        }
    }

    public function raport($jurusan)
    {
        $user = session('user');
        $mapel_kompetensi = [];

        if ($jurusan == 'Pengembangan Perangkat Lunak Dan Gim') {
            // Pemrograman WEB, Basis Data dan Rekayasa Perangkat Lunak
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [29, 28, 19])->get();
            $mapel_kompetensi = [29, 28, 19];
        }

        if ($jurusan == 'Desain Komunikasi Visual') {
            // Desain Grafis, Dasar Dasar Desain Komunikasi Visual dan Manajemen Produksi, Naskah dan Penyutradaraan
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [32, 15, 27])->get();
            $mapel_kompetensi = [32, 15, 27];
        }

        if ($jurusan == 'Akuntansi Dan Keuangan Lembaga') {
            // Dasar Dasar Akuntansi dan Keuangan Lembaga, Aplikasi Pengolah Angka/Spreadsheet dan Akuntansi
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [8, 12, 25])->get();
            $mapel_kompetensi = [8, 12, 25];
        }

        if ($jurusan == 'Teknik Jaringan Komputer Dan Telekomunikasi') {
            // Dasar Dasar Teknik Jaringan Komputer dan Telekomunikasi, Teknik Komputer dan Jaringan dan Sistem Internet of Things
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [23, 30, 31])->get();
            $mapel_kompetensi = [23, 30, 31];
        }

        if ($jurusan == 'Seni Tari') {
            // Seni Tari,
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', '21')->get();
            $mapel_kompetensi = '21';
        }

        $nilai = Nilai::where('siswa_id', $user->id)->whereNotIn('mapel_id', $mapel_kompetensi)->get();
        $absen = Absen::where('siswa_id', $user->id)->first();
        return view('Pages.siswa.Raport', compact('user', 'nilai', 'nilai_kompetensi', 'absen', 'jurusan'));
    }

    public function raport_print($jurusan)
    {
        $user = session('user');
        $mapel_kompetensi = [];

        if ($jurusan == 'Pengembangan Perangkat Lunak Dan Gim') {
            // Pemrograman WEB, Basis Data dan Rekayasa Perangkat Lunak
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [29, 28, 19])->get();
            $mapel_kompetensi = [29, 28, 19];
        }

        if ($jurusan == 'Desain Komunikasi Visual') {
            // Desain Grafis, Dasar Dasar Desain Komunikasi Visual dan Manajemen Produksi, Naskah dan Penyutradaraan
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [32, 15, 27])->get();
            $mapel_kompetensi = [32, 15, 27];
        }

        if ($jurusan == 'Akuntansi Dan Keuangan Lembaga') {
            // Dasar Dasar Akuntansi dan Keuangan Lembaga, Aplikasi Pengolah Angka/Spreadsheet dan Akuntansi
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [8, 12, 25])->get();
            $mapel_kompetensi = [8, 12, 25];
        }

        if ($jurusan == 'Teknik Jaringan Komputer Dan Telekomunikasi') {
            // Dasar Dasar Teknik Jaringan Komputer dan Telekomunikasi, Teknik Komputer dan Jaringan dan Sistem Internet of Things
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', [23, 30, 31])->get();
            $mapel_kompetensi = [23, 30, 31];
        }

        if ($jurusan == 'Seni Tari') {
            // Seni Tari,
            $nilai_kompetensi = Nilai::where('siswa_id', $user->id)->whereIn('mapel_id', '21')->get();
            $mapel_kompetensi = '21';
        }

        $nilai = Nilai::where('siswa_id', $user->id)->whereNotIn('mapel_id', $mapel_kompetensi)->get();
        $absen = Absen::where('siswa_id', $user->id)->first();
        return view('raport.index', compact('user', 'nilai', 'nilai_kompetensi', 'absen', 'jurusan'));
    }

    public function rangking()
    {
        $user = session('user');
        $siswa = Siswa::where('kela_id', $user->kela_id)->with('hasNilai')->get();

        // Calculate the average score for each student
        $siswa = $siswa->map(function ($student) {
            $totalNilai = $student->hasNilai->sum('na'); // Sum of all scores
            $totalMapel = $student->hasNilai->count(); // Number of scores
            $averageNilai = $totalMapel > 0 ? $totalNilai / $totalMapel : 0;
            $student->rata = $averageNilai; // Add average score to the student object
            return $student;
        });

        // Sort students by their average score in descending order
        $siswa = $siswa->sortByDesc('rata')->values();

        return view('Pages.siswa.Rangking', compact('user', 'siswa'));
    }

    public function profil_walikelas()
    {
        $user = session('user');
        $guru = Guru::all();
        return view('Pages.siswa.profil_walikelas', compact('user', 'guru'));
    }

    public function walikelas(Guru $id)
    {
        $user = session('user');
        return view('Pages.siswa.walikelas', compact('user', 'id'));
    }
}

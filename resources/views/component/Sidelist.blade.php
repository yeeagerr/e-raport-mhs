@if ($user->nuptk ?? "")
@if ($user->kela_id)
<a href="{{route('kelas_guru', 'kelas')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Kelas</p>
</a>
@endif

<a href="{{route('kelas_guru', 'siswa')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Siswa</p>
</a>
{{-- <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Ekstrakulikuler</div>
</a> --}}
@endif

@if (!$user->nuptk && !$user->nisn && $user->username && $user->password)

<a href="{{route('kelas_guru', 'kelas')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Kelas</p>
</a>
<a href="{{route('kelas_guru', 'siswa')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Siswa</p>
</a>

<a href="{{route('profil_walikelas')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Data Guru</p>
</a>
{{-- <a href="{{route('eskul')}}" class="raport-siswa-ranking-profil-wa3">
    <div class="raport-siswa-ranking-profil-wa-inner"></div>
    <div class="profil-walikelas">Ekstrakulikuler</div>
</a> --}}
@endif

@if($user->nisn ?? "")
<a href="{{route('raport_siswa', $user->kelas_siswa->jurusan)}}"
    class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Raport Siswa</p>
</a>
<a href="{{route('rangking_siswa')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Ranking</p>

</a>
<a href="{{route('profil_walikelas')}}" class="bg-red-800 w-full h-24 min-h-0 mt-5 rounded-3xl min-w-0 mb-4">
    <p class="text-center mt-7 items-center text-white text-2xl font-bold">Profil Walikeas</p>
</a>
@endif
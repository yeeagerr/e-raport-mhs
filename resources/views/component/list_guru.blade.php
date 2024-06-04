@if (!$user->nuptk )
@foreach ($guru as $i)
<div class="bg-red-800 h-[220px] w-full mt-10 rounded-xl shadow-md overflow-hidden">
    <div class="relative flex cursor-pointer" onclick="window.location.href='{{route('walikelas', $i->id)}}'">
        <div
            class="relative w-20 mt-[60px] ms-5 h-20 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
            <img src="{{asset('asset/others/Human.png')}}" class="relative" width="50px" alt="">
        </div>
        <div class="flex flex-col mt-[60px] gap-2 py-2">
            <p class="ms-4 text-white text-lg font-extrabold">{{$i->nama}}</p>
            <p class="ms-4 text-white text-lg font-extrabold">Wali Kelas :
                {{$i->kelas_siswa->nama_kelas ?? "Tidak Ada"}}</p>
            <p class="ms-4 text-white text-sm">Jurusan : {{$i->kelas_siswa->jurusan ?? "-"}}
            </p>
            <a href="{{route('update_guru_show', $i->id)}}">
                Update Data</a>
        </div>
    </div>
</div>
@endforeach
@else
@foreach ($guru as $i)
@if ($i->kela_id !== null )
<div class="bg-red-800 h-[220px] w-full mt-10 rounded-xl shadow-md overflow-hidden">
    <div class="relative flex cursor-pointer" onclick="window.location.href='{{route('walikelas', $i->id)}}'">
        <div
            class="relative w-20 mt-[60px] ms-5 h-20 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
            <img src="{{asset('asset/others/Human.png')}}" class="relative" width="50px" alt="">
        </div>
        <div class="flex flex-col mt-[60px] gap-2 py-2">
            <p class="ms-4 text-white text-lg font-extrabold">{{$i->nama}}</p>
            <p class="ms-4 text-white text-lg font-extrabold">Wali Kelas :
                {{$i->kelas_siswa->nama_kelas}}</p>
            <p class="ms-4 text-white text-sm">Jurusan : {{$i->kelas_siswa->jurusan}}
            </p>
            <a href="{{route('update_guru_show', $i->id)}}">
                Update Data</a>
        </div>
    </div>
</div>
@endif
@endforeach
@endif
{{-- <div class="background-pic-rectangle">
    <div class="vector-one">
        <div class="account-bar">
            <div class="selamat-datang-text-parent">
                <div class="selamat-datang-text"></div>
                <img class="user-alt-fill-icon" loading="lazy" alt="" src="{{asset('asset/others/Human.png')}}">
            </div>
            <div class="update-account-text">
                <div class="raport-siswa-ranking-profil-wa">
                    <div class="back-ground-pics-table">
                        <div class="selamat-datang">Selamat Datang,</div>
                        <div class="user-kelas-container">
                            <b>{{$user->nama ?? $user->username}}</b>
                            <span>|</span>
                            @if ($user->nuptk || $user->nisn)
                            <b>{{$user->kelas_siswa->nama_kelas ?? ""}}</b>

                            @else
                            <b>Admin</b>

                            @endif
                        </div>
                    </div>
                    <div class="spp-jauh-lebih-murah-vector">
                    </div>
                </div>
            </div>
        </div>
        <div class="background-pic-rectangle1">
            <div class="vector-frame">
                @include('component.Sidelist')
            </div>
        </div>
    </div>
</div> --}}

{{-- --}}
{{-- @include('component.update_links') --}}

<div
    class="border pb-2 lg:pb-0 w-full mt-[100px] max-sm:mt-0 lg:max-w-sm px-3 flex flex-row lg:flex-col flex-wrap lg:flex-nowrap">

    <!-- control content left -->
    <div class="bg-red-800 flex w-full h-[200px] rounded-2xl min-h-0 min-w-0 mb-4">
        <div
            class="relative mt-14 ms-10 w-20 h-20 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
            <img src="{{asset('asset/others/Human.png')}}" class="relative" width="50px" alt="">
        </div>
        <div class="flex flex-col gap-2 mt-14 py-2">
            <p class="ms-4 text-white text-sm">Selamat Datang</p>

            <p class="ms-4 text-white text-lg font-extrabold">{{$user->nama ?? $user->username}} | @if ($user->nuptk ||
                $user->nisn)
                {{$user->kelas_siswa->nama_kelas ?? ""}}
                @else
                <b>Admin</b>
                @endif
            </p>
            @include('component.update_links')

        </div>

    </div>
    @include('component.Sidelist')


</div>
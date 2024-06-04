<form class="relative w-96 h-[500px]" action="{{route('register_siswa_post')}}" method="POST">
    @csrf
    <div
        class="absolute top-0 left-0 w-full h-full bg-red-800 rounded-2xl shadow max-sm:left-[-32px]  max-md:left-[-32px] max-lg:left-[-32px]">
        <h2 class="relative text-2xl text-white font-bold text-black text-center">SIGN-UP AS SISWA</h2>
    </div>

    <div
        class="absolute top-8 left-4 w-[92%] h-[87%] bg-white rounded-2xl shadow flex flex-col text-center items-center  max-sm:left-[-15px] max-md:left-[-15px]  max-lg:left-[-15px]">

        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Nama</label>
        <input
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            type="name" name="nama" />
        <div
            class="absolute top-8 left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div>

        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Nisn</label>
        <input name="nisn"
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            type="name" />
        <div
            class="absolute top-[98px] left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div>

        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Kelas</label>
        <select
            class="bg-white-200  text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            name="kelas">
            <option value="NULL">Pilih Kelas</option>
            @foreach ($kelas as $i)
            <option value="{{$i->id}}">{{$i->nama_kelas}}</option>
            @endforeach
        </select>
        {{-- <input type="name"
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10" />
        --}}
        <div
            class="absolute top-[164px] left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div>

        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Username</label>
        <input
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            type="name" name="username" />
        <div
            class="absolute top-[232px] left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div>

        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            type="name" name="password" />
        <div
            class="absolute top-[298px] left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div>

        {{-- <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input
            class="bg-white-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[60%] h-[7%] appearance-none relative z-10"
            type="password" />
        <div
            class="absolute top-[364px] left-15 -ml-4 w-[70%] h-[9%] bg-red-800 rounded-3xl shadow z-0   max-sm:-ml-1  md:-ml-1">
        </div> --}}

        <div class="grid grid-flow-col gap-3 mt-5">
            <div class="col-span-4 relative flex justify-center items-center flex flex-wrap justify-center gap-6"
                onclick="window.location.href='{{route('register_siswa')}}'">
                <span class="absolute top-0 left-0 mt-1 ml-1 h-[34px] w-full shadow-xl rounded bg-red-800"></span>
                <span
                    class="fold-bold relative inline-block h-[30px] w-full rounded border-2 border-black bg-white px-3 py-1 text-base font-bold text-black transition duration-300 hover:bg-black hover:text-white">Reset</span>
            </div>
            </a>
            <button class="col-span-4 relative flex justify-center items-center relative" type="submit">
                <span class="absolute top-0 left-0 mt-1 ml-1 h-[34px] w-full rounded shadow-xl  bg-red-800"></span>
                <span
                    class="fold-bold relative inline-block h-[30px] w-full rounded border-2 border-black bg-white px-3 py-1 text-base font-bold text-black transition duration-300 0 hover:bg-black hover:text-white">Submit</span>
            </button>
        </div>
    </div>
</form>
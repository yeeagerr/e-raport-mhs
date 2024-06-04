<form action="{{route('login_guru')}}" method="POST" style="display: none">
    @csrf
    <input class="username" name="usernameGuru" type="text" />
    <input class="password" name="passGuru" type="password" />
    <input type="submit" id="submitteacher" />
</form>

<form action="{{route('login_siswa')}}" method="POST" class="w-full p-8 lg:w-1/2">
    @csrf
    <div
        class="absolute hidden w-[130px] h-[130px] bg-white-100 top-[10%]  rounded-full flex justify-center items-center text-center p-5 shadow-xl md:top-[-10px] max-sm:top-[-20px]  md:ms-[130px] max-sm:ms-[100px]">
        <img width="66px" src="{{asset('asset/others/LOGO.png')}}" alt="">
    </div>

    <h2 class="text-2xl font-bold text-black text-center">SELAMAT DATANG DI E - RAPORT</h2>
    <p class="text-xl text-gray-600 text-center">MULTISTUDI HIGH SCHOOL BATAM</p>
    <div href="#" class="flex items-center justify-center mt-4">
        <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">SIGN IN</h1>
    </div>

    <div class="mt-4 relative">
        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
        <input
            class="bg-white-200 ms-7 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[95%] appearance-none relative z-10 username1"
            type="text" name="usernameSiswa" />
        <div
            class="absolute top-5 left-0 -ml-4 w-[108%] h-[80%] bg-red-800 rounded-3xl shadow z-0  max-sm:-ml-1  md:-ml-1">
        </div>
    </div>



    <div class="mt-4 relative">
        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input
            class="bg-white-200 ms-7 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[95%] appearance-none relative z-10 password1"
            type="password" name="passwordSiswa" />
        <div
            class="absolute top-5 left-0 -ml-4 w-[108%] h-[80%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 md:-ml-1">
        </div>
    </div>
    <div class="mt-1">
        <div href="#" class="flex items-center justify-center mt-4">
            <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Login As</h1>
        </div>
        <div class="dua">
            <div class="grid grid-flow-col">
                <a href="user/dashboard-user.html"
                    class="col-span-12 left-[30px] max-sm:left-0 relative flex justify-center items-center">
                    <img width="170px" src="{{asset('asset/login_register/siswa.png')}}" alt="">
                    <button type="submit" class="absolute inset-0 flex justify-center items-center">
                        <span class="text-black text-xl me-10 font-bold">Siswa</span>
                    </button>
                </a>
                <a href="guru/dashboard-guru.html"
                    class="col-span-12 right-[30px] max-sm:right-[0px]  relative flex justify-center items-center">
                    <img width="170px" src="{{asset('asset/login_register/guru.png')}}" alt="">
                    <label for="submitteacher" class="absolute cursor-pointer inset-0 flex justify-center items-center">
                        <span class="text-black ms-7 text-xl font-bold">Guru</span>
                    </label>
                </a>
            </div>
        </div>
        <h1 class="float-end relative font-bold top-3">Belom ada akun?
            <a href="{{route('register')}}" class="text-red-800">Sign Up</a>
        </h1>
    </div>
</form>
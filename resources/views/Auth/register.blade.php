<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- https://play.tailwindcss.com/MIwj5Sp9pw -->
    <div class="h-screen flex items-center">
        <div
            class="flex w-full bg-white rounded-2xl shadow-[0_20px_50px_rgba(8,_0,_0,_0.5)] overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url('{{asset('asset/login_register/gerbang.png')}}')">
            </div>
            <div class="w-full p-8 shadow-xl lg:w-1/2">
                <h2 class="text-2xl mb-[60px] font-bold text-black text-center">SIGN-UP</h2>
                <div class="relative w-96 h-[350px]">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-red-800 rounded-2xl shadow max-sm:left-[-32px]  max-md:left-[-32px] max-lg:left-[-32px]">
                    </div>
                    <div
                        class="absolute top-5 left-4 w-[92%] h-[90%] bg-white rounded-2xl shadow flex flex-col justify-center text-center items-center  max-sm:left-[-15px] max-md:left-[-15px]  max-lg:left-[-15px]">
                        <span class="text-1xl font-black text-center">Register As</span>
                        <div class="flex gap-14 items-center">

                            <div
                                class="absolute w-[130px] h-[130px] bg-white-100 top-[-25%] left-4 rounded-full flex justify-center items-center text-center p-5 shadow-xl  md:ms-[100px] max-sm:ms-[100px] max-md:ms-[100px]">
                                <img width="66px" src="{{asset('asset/others/LOGO.png')}}" alt="">
                            </div>

                            <div class=" w-1/3 ml-auto h-12">
                                <a href="{{route('register_siswa')}}"
                                    class="relative w-[100px] left-[80px] h-[100px] bg-red-800 rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                </a>
                                <a href="{{route('register_siswa')}}"
                                    class="absolute top-[152px] left-[92px] -ml-4 bg-white rounded-3xl shadow z-0  w-[85px]  h-[85px] rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                    <img src="{{asset('asset/login_register/Students.png')}}" alt="">
                                </a>
                            </div>
                            <a href="{{route('register_guru')}}" class="w-1/3 mr-auto h-12">
                                <a href="{{route('register_guru')}}"
                                    class="relative w-[165px]  h-[100px] bg-red-800 top-[25px] right-[73px] rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                </a>
                                <a href="{{route('register_guru')}}"
                                    class="absolute top-[152px] left-[215px] -ml-4 bg-white rounded-3xl shadow z-0  w-[85px]  h-[85px] rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                    <img src="{{asset('asset/login_register/Teacher.png')}}" alt="">
                                </a>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>
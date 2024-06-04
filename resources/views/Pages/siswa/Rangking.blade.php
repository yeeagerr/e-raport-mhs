<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Document</title>
</head>

<body>

    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>


    <section class="h-screen w-screen bg-gray-200 flex flex-col-reverse sm:flex-row min-h-0 min-w-0">
        @include('component.aside')

        <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-x-hidden">
            @include('component.Navbar')

            <section class="flex-1 pt-3 md:p-6 lg:mb-0 lg:min-h-0 lg:min-w-0">
                <div class="flex flex-col lg:flex-row h-full w-full">

                    @include('component.Sidebar')


                    <div class="border h-full w-full lg:flex-1 px-3 min-h-0 min-w-0">

                        <!-- overflow content right -->
                        <div class="w-full h-full min-h-0 min-w-0 mt-10">
                            <div class="bg-red-800 w-full h-12 shadow rounded-t-2xl">
                            </div>
                            <div class="bg-red-700 w-full h-[20%] shadow rounded-b-xl">
                                <div class="flex">
                                    <div class="relative ms-10 mt-5 w-20 h-20 bg-white rounded-full flex p-5 shadow-xl">
                                        <img src="{{asset('asset/others/Human.png')}}" class="relative" width="50px"
                                            alt="">
                                    </div>
                                    <div class="flex flex-col mt- gap-2 py-2">
                                        <p class="ms-4 text-white text-md">Selamat Datang</p>
                                        <p class="ms-4 text-white text-xl font-extrabold">{{$user->nama}} |
                                            {{$user->kelas_siswa->nama_kelas}}</p>
                                        @foreach ($siswa as $i)
                                        @if ($i->id == $user->id)
                                        <p class="ms-4 text-white text-md">Rata Rata Nilai : {{$i->rata}}</p>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                @php
                                $count=1;
                                $count2=1;
                                @endphp
                                @foreach ($siswa as $i)
                                @php
                                $count2++;
                                @endphp
                                @if ($i->id == $user->id)
                                <h1
                                    class=" me-10 font-extrabold mt-[-60px] text-3xl text-white max-sm:hidden text-end text-start">
                                    Rank : {{$count2 < 10 ? "0" : "" }}{{$count2}}</h1>
                                        @endif
                                        @endforeach

                            </div>

                            <div class="w-full h-[70%] mt-3  min-h-0 min-w-0 overflow-auto overflow-x-hidden">

                                @foreach ($siswa as $i)

                                <div class="bg-red-700 flex w-[100%] h-40 rounded-2xl mb-3">
                                    <h1
                                        class="pt-[58px] ms-10 max-sm:ms-1 font-extrabold text-5xl text-white max-sm:text-[20px]">
                                        {{$count < 10 ? "0" : "" }}{{$count++}}</h1>
                                            <div
                                                class="relative mt-[45px] ms-10 max-sm:ms-1 w-20 h-20 max-sm:w-15 max-sm:h-15 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                                <img src="{{asset('asset/others/Human.png')}}"
                                                    class="relative max-sm:w-[20px]" width="50px" alt="">
                                            </div>
                                            <div class="flex flex-col gap-2 mt-10 py-2">
                                                <p
                                                    class="ms-10 text-white text-2xl font-extrabold max-sm:text-[15px] max-sm:ms-1">
                                                    {{$i->nama}} | {{$i->kelas_siswa->nama_kelas}}</p>

                                                <p class="ms-10 text-white text-lg max-sm:text-[10px] max-sm:ms-1">Rata
                                                    Rata
                                                    Nilai : {{$i->rata}}</p>

                                            </div>
                                </div>
                                @endforeach


                            </div>
            </section>
            <!-- 
    <footer class="px-6 py-3 border-t flex w-full items-end">
      <p class="text-gray-600">Made by @codingsafari</p>
      <div class="flex-1"></div>
      <button
        class="shadow-md ml-auto border rounded-full ml-2 w-14 h-14 text-center leading-none text-green-200 bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-red-800 focus:border-transparent">
        <i class="fas fa-question fill-current"></i>
      </button>
    </footer> -->

        </main>
    </section>

    <style>

    </style>

</html>
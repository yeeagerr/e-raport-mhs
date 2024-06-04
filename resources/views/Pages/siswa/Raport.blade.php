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
    <link rel="stylesheet" href="{{asset('css/others/raport.css')}}">
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
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-lg">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        RAPORT
                                    </button>
                                </div>


                            </div>
                            <div
                                class="grid grid-cols-12 flex relative left-[15%] max-sm:left-[-0%] max-xl:left-[0%] flex-col mt-5 gap-10 max-sm:flex">

                                @include('component.raport')

                                <div class="col-span-4 mt-10 max-sm:flex">
                                    <div class="relative w-96 h-[500px]">
                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Nama</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$user->nama}}
                                        </div>
                                        <div
                                            class="absolute top-6 left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[32px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$user->kelas_siswa->nama_kelas}}
                                        </div>
                                        <div
                                            class="absolute top-[93px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[103px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Jurusan</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$user->kelas_siswa->jurusan}}
                                        </div>
                                        <div
                                            class="absolute top-[164px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[174px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Rata Rata
                                            Nilai</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            No. Handphone
                                        </div>
                                        <div
                                            class="absolute top-[235px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[245px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Ranking</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            -
                                        </div>
                                        <div
                                            class="absolute top-[307px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[315px] md:-ml-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('raport_print', $jurusan)}}"
                            class="mt-[-50px] me-10 float-end border-2  border-sky-500 relative z-10 mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                            Cetak Raport
                        </a>
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
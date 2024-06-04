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

                        <div class="w-full h-full min-h-0 min-w-0 mt-10">
                            <div class="bg-red-800 w-full h-12 shadow rounded-t-2xl">
                            </div>
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-lg">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        Profile Guru
                                    </button>
                                </div>


                            </div>
                            <div
                                class="grid grid-cols-12 flex relative left-[15%] max-sm:left-[-0%] max-xl:left-[0%] flex-col mt-5 gap-10 max-sm:flex">
                                <div class="col-span-4">

                                    <div class="h-96 pt-12">

                                        <div class="max-w-sm mx-auto bg-white  rounded-lg overflow-hidden shadow-lg">
                                            <div class="border-b px-4 pb-6">
                                                <div class="text-center my-4">
                                                    <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                                                        src="{{asset('asset/others/HUMAN.png')}}" alt="">
                                                    <div class="py-2">
                                                        <h3 class="font-bold text-2xl text-gray-800 text-black mb-1">
                                                            {{$id->nama}}</h3>
                                                        <div class="inline-flex text-gray-700 text-black items-center">
                                                            <svg class="h-5 w-5 text-gray-400 text-blac mr-1"
                                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" width="24" height="24">
                                                                <path class=""
                                                                    d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                            </svg>
                                                            MULTISTUDI HIGH SCHOOL BATAM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex gap-2 px-2">
                                                    <button
                                                        class="flex-1 rounded-full bg-blue-600 dark:bg-red-800 text-white dark:text-white antialiased font-bold hover:bg-red-700 px-4 py-2">
                                                        Social Media
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="px-4 py-4">
                                                <div
                                                    class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="col-span-4 mt-10 max-sm:flex">
                                    <div class="relative w-96 h-[500px]">
                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">NUPTK</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$id->nuptk}}
                                        </div>
                                        <div
                                            class="absolute top-6 left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[32px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">No
                                            Handphone</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            -
                                        </div>
                                        <div
                                            class="absolute top-[93px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[103px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            -
                                        </div>
                                        <div
                                            class="absolute top-[164px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[174px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Walikelas</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$id->kelas_siswa->nama_kelas ?? "-"}}
                                        </div>
                                        <div
                                            class="absolute top-[235px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[245px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Riwayat
                                            Mengajar</label>
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
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


    <section class="h-screen w-screen bg-gray-200 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 ">
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
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-xl">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        SISWA
                                    </button>
                                </div>
                                <a href="{{route('kelas_guru', 'siswa')}}"><img class="float-right mt-[-55px] me-10"
                                        src="{{asset('asset/others/SIGN OUT BUTTON.png')}}" width="70px"></a>
                            </div>
                            @php
                    $count = 1;
                    @endphp
                            <div class="w-full h-[70%] mt-3  min-h-0 min-w-0 overflow-auto overflow-x-hidden">
                                @foreach ($siswa as $i)
                                <div class="bg-red-700 flex w-[100%] h-40 rounded-2xl mb-3">
                                    <h1
                                        class="pt-[58px] ms-10 max-sm:ms-1 font-extrabold text-5xl text-white max-sm:text-[20px]">
                                        {{$count++}}</h1>
                                    <div
                                        class="relative mt-[45px] ms-10 max-sm:ms-1 w-20 h-20 max-sm:w-15 max-sm:h-15 bg-white rounded-full flex justify-center items-center text-center p-5 shadow-xl">
                                        <img src="{{asset('asset/others/Human.png')}}" class="relative max-sm:w-[20px]"
                                            width="50px" alt="">
                                    </div>
                                    <div class="flex flex-col gap-2 mt-10 py-2">
                                        <p
                                            class="ms-10 text-white text-2xl font-extrabold max-sm:text-[15px] max-sm:ms-1">
                                            {{$i->nama}} | {{$i->kelas_siswa->nama_kelas}}</p>
                                        <div class="ms-10">
                                            @if ($user->nuptk)

                                            <a href="{{route('biodata_siswa', $i->id)}}">
                                                <button
                                                    class="order-1 border-solid border-2 border-sky-500relative mt-1 py-1 px-1 text-black text-base font-bold nded-full text-sm overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                                    Biodata Siswa
                                                </button>
                                            </a>


                                            @else
                                            <a href="{{route('update_siswa_show', $i->id)}}">
                                                <button
                                                    class="order-1 border-solid border-2 border-sky-500relative mt-1 py-1 px-1 text-black text-base font-bold nded-full text-sm overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                                    UPDATE
                                                DATA?                                                </button>
                                            </a>
                                            @endif


                                        </div>
                                    </div>


                                </div>
                                @endforeach

                            </div>
            </section> 
        </main>
    </section>

    <style>

    </style>

</html>
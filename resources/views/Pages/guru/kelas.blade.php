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
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-xl">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        {{strtoupper($page)}}
                                    </button>
                                </div>
                            </div>


                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                                @foreach ($kelas as $i)
                                @if ($page == "siswa")
                                <a href="{{route('list_siswa', $i->id)}}"
                                    class="flex mt-4 flex-col border-[20px] border-red-700 overflow-hidden p-8 rounded-2xl shadow-large bg-white w-[80%] h-[180px] max-sm:w-full">
                                    <div class="flex items-center justify-center w-full h-full text-center">
                                        <div>
                                            <h2 class="text-black font-bold text-lg lg:text-3xl">{{$i->nama_kelas}}</h2>
                                        </div>
                                    </div>
                                </a>
                                @endif

                                @if ($page == "kelas")
                                <a href="{{route('kelas_guru_input', $i->id)}}"
                                    class="flex mt-4 flex-col border-[20px] border-red-700 overflow-hidden p-8 rounded-2xl shadow-large bg-white w-[80%] h-[180px] max-sm:w-full">
                                    <div class="flex items-center justify-center w-full h-full text-center">
                                        <div>
                                            <h2 class="text-black font-bold text-lg lg:text-3xl">{{$i->nama_kelas}}</h2>
                                        </div>
                                    </div>
                                </a>
                                @endif
                                @endforeach

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


{{-- @foreach ($kelas as $i)
<div>
    <div>
        <div class="gerak1">
            <div class="rectangle-parent69">
                <div class="frame-child3"></div>
                @if ($page == "siswa")
                <a href="{{route('list_siswa', $i->id)}}" class="rectangle-parent4">
                    <div class="frame-child4"></div>
                    <b class="x-pplg">{{$i->nama_kelas}}</b>
                </a>
                @endif

                @if ($page == "kelas")
                <a href="{{route('kelas_guru_input', $i->id)}}" class="rectangle-parent4">
                    <div class="frame-child4"></div>
                    <b class="x-pplg">{{$i->nama_kelas}}</b>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach --}}
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
                            <div class="bg-red-700 w-full h-24 shadow rounded-b-lg">
                                <div class="flex justify-center">
                                    <button
                                        class="border-solid border-2 border-sky-500relative mt-6 items-center content-center text-center py-2 px-8 text-black text-base font-bold nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                        INPUT
                                    </button>
                                </div>


                            </div>
                            <div class="grid grid-flow-row sm:grid-flow-col mx-auto sm:text-center">
                                <div class="flex justify-center">
                                    <div class="relative w-full h-[500px]">
                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Walikelas</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$kelas->hasGuru->nama}}
                                        </div>
                                        <div
                                            class="absolute top-8 left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[32px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Kelas</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$kelas->nama_kelas}}
                                        </div>
                                        <div
                                            class="absolute top-[103px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[103px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Jurusan</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{$kelas->jurusan}}
                                        </div>
                                        <div
                                            class="absolute top-[173px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[174px] md:-ml-1">
                                        </div>

                                        <label class="mt-2 block text-gray-700 text-sm font-bold mb-2">Jumlah
                                            Siswa</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            {{count($kelas->hasSiswa)}}
                                        </div>
                                        <div
                                            class="absolute top-[245px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[245px] md:-ml-1">
                                        </div>

                                        {{-- <label
                                            class="mt-2 block text-gray-700 text-sm font-bold mb-2">Ranking</label>
                                        <div
                                            class="bg-white text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded-3xl py-2 px-4 block w-[100%] h-[7%] appearance-none relative z-10 flex items-center justify-center">
                                            Username
                                        </div>
                                        <div
                                            class="absolute top-[315px] left-15 -ml-4 w-[103%] h-[9%] bg-red-800 rounded-3xl shadow z-0 max-sm:-ml-1 max-sm:top-[315px] md:-ml-1">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="flex justify-center mt-10 h-[340px] max-sm:relative max-sm:top-[-130px]">
                                    <div
                                        class="max-w-sm mx-auto w-full  sm:h-full bg-red-800 rounded-xl overflow-hidden shadow-lg">
                                        <div class="border-b px-4 pb-6">
                                            <form class="text-center my-4" enctype="multipart/form-data"
                                                action="{{route('kelas_guru_input_post', $kelas->id)}}" method="POST">
                                                @csrf
                                                <div class="py-2">
                                                    <h3 class="font-bold text-2xl text-gray-800 text-white mb-1">Input
                                                        Nilai</h3>
                                                    <div
                                                        class="mt-3 relative inline-flex w-[50%] items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-red-500 rounded-xl group">
                                                        <span
                                                            class="absolute top-0 right-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-red-700 rounded group-hover:-mr-4 group-hover:-mt-4">
                                                            <span
                                                                class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
                                                        </span>
                                                        <span
                                                            class="absolute bottom-0 left-0 w-full h-full transition-all duration-500 ease-in-out delay-200 -translate-x-full translate-y-full bg-red-600 rounded-2xl group-hover:mb-12 group-hover:translate-x-0"></span>
                                                        <span
                                                            class="relative w-full h-full flex items-center justify-center text-white transition-colors duration-200 ease-in-out group-hover:text-white">
                                                            <label for="inputFile1"
                                                                class="cursor-pointer flex items-center justify-center text-white w-full h-full">
                                                                <input type="file" id="inputFile1" name="excel_nilai"
                                                                    class="hidden" />
                                                                Choose File
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <h3 class="font-bold text-2xl text-gray-800 text-white mt-4">Input
                                                        Absensi Eskul</h3>
                                                    <div
                                                        class="mt-3 relative inline-flex w-[50%] items-center justify-start px-6 py-3 overflow-hidden font-medium transition-all bg-red-500 rounded-xl group">
                                                        <span
                                                            class="absolute top-0 right-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-red-700 rounded group-hover:-mr-4 group-hover:-mt-4">
                                                            <span
                                                                class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
                                                        </span>
                                                        <span
                                                            class="absolute bottom-0 left-0 w-full h-full transition-all duration-500 ease-in-out delay-200 -translate-x-full translate-y-full bg-red-600 rounded-2xl group-hover:mb-12 group-hover:translate-x-0"></span>
                                                        <span
                                                            class="relative w-full h-full flex items-center justify-center text-white transition-colors duration-200 ease-in-out group-hover:text-white">
                                                            <label for="inputFile"
                                                                class="cursor-pointer flex items-center justify-center text-white w-full h-full">
                                                                <input name="excel_absen" type="file" id="inputFile"
                                                                    class="hidden" />
                                                                Choose File
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="w-full mt-1">
                                                    <button
                                                        class="relative mt-6 max-sm:mt-1 items-center content-center text-center py-2 px-8 text-black text-base font-bold rounded-full overflow-hidden bg-white transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-red-800 before:to-red-800 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
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

    <script>
        document.getElementById("inputFile").addEventListener("change", function() {
  if (this.value) {
    this.setAttribute("data-title", this.value.replace(/^.*[\\\/]/, ''));
  } else {
    this.setAttribute("data-title", "No file chosen");
  }
});
    </script>
    <style>
        #inputFile::-webkit-file-upload-button {
            visibility: hidden;
        }
    </style>

</html>

{{-- <form class="rectangle-group" enctype="multipart/form-data" action="{{route('kelas_guru_input_post', $kelas->id)}}"
    method="POST">
    @csrf
    <div class="vector-group">
        <input class="choose-file" type="file" id="fileInput" name="excel_nilai">
        <label for="fileInput" class="custom-file-label">Choose file</label>
    </div>
    <div class="vector-container">
        <input class="choose-file" type="file" name="excel_absen" id="fileInput2">
        <label for="fileInput2" class="custom-file-label">Choose file</label>
    </div>
    <h3 class="input-nilai">Input Nilai</h3>
    <h3 class="input-absensi-eskul">Input Absensi Eskul</h3>
    <button type="submit">Submit</button>
</form> --}}
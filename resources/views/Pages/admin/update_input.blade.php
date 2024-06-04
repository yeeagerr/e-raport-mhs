<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/input_nilai.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="second-row-separator">
                <div class="table-atas"></div>
                <div class="fourth-row-separator">
                    <div class="table1"></div>
                    <button class="sign-out-button1">
                        <div class="table-atas1"></div>
                        <div class="sign-out-button-inner">
                            <div class="rectangle-parent3">
                                <div class="frame-child11"></div>
                                <b class="siswa1">INPUT</b>
                            </div>
                    </button>
                </div>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="pertama">
                <div class="username-text">Nama</div>
                <div class="input-area">
                    <div class="bar-red"></div>
                    <div class="bar-white-parent">
                        <div class="bar-white"></div>
                        <b class="xi-pplg-i">{{$id->nama}}</b>
                    </div>
                </div>
                <div class="kedua">
                    <div class="username-text">Kelas</div>
                    <div class="input-area">
                        <div class="bar-red"></div>
                        <div class="bar-white-parent">
                            <div class="bar-white"></div>
                            <b class="xi-pplg-i">{{$id->kelas_siswa->nama_kelas}}</b>
                        </div>
                    </div>
                    <div class="ketiga">
                        <div class="username-text">Wali Kelas</div>
                        <div class="input-area">
                            <div class="bar-red"></div>
                            <div class="bar-white-parent">
                                <div class="bar-white"></div>
                                <b class="xi-pplg-i">{{$id->kelas_siswa->hasGuru[0]->nama}}</b>
                            </div>
                        </div>
                        <div class="keempat">
                            <div class="username-text">Jurusan</div>
                            <div class="input-area">
                                <div class="bar-red"></div>
                                <div class="bar-white-parent">
                                    <div class="bar-white"></div>
                                    <b class="xi-pplg-i">{{$id->kelas_siswa->jurusan}}</b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content2">
                        <form class="rectangle-group" enctype="multipart/form-data"
                            action="{{route('kelas_guru_input_post', $id->id)}}" method="POST">
                            @csrf
                            <div class="vector-group">
                                <input class="choose-file" type="file" id="fileInput" name="excel_nilai">
                                <label for="fileInput" class="custom-file-label">Choose file</label>
                            </div>
                            <div class="vector-container">
                                <input class="choose-file" type="file" name="excel_absen" id="fileInput2">
                                <label for="fileInput2" class="custom-file-label">Choose file</label>
                            </div>
                            <h3 class="input-nilai">Update Data Nilai</h3>
                            <h3 class="input-absensi-eskul">Update Data Absensi</h3>
                            <button type="submit">Submit</button>
                        </form>

                    </div>

                    <footer>
                        <div class="kaki">
                        </div>
                    </footer>
                </div>
</body>

</html>
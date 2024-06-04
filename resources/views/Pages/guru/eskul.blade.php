<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/kelas.css')}}">
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
                                <b class="siswa1">Ekstrakulikuler</b>
                            </div>
                    </button>
                </div>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="grid">
                @foreach ($unikEskul as $i)
                <div>
                    <div>
                        <div class="gerak1">
                            <div class="rectangle-parent69">
                                <div class="frame-child3"></div>
                                <a href="{{route('list_eskul', $i->nama_ekskul)}}" class="rectangle-parent4">
                                    <div class="frame-child4"></div>
                                    <b class="x-pplg">{{$i->nama_ekskul}}</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <footer>
                <div class="kaki">
                </div>
            </footer>
        </div>
</body>

</html>
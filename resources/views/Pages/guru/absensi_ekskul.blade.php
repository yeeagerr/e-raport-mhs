<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/others/absensi.css')}}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        @include('component.Navbar')

        <main class="main-content">
            <div class="table-atas-parent">
                <div class="table-atas"></div>
                <button class="table-atas-group">
                    <div class="table-atas1"></div>
                    <b class="profile-wali-kelas">ANGGOTA</b>
                </button>
            </div>
        </main>


        <div id="sidebar">
            @include('component.Sidebar')
        </div>

        <div id="content1">
            <div class="account-bar134">
                <div class="account-bar-child251"></div>
                <div class="student-picture">
                    <div class="useraltfill-instance-useraltfi"></div>
                    <img class="user-alt-fill-icon79" loading="lazy" alt="" src="{{asset('asset/others/Human.png')}}" />
                </div>
                <div class="student-name">
                    <b class="muhamaad-thio-sadewa-container2">
                        <p class="muhamaad-thio-sadewa2">{{$id->nama}}</p>
                        <p class="xi-pplg-i6">{{$id->kelas_siswa->nama_kelas}}</p>
                    </b>
                </div>
            </div>
            <div class="gerak1">
                <div class="username-text97">Bidang</div>
                <div class="activity-labels">
                    <div class="bar-red117"></div>
                    <div class="activity-titles">
                        <div class="bar-white117"></div>
                        <b class="script-writter2">{{$id->hasJurusan[0]->nama_ekskul}}</b>
                    </div>
                </div>
            </div>
            <div class="gerak2">
                <div class="username-text97">Divisi</div>
                <div class="activity-labels">
                    <div class="bar-red117"></div>
                    <div class="activity-titles">
                        <div class="bar-white117"></div>
                        <b class="script-writter2"></b>
                    </div>
                </div>
            </div>
        </div>

        <div id="content2">
            <div class="account-bar135">
                <div class="attendance-header-child2"></div>
                <div class="bulan2">
                    <select>
                        <option value="0">Bulan:</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>

                <div class="attendance-header-child3"></div>
                <div class="tahun2">
                    <select>
                        <option value="0">Tahun</option>
                        <option value="1">2024</option>
                        <option value="2">2024</option>
                        <option value="3">2024</option>
                        <option value="4">2024</option>
                        <option value="5">2024</option>
                        <option value="6">2024</option>
                        <option value="7">2024</option>
                        <option value="8">2024</option>
                        <option value="9">2024</option>
                        <option value="10">2024</option>
                        <option value="11">2024</option>
                        <option value="12">2024</option>
                    </select>
                </div>

                <div class="geser">
                    <div class="nama53">
                        <div class="bar-red119"></div>
                        <div class="week-labels">
                            <div class="bar-white119"></div>
                            <div class="minggu-12">Minggu 1</div>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio1" name="radio-group" class="name-bars">
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio2" name="radio-group" class="attendance-header2">
                        <span class="checkmark"></span>
                    </div>
                </div>

                <div class="geser1">
                    <div class="nama53">
                        <div class="bar-red119"></div>
                        <div class="week-labels">
                            <div class="bar-white119"></div>
                            <div class="minggu-12">Minggu 2</div>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio3" name="radio-groups2" class="name-bars">
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio4" name="radio-groups2" class="attendance-header2">
                        <span class="checkmark"></span>
                    </div>
                </div>

                <div class="geser2">
                    <div class="nama53">
                        <div class="bar-red119"></div>
                        <div class="week-labels">
                            <div class="bar-white119"></div>
                            <div class="minggu-12">Minggu 3</div>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio3" name="radio-groups3" class="name-bars">
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio4" name="radio-groups3" class="attendance-header2">
                        <span class="checkmark"></span>
                    </div>
                </div>

                <div class="geser3">
                    <div class="nama53">
                        <div class="bar-red119"></div>
                        <div class="week-labels">
                            <div class="bar-white119"></div>
                            <div class="minggu-12">Minggu 4</div>
                        </div>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio3" name="radio-groups4" class="name-bars">
                        <span class="checkmark"></span>
                    </div>
                    <div class="checkbox-container">
                        <input type="radio" id="radio4" name="radio-groups4" class="attendance-header2">
                        <span class="checkmark"></span>
                    </div>
                </div>





            </div>
        </div>
    </div>

    <footer>
        <div class="kaki">
        </div>
    </footer>
    </div>
</body>

</html>
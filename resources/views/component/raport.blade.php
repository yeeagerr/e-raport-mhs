<div class="col-span-5">
    <div class="relative bg-white w-full h-[600px] rounded-lg shadow overflow-auto p-3">
        <div class="heroV">
            <div class="informasi">
                <div class="infosatu">
                    <div class="rowinfo">
                        <p>Nama Peserta Didik</p>
                        <p>NIS / NISN</p>
                        <p>Kelas</p>
                        <p>Semester</p>
                    </div>

                    <div class="rowdot">
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </div>

                    <div class="rowinfodata">
                        <p>{{$user->nama}}</p>
                        <p>{{$user->nisn}}</p>
                        <p>{{$user->kelas_siswa->nama_kelas}}</p>
                        <p>Ganjil</p>
                    </div>
                </div>

                <div class="infodua">
                    <div class="rowinfo">
                        <p>Sekolah</p>
                        <p>Program Keahlian</p>
                        <p>Tahun Pelajaran</p>
                    </div>

                    <div class="rowdot">
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </div>

                    <div class="rowinfodata">
                        <p>SMKS Multistudi High School</p>
                        <p>{{$user->kelas_siswa->jurusan}}</p>
                        <p>2024/2026</p>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th scope="col" style="width: 30px">No</th>
                        <th scope="col" style="width: 150px">Mata Pelajaran</th>
                        <th scope="col" style="width: 40px">
                            Nilai <br />
                            Akhir
                        </th>
                        <th scope="col">Capaian Kompetensi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp
                    @foreach ($nilai as $i)
                    <tr>
                        <th scope="row" rowspan="1" style="text-align: center">
                            {{$count++}}
                        </th>
                        <td rowspan="1">{{$i->MapelNilai->nama_mapel}}</td>
                        <td rowspan="1" style="text-align: center">{{$i->na}}</td>
                        <td style="padding: 10px 5px 10px 5px">
                            @php
                            if ($i->na <= 70) { echo "Pada semester ini, siswa atas nama " . $user->nama . " telah
                                mengikuti pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan
                                hasil evaluasi, nilai yang diperoleh adalah " . $i->na . ", yang belum memenuhi cakupan
                                minimum yaitu " . $i->ckmin . ". Siswa menunjukkan pemahaman dasar yang masih perlu
                                ditingkatkan, terutama dalam " . $i->MapelNilai->nama_mapel . ". Diperlukan upaya lebih
                                lanjut melalui program remedial dan bimbingan tambahan untuk mencapai kompetensi yang
                                diharapkan.";
                                } else if($i->na == 100) {
                                echo "Pada semester ini, siswa atas nama " . $user->nama . " telah mengikuti
                                pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan hasil
                                evaluasi, nilai yang diperoleh adalah 100, yang menunjukkan pencapaian sempurna. Siswa
                                telah menunjukkan pemahaman yang luar biasa dan kemampuan yang sangat baik dalam semua
                                aspek pembelajaran, termasuk " . $i->MapelNilai->nama_mapel . ". Prestasi ini
                                mencerminkan dedikasi dan kerja keras siswa dalam belajar. Diharapkan siswa dapat terus
                                mempertahankan dan mengembangkan kemampuan ini pada semester-semester berikutnya.";
                                } else {
                                echo "Pada semester ini, siswa atas nama " . $user->nama . " telah mengikuti
                                pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan hasil
                                evaluasi, nilai yang diperoleh adalah " . $i->na . ", yang berada di tingkat menengah.
                                Siswa telah menunjukkan pemahaman yang baik pada beberapa aspek, terutama dalam " .
                                $i->MapelNilai->nama_mapel . ", namun masih perlu meningkatkan keterampilan. Diharapkan
                                dengan usaha yang konsisten dan bimbingan tambahan, siswa dapat mencapai kompetensi yang
                                lebih tinggi pada semester berikutnya.";
                                }
                                @endphp

                        </td>
                    </tr>
                    @endforeach



                    <!-- Nyatu -->
                    <tr>
                        <th scope="row" rowspan="7" style="">{{$count}}</th>
                        <td colspan="3">Dasar - Dasar Program Keahlian</td>
                    </tr>

                    @foreach ($nilai_kompetensi as $i)
                    <tr>
                        <td rowspan="1">
                            a. {{$i->MapelNilai->nama_mapel}}
                        </td>
                        <td rowspan="1" style="text-align: center">{{$i->na}}</td>
                        <td style="padding: 10px 5px 10px 5px">
                            @php
                            if ($i->na <= 70) { echo "Pada semester ini, siswa atas nama " . $user->nama . " telah
                                mengikuti pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan
                                hasil evaluasi, nilai yang diperoleh adalah " . $i->na . ", yang belum memenuhi cakupan
                                minimum yaitu " . $i->ckmin . ". Siswa menunjukkan pemahaman dasar yang masih perlu
                                ditingkatkan, terutama dalam " . $i->MapelNilai->nama_mapel . ". Diperlukan upaya lebih
                                lanjut melalui program remedial dan bimbingan tambahan untuk mencapai kompetensi yang
                                diharapkan.";
                                } else if($i->na == 100) {
                                echo "Pada semester ini, siswa atas nama " . $user->nama . " telah mengikuti
                                pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan hasil
                                evaluasi, nilai yang diperoleh adalah 100, yang menunjukkan pencapaian sempurna. Siswa
                                telah menunjukkan pemahaman yang luar biasa dan kemampuan yang sangat baik dalam semua
                                aspek pembelajaran, termasuk " . $i->MapelNilai->nama_mapel . ". Prestasi ini
                                mencerminkan dedikasi dan kerja keras siswa dalam belajar. Diharapkan siswa dapat terus
                                mempertahankan dan mengembangkan kemampuan ini pada semester-semester berikutnya.";
                                } else {
                                echo "Pada semester ini, siswa atas nama " . $user->nama . " telah mengikuti
                                pembelajaran mata pelajaran " . $i->MapelNilai->nama_mapel . ". Berdasarkan hasil
                                evaluasi, nilai yang diperoleh adalah " . $i->na . ", yang berada di tingkat menengah.
                                Siswa telah menunjukkan pemahaman yang baik pada beberapa aspek, terutama dalam " .
                                $i->MapelNilai->nama_mapel . ", namun masih perlu meningkatkan keterampilan. Diharapkan
                                dengan usaha yang konsisten dan bimbingan tambahan, siswa dapat mencapai kompetensi yang
                                lebih tinggi pada semester berikutnya.";
                                }
                                @endphp

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="twotable">
                <table style="width: 30%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 12.5px">No</th>
                            <th scope="col" style="width: 100px">
                                Nama Ekstrakulikuler
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 20px">
                            <td style="text-align: center">-</td>
                            <td style="text-align: center">-</td>
                        </tr>
                        <tr style="height: 20px">
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                        </tr>
                        <tr style="height: 20px">
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                        </tr>
                    </tbody>
                </table>

                <table style="width: 30%">
                    <thead>
                        <tr>
                            <th scope="col" colspan="4">Absen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 20px">
                            <td style="width: 60px">Sakit</td>
                            <td style="width: 4px; text-align: center">:</td>
                            <td style="width: 80px; text-align: center">{{$absen->sakit ?? "0"}}</td>
                            <td style="width: 30px">hari</td>
                        </tr>
                        <tr style="height: 20px">
                            <td style="width: 60px">Izin</td>
                            <td style="width: 4px; text-align: center">:</td>
                            <td style="width: 80px; text-align: center">{{$absen->izin ?? "0"}}</td>
                            <td style="width: 30px">hari</td>
                        </tr>

                        <tr style="height: 20px">
                            <td style="width: 100px">Tanpa Keterangan</td>
                            <td style="width: 4px; text-align: center">:</td>
                            <td style="width: 80px; text-align: center">{{$absen->alpha ?? "0"}}</td>
                            <td style="width: 30px">hari</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ttd">
                <div class="orangtua-wali">
                    <p class="siapaIni">Orang Tua / Wali,</p>
                    <div class="boxttd">
                        <p>....................................</p>
                    </div>
                </div>
                <div class="kepalasekolah">
                    <p style="text-align: center; font-size: 10px">
                        Mengetahui,<br />
                        Kepala SMK Multistudi High School Batam
                    </p>
                    <div class="boxttd-kepsek">
                        <p style="text-align: center; font-size: 10px">
                            Joni Firdaus, S.S <br />NRKS:19023L0073160241150015
                        </p>
                    </div>
                </div>
                <div class="walikelas">
                    <p class="siapaIni" style="font-weight: normal">
                        Batam, 23 Juni 2023
                    </p>
                    <p class="siapaIni"><strong>Wali Kelas</strong></p>
                    <div class="walibox">
                        <p class="siapaIni" style="text-align: start">
                            {{$user->kelas_siswa->hasGuru->nama}}
                        </p>
                    </div>
                </div>
            </div>

            <p class="info-rapor">
                <strong>Rapor Semester Genap TP. 2022 - 2023</strong>
            </p>
        </div>
    </div>
</div>
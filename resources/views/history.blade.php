@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sejarah.css') }}">
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{ asset('img/37.jpg') }});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Sejarah</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sejarah">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>SEJARAH LAHIRNYA BPI</h1>
                    <p>Sejrah lahirnya yayasan BPI</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('img/pendiri-yayasan.jpg') }}">
                <center>
                    <p>Pendiri Yayasan BPI</p>
                </center><br>
                <p>Persetujuan Renville yang ditandatangani pada tanggal 17 Januari 1948, merupakan tonggak awal
                    pertimbangan lahirnya Sekolah Menengah Pertama (SMP) Petang.
                    <br><br>
                    Dua SMP milik Pemerintah Negara Pasundan dan beberapa SMP Swasta, ternyata tidak mampu menampung
                    anak-anak yang kembali dari pengungsian karena arus pelajar yang kembali ke Kota Bandung terus
                    mengalir.
                    <br><br>
                    Situasi tersebut menyentuh hati guru-guru yang tergabung dalam Serikat Guru Indonesia (SGI).
                    Beberapa guru yang pada pagi hari mengajar di sekolah pemerintah, berupaya mendirikan SMP Swasta
                    yang diselenggarakan pada petang hari.
                    <br><br>
                    Upaya tersebut akhirnya terwujud. Berdirilah SMP yang kemudian diberi nama SMP Petang,
                    diselenggarakan oleh SGI dan bertempat di Europese Lagere School, Logeweg 3 (kini Jalan
                    Wastukencana).
                    <br><br>
                    SMP Petang yang rencananya akan dibuka tanggal 17 Agustus 1948, akan dipimpin oleh Bapak Abdurrahman
                    Natadiria. Namun menjelang pembukaan ternyata Bapak Abdurrahman Natadiria ditangkap Belanda, dan
                    akhirnya diputuskan bahwa untuk sementara Bapak R. Soetardjo ditunjuk sebagai Kepala Sekolah.</p>
                <br>
                <div class="row">
                    <div class="col-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img/58.jpg')}}">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img/50.jpg')}}">
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <img src="{{asset('img/54.jpg')}}">
                    </div>
                </div>
                <br><br>
                <p>Setelah Belanda melakukan Agresi Militer II pada tanggal 19 Desember 1948, peserta didik SMP Petang
                    semakin bertambah banyak. Setelah sekolah berjalan beberapa bulan, Kesulitan-kesulitan mulai muncul.
                    Hal ini disebabkan oleh lepas tangannya SGI dan menyerahkan sepenuhnya tanggung jawab pengelolaan
                    sekolah kepada Kepala Sekolah dan guru-guru SMP Petang. Kebutuhan alat-alat pelajaran, alat-alat
                    tulis, buku-buku pelajaran dan lain-lain turut menambah kesulitan SMP Petang, mengingat biaya untuk
                    memenuhi kebutuhan tersebut tidak ada.
                    <br><br>
                    Untuk mengatasi kesulitan dan memusyawarahkan jalan keluar/solusinya, maka kepala sekolah serta para
                    guru mengadakan pertemuan pada 1 Mei 1949 yang bertempat di gedung "Himpunan Saudara" di jalan Dalem
                    Kaum Bandung dan sepakat membentuk badan pengelola sekolah sebagai pengganti SGI.
                    <br><br>
                    Hasil pertemuan yang juga turut mengundang para orang tua murid, tokoh-tokoh pendidikan, tokoh
                    masyarakat dan tokoh lainnya tersebut adalah dibentuknya suatu badan yang diberi Nama "Badan
                    Perguruan Indonesia", disingkat BPI dan berbentuk Yayasan.
                    <br><br>
                    Berdasarkan kesepakatan dalam rapat pleno di gedung koperasi "Rukun Warga" Jalan Banceuy, menyetujui
                    pendirian yayasan , dengan susunan pengurus lengkap sebagai berikut :</p>

                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/50.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Jaman Sudjana Prawira</h6>
                                <p>Ketua I</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/54.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Sajoeti Wangsadikoesoemah</h6>
                                <p>Ketua II</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/56.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Soetardjo Sindoemintardjo</h6>
                                <p>Ketua III</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/57.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Rochdi Partaatmadja</h6>
                                <p>Sekretaris</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/58.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Soerya Argawisastra</h6>
                                <p>Bendahara</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/56.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Soedirdjo</h6>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/58.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Barastan Wiriaatmadja</h6>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/57.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R.E.Soewitaatmadja</h6>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/54.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Wiriaatmadja</h6>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/56.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Sain Nuryokusumo</h6>
                                <p>Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p>Pendirian Yayasan BPI dikukuhkan Akta Notaris No. 2 tanggal 10 Januari 1950, melalui Notaris Mas
                    Djokomadejo, berkedudukan di Tasikmalaya. Pada saat dikukuhkan, Yayasan BPI berkedudukan di Bandung,
                    bermodalkan f 17.00 (seribu tujuh ratus gulden), hasil pengumpulan dari anggota pengurus dan
                    beberapa orang tua peserta didik.
                    <br><br>
                    Dengan terbentuknya Yayasan BPI, maka secara resmi SMP Petang menjadi milik Yayasan dan selanjutnya
                    dinamai SMP BPI, dengan tujuan pokok :
                    <br><br>
                    "Mengabdi kepada masyarakat dengan jalan menyelenggarakan tempat-tempat pendidikan dalam arti kata
                    yang seluas-luasnya di mana anak didik dapat menerima pendidikan yang sebaik-baiknya agar mereka
                    menjadi warga negara yang berguna bagi nusa dan bangsa".
                    <br><br>
                    Dalam perjalanannya, dengan berbagai situasi dan kondisi, kepengurusan Yayasan BPI mengalami
                    berbagai perubahan dan penggantian.
                    <br><br>
                    Sampai dengan tahun 1967, komposisi Pengurus Yayasan BPI adalah sebagai berikut:</p>

                <div class="row">
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/50.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Jaman Sudjana Prawira</h6>
                                <p>Ketua I</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/54.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Sajoeti Wangsadikoesoemah</h6>
                                <p>Ketua II</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/56.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>R. Soetardjo Sindoemintardjo</h6>
                                <p>Ketua III</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/57.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Rochdi Partaatmadja</h6>
                                <p>Sekretaris</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="single-today-area">
                            <div class="img-ovrly"></div>
                            <div class="img-single-thumb">
                                <div>
                                    <img src="{{asset('img/56.jpg')}}">
                                </div>
                            </div>
                            <div class="today-inpo">
                                <h6>Soerya Argawisastra</h6>
                                <p>Bendahara</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Berdasarkan jerih payahnya dalam mendirikan dan mengelola Yayasan BPI serta atas persetujuan dari
                    semua pihak, nama-nama tersebut di atas akhirnya dikukuhkan sebagai Perintis dan Pendiri BPI dan
                    namanya diabadikan menjadi nama-nama gedung BPI yang terletak di Jalan Burangrang No. 8 Bandung.</p>
                <br>
                <h5>
                    Berikut susunan/komposisi Pengurus Yayasan BPI :
                </h5>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1949-1967 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>R. Jaman Sudjana Prawiratd</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>R. Sajoeti Wangsadikoesoemah/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>R. Soetardjo Sindoemintardjo</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris</td>
                            <td>Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara</td>
                            <td>Soeryo Argawisastra</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Pembantu</td>
                            <td>1. Soedirdjo<br>
                                2. Barastan Wiriaatmadja<br>
                                3. R.E. Soewitaatmadja<br>
                                4. Wiriaatmadjav<br>
                                5. Sain Nuryokusumo</td>
                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">2</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1967-1968 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>R. Jaman Sudjana Prawiratd</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>R. Sajoeti Wangsadikoesoemah/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>R. Soetardjo Sindoemintardjo</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris</td>
                            <td>Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara</td>
                            <td>H.R.E. Soewitaatmadja</td>
                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">3</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1968-1978 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>R. Jaman Sudjana Prawiratd</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>R. Sajoeti Wangsadikoesoemah/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>R. Soetardjo Sindoemintardjo</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 1</td>
                            <td>Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 2</td>
                            <td>R.E.A. Soepandi, S.H.</td>

                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara</td>
                            <td>H.R.E. Soewitaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 2</td>
                            <td>Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Pendidikan</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>

                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">4</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1978-1982 : :
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>R. Sajoeti Wangsadikoesoemah</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>R. Soetardjo Sindoemintardjo</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 1</td>
                            <td>Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 2</td>
                            <td>R.E.A. Soepandi, S.H.</td>

                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara</td>
                            <td>Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Pendidikan</td>
                            <td>1.Drs. Eddy Permadi<br>2. Drs. Bandi Syamsudin</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Komisaris Umum</td>
                            <td>R. Daddy S. Wirakusumah</td>
                        </tr>

                    </tbody>
                </table>

                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">6</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1990-1992 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>R. Soetardjo Sindoemintardjo</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 1</td>
                            <td>Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 2</td>
                            <td>R.E.A. Soepandi, S.H.</td>

                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara</td>
                            <td>Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Pendidikan</td>
                            <td>Drs. Bandi Syamsudin</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Komisaris Umum</td>
                            <td>1. R. Daddy S. Wirakusumah<br>2. R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Pembangunan</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">7</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1990-1992 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>H.Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 1</td>
                            <td>R.E.A. Soepandi, S.H.</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris 2</td>
                            <td>Drs. Bandi Syamsudin</td>

                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 2</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Komisaris Umum</td>
                            <td>1. R. Daddy S. Wirakusumah</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">8</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1993-1994 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>H.Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>H.R. Daddy S. Wirakusumah</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 2</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">9</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1995 - 1 Mei 1995
                                :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>H.Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>H.R. Daddy S. Wirakusumah</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 2</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Umum</td>
                            <td>Drs. H. Tatang Bachrum, B.A</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">10</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1 Mei 1995 - 2
                                Mei 1998 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>H.Margono Suradi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>H.R. Daddy S. Wirakusumah</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 2</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Umum</td>
                            <td>Drs. H. Tatang Bachrum, B.A/td>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">11</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2 Mei 1998 - 31
                                Desember 1998 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>H.R. Daddy S. Wirakusumah</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kombid Umum</td>
                            <td>Drs. H. Tatang Bachrum, AF/td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">12</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 1999-2001 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>Drs. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 3</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Drs. H. Tatang Bachrum AF</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara 1</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">13</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2001-2003 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>Drs. H. Eddy Permadi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 2</td>
                            <td>R.H. Soebijakto</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Drs. H. Ate Subrata, SH</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara </td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Rudi Susanto</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">14</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2004-2005 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Drs. H. Ate Subrata, SH</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara </td>
                            <td>Ir. H. Mucharam Sanusi, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Rudi Susanto</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">15</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2005 - 2007 :
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>Ir. H. Istanto Oerip</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Drs. H. Ate Subrata, SH</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara </td>
                            <td>Ir. H. Mucharam Sanusi, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Rudi Susanto</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">16</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2008-2012 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua </td>
                            <td>Ir. H. Mucharam, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Drs. H. Oni Yusroni Tjasmita</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara </td>
                            <td>Drs. H. Jajat Marjat</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">17</th>
                            <th scope="col" colspan="2">Susunan/Komposisi Pengurus Yayasan BPI periode 2012-2017 : </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua </td>
                            <td>H. Yayan Sudiarna, SE.Ak, MM</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ir. Fajar Susilo</td>
                            <td>Drs. H. Oni Yusroni Tjasmita</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Bendahara </td>
                            <td>Drs. H. Syarifudin, Ak. MM</td>
                        </tr>
                    </tbody>
                </table>

                <h5>
                    Berikut Susunan Pembina Yayasan BPI :
                </h5>

                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2001-2005 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua 1</td>
                            <td>H. Rochdi Partaatmadja/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. Mucharam Sanusi, M.S</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Ir. Basuki Sudjana Prawira, S.E</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>RIr. Juliati Purwantini</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">2</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2005-2006 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Penasehat</td>
                            <td>H. Rochdi Partaatmadja/td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>H. Akil Nawawi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. H. Umar Komarraningrat</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Hj. E. Kurnaesih Susilo P</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Ir. Basuki Sudjana Prawira, S.E <br>
                                Ir. Hj. Juliati Purwantini</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">3</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI tahun 2006 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>H. Akil Nawawi</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. H. Umar Komarraningrat</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Hj. E. Kurnaesih Susilo P</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Ir. Basuki Sudjana Prawira, S.E <br>
                                Ir. Hj. Juliati Purwantini</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">4</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2007-2008 </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>Ir. H. Basuki Sudjana Prawira, SE</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. Hj. Juliati Purwantini, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Hj. E. Kurnaesih Susilo P</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Ir. H. Umar Komarraningrat <br>

                                Ir. Fajar Susilo</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">5</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2008-2010 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>Ir. H. Basuki Sudjana Prawira, SE</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. Hj. Juliati Purwantini, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Hj. Triana Akil, SH</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggota </td>
                            <td>Ir. H. Umar Komarraningrat <br>

                                Ir. Fajar Susilo</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">6</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2008-2012 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>Ir. H. Basuki Sudjana Prawira, SE</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Wakil Ketua</td>
                            <td>Ir. Hj. Juliati Purwantini, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Seketaris </td>
                            <td>Hj. Triana Akil, SH</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th scope="col">6</th>
                            <th scope="col" colspan="2">Susunan Pembina Yayasan BPI periode 2012-2017 :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>Ketua</td>
                            <td>Ir. Hj. Juliati Purwantini, MS</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Anggta</td>
                            <td>Ir. H. Basuki Sudjana Prawira, SE <br>Ir. Mucharam Sanusi, M.S</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Pengawas</td>
                            <td>Hj. Triana Akil, SH</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
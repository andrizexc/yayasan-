@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{ asset('img/37.jpg') }});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Tentang</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sambutan">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>SAMBUTAN KETUA YAYASAN</h1>
                    <p>Sambutan Ketua Yayasan Badan Perguruan Indonesia</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 text-center">
                <img src="{{ asset('img/q1.jpeg') }}">
            </div>
            <div class="col-12 col-sm-12 col-lg-6 section-text">
                <h3>Drs. Iyep Sobari M.M.Pd</h3>
                <p class="ketua">Ketua yayasan badan perguruan indonesia</p>
                <p class="pembuka">
                    Bismillahirrohmanirrohim,<br>
                    Assalamu'alaikum Warohmatullohi Wabarokatuh,
                </p>
                <p class="isi">
                    Segala puji hanya kepunyaan Allah SWT, Alhamdulillah berkat rahmat-Nya saat ini kita masih dapat
                    melaksanakan kegiatan dalam rangka beribadah kepada-Nya.
                    <br><br>
                    Yayasan Badan Perguruan Indonesia (BPI) yang bergerak dalam bidang penyelenggaraan pendidikan
                    formal, mulai jenjang pendidikan pendidikan pra sekolah, jenjang pendidikan dasar hingga jenjang
                    pendidikan menengah.
                    <br><br>
                    Yayasan ini telah berkiprah sejak tanggal 18 Agustus 1948 yang salah satu misinya ialah mendukung
                    program pemerintah untuk mencerdaskan kehidupan bangsa.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="unit-bpi col-md-12">
    <div class="row">
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://pgtk.bpiedu.id/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>DAY CARE <br> PLAY GROUP <br> TK BPI </a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://sd.bpiedu.id/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>SEKOLAH <br> DASAR <br> BPI </a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://smpbpi1bandung.sch.id/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>SEKOLAH <br> MENENGAH PERTAMA <br> BPI </a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://smasbpi1bdg.net/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>SEKOLAH <br> MENENGAH ATAS <br> BPI 1</a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://smabpi2bandung.sch.id/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>SEKOLAH <br> MENENGAH ATAS <br> BPI 2</a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-2 col-sm-4 unit-card">
            <div class="unit-bg">
                <div class="unit-img">
                    <img src="{{asset('img/b1.jpg')}}">
                </div>
                <a href="http://smkbpi.sch.id/" class="a-unit-caption">
                    <div class="unit-caption">
                        <a>SEKOLAH <br> MENENGAH KEJURUAN BPI</a>
                        <br>
                        <div class="location-unit">
                            <a><i class="fas fa-map-marker-alt icon-unit-location"></i>Jalan Burarang No 08</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="ket-web">
    <div class="container">
        <center>
            <div class="col-10">
                <p class="isi-ket">
                    Website ini dibuat sebagai salah satu bentuk penyampaian laporan kinerja penyelenggaraan pendidikan,
                    kemajuan dan prestasi yang telah diraih oleh seluruh unit persekolahan BPI kepada masyarakat luas.
                    Catatan keberhasilan dan prestasi yang telah dicapai merupakan salah satu bukti kesungguhan BPI
                    dalam mengupayakan penyelenggaraan pendidikan dengan semangat pengabdian dan pengorbanan untuk
                    menghasilkan pendidikan yang baik, berkualitas dan berdaya saing.
                    <br><br>
                    Keberhasilan di masa mendatang hanya akan dapat dicapai apabila dilandasi oleh semangat kebersamaan
                    sesuai visi dan misi BPI. Semua itu didasari dengan adanya upaya terus menerus untuk meningkatkan
                    kompetensi Lembaga Pendidikan BPI, melalui prakarsa yang kreatif dan inovatif. Oleh karena itu
                    diperlukan kerja besar, kerja keras dan kerja bersama yang Insya Allah akan memberikan hasil yang
                    maksimal dalam merealisasikan tujuan BPI.
                    <br><br>
                    Akhir kata, saya sampaikan penghargaan yang setinggi-tingginya serta ucapan terima kasih kepada
                    orang tua peserta didik atas kepercayaan yang diberikan untuk membentuk kader bangsa masa depan yang
                    berkualitas. Terima kasih dan apresiasi yang setinggi-tingginya saya sampaikan kepada segenap tenaga
                    pendidik serta seluruh karyawan BPI, atas dharmabaktinya dalam rangka menunaikan tugas dengan
                    sebaik-baiknya.
                    <br><br>
                    Semoga Allah SWT selalu memberikan bimbingan-Nya agar kita selalu berada pada jalan yang
                    diridhoi-Nya agar dapat menjalankan tugas dengan sebaik-baiknya serta dapat memberikan
                    seluas-luasnya kemanfaatan yang diharapkan. Amiin.
                    <br><br>
                    Wassalamu'alaikum Warohmatullohi Wabarokatuh.
                </p><br><br>
            </div>
        </center>
        <div>
            <p class="ttd-ketua">
                Ketua Yayasan BPI
                <br><br><br><br>
                Drs. Iyep Sobari M.M.Pd
            </p>
        </div>
    </div>
</div>

<div class="manajemen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>MANAJEMEN YAYASAN BPI</h1>
                    <p>Berita terakhir dari yayasan bpi</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <p class="judul-nama">Pembina Yayasan BPI</p>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Ir. H. Susilowirjono</h6>
                            <p>Ketua Pembina</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Ir. Fajar Susilo. P</h6>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Hj. Triana Djunardi, S.H.</h6>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Ir. H. Basuki S. Prawira, S.E.</h6>
                            <p>Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <p class="judul-nama">Pengurus Yayasan BPI</p>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Drs. Iyep Sobari, M.M.Pd.</h6>
                            <p>Ketua Pengurus</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>H. Syarifudin, S.E, Ak, M.M.</h6>
                            <p>Sekretaris</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Ari Wara Hapsari, S.E.</h6>
                            <p>Bendahara</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>H. Yayan Sudiarna, S.E.Ak., M.M</h6>
                            <p>Pengawas</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Dharmasafraini, S.E.</h6>
                            <p>Anggota Pengawas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <p class="judul-nama">Kepala Unit Pelaksana Teknis Yayasan BPI</p>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Yustini S.Pd</h6>
                            <p>Kepala TK & Play Group BPI</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Indra Hatinda Suwondo, S.Pd</h6>
                            <p>Kepala SD BPI</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Ajat Sudrajat S.Pd</h6>
                            <p>Kepala SMP BPI</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Dra. Deti Sudiarti</h6>
                            <p>Kepala SMA BPI 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Lince Maria</h6>
                            <p>Kepala SMA BPI 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Akhmad Budi Utomo, M.Pd</h6>
                            <p>Kepala SMK BPI</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Bambang Ismono, S.E.</h6>
                            <p>Kepala Sekretariat BPI</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="single-today-area">
                        <div class="img-single-thumb">
                            <div>
                                <img src="{{ asset('img/today-2.png') }}">
                            </div>
                        </div>
                        <div class="today-inpo">
                            <h6>Dedeh Suryati, S.E.</h6>
                            <p>Kepala Keuangan BPIDedeh Suryati, S.E.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slogan">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h3 class="title">SLOGAN</h3>
                <h3 class="sub-title">"WINAYA UTAMA MARGANING SATYA DHARMA"</h3>
                <p>Pendidikan yang baik adalah suatu cara untuk membentuk manusia yang setia terhadap dharmanya</p>
            </div>
        </div>
    </div>
</div>

<div class="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>VISI MISI</h1>
                    <p>Berita Teakhir dari yayasan bpi</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5>VISI</h5>
                <div class="garis"></div><br>
                <p class="text-visi">Dengan semangat kekeluargaan dan kemandirian Yayasan ini bermaksud membaktikan
                    dirinya terhadap Nusa dan Bangsa melalui penyelenggaraan pendidikan yang berkualitas bagi anak
                    bangsa dalam rangka ikut membentuk manusia yang setia pada dharmanya.</p><br>
                <h5>MISI</h5>
                <div class="garis"></div><br>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-dot-circle"></i></span>Mendirikan sekolah yang
                        menyelenggarakan pendidikan agar peserta didik dapat mewujudkan jati diri dan mengembangkan
                        potensi dirinya secara optimal.</li><br>
                    <li><span class="fa-li"><i class="far fa-dot-circle"></i></span>Menciptakan sistem pendidikan yang
                        menumbuhkan partisipasi sehingga peserta didik dapat memiliki semangat belajar, berprestasi dan
                        selalu berupaya meningkatkan kemampuannya.</li><br>
                    <li><span class="fa-li"><i class="far fa-dot-circle"></i></span>Meningkatkan profesionalisme
                        pelayanan pendidikan agar dapat memenuhi kebutuhan akan kualitas dan kuantitas, dilandasi
                        semangat keteladanan.</li><br>
                    <li><span class="fa-li"><i class="far fa-dot-circle"></i></span>Mengadakan hubungan dan kerjasama
                        dengan pihak lain serta melaksanakan usah-usaha yang menunjang terlaksananya maksud dan tujuan
                        Yayasan</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="slogan2">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1>"WINAYA UTAMA MARGANING <t>SATYA DHARMA"</t>
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="lambang">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <img src="{{ asset('img/icon.png') }}">
                    <h1>MAKNA LAMBANG BPI</h1>
                    <p>Berdasarkan SK Pegurus Yayasan BPI No. 28/SEKR/XI/1997</p>
                    <p class="tgl">Tanggal 8 November 1997</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <h6>BULAT LONJONG BERWARNA KUNING</h6>
                        <p>Melambangkan lapangan pendidikan yang ingin memberikan pengabdiannya secara bulat bagi
                            anak-anak didik.</p>
                    </li>
                    <li>
                        <h6>9 (SEMBILAN) HELAI MAHKOTA BUNGA BERWARNA KUNING</h6>
                        <p>Melambangkan keinginan untuk memberikan pendidikan yang terbaik kepada bunga-bunga bangsa.
                        </p>
                    </li>
                    <li>
                        <h6>NYALA API BERWARNA MERAH</h6>
                        <p>Melambangkan usaha pendidikan yang penuh elan/semangat untuk menerangi bunga-bunga bangsa.
                        </p>
                    </li>
                    <li>
                        <h6>BUKU BERWARNA HIJAU MUDA</h6>
                        <p>Melambangkan sumber utama pendidikan dalam memperdalam ilmu yang bermanfaat.</p>
                    </li>
                    <li>
                        <h6>KUJANG BERWARNA BIRU LANGIT</h6>
                        <p>Melambangkan kelahiran BPI di Wilayah Jawa Barat</p>
                    </li>
                    <li>
                        <h6>WINAYA UTAMA MARGANING SATYA DHARMA</h6>
                        <p>Motto BPI yang artinya "Pendidikan yang baik adalah suatu cara untuk membentuk manusia yang
                            setia terhadap dharmanya".</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Fasilitas</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="fasilitas"></div>
<div class="container pengertian-sarana">
    <div class="row">
        <div class="col-12">
            <div class="section-heading">
                <h1>FASILITAS YAYASAN BPI</h1>
                <p>Fasilitas yang ada di BPI</p>
            </div>
        </div>
        <div class="col-md-6 img-sarana">
            <center><img src="{{asset('img/f3.jpeg')}}"></center>
        </div>
        <div class="col-md-6 sarana">
            <h5>SARANA/PRASARANA PENDIDIKAN</h5>
            <p>Merupakan salah satu komponen penting dan diperlukan dalam menyelenggarakan pendidikan, sarana /prasarana
                yang baik, lengkap, menarik, aman dan nyaman diharapkan dapat menunjang keberhasilan kegiatan belajar
                mengajar.</p>
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

<div class="ruangan col-md-12">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6">
                <p class="sub-judul">Ruangan Kegiatan Belajar</p>
                <h3>RUANGAN KEGIATAN BELAJAR MENGAJAR DI JALAN BURANGRANG</h3>
                <div class="row jumlah">
                    <div class="col-6 col-sm-6 col-lg-6">
                        <p class="angka">57+</p>
                        <p>RUANGAN</p>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-6">
                        <p class="angka">6+</p>
                        <p>LAB</p>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-6">
                        <p class="angka">20+</p>
                        <p>RUANGAN PRAKTIK</p>
                    </div>
                    <div class="col-6 col-sm-6 col-lg-6">
                        <p class="angka">12</p>
                        <p>WC</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
                <div class="row">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/f1.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Meeting Room</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card bawah-fasilitas">
                        <img class="card-img-top" src="{{asset('img/f2.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Meeting Room</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/f3.jpeg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Meeting Room</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="all-fasilitas">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-wifi"></i></div>
                <h5>Fiber Optic WiFi</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-coffee"></i></div>
                <h5>Cafeteria</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-car"></i></div>
                <h5>Parkir</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-shield-alt"></i></div>
                <h5>Satpam</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-desktop"></i></div>
                <h5>Sistem Manajemen Informasi</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-window-maximize"></i></div>
                <h5>Website dan kawasan hotspot</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-microscope"></i></div>
                <h5>Laboratorium IPA SMA (Fisika/Kimia/Biologi)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-microscope"></i></div>
                <h5>Laboratorium IPA SMP (terpadu)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-book"></i></div>
                <h5>Perpustakaan Pusat & Perpustakaan di setiap sekolah</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-microscope"></i></div>
                <h5>Laboratorium Komputer</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-laptop"></i></div>
                <h5>Laboratorium Komputer SD BPI</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-laptop-code"></i></div>
                <h5>Laboratorium Komputer Khusus SMK</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-headphones"></i></div>
                <h5>Ruang Multimedia (Workshop)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-paint-brush"></i></div>
                <h5>Ruang Kesenian (di tiap lokasi)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-place-of-worship"></i></div>
                <h5>Lapangan Upacara & Aula</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-hospital"></i></div>
                <h5>Ruang Dokter</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-tooth"></i></div>
                <h5>Dokter Gigi</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-stethoscope"></i></div>
                <h5>UKGS (TK)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-book"></i></div>
                <h5>Ruang Pembinaan Mental dan Ajaran Agama Islam</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-diagnoses"></i></div>
                <h5>Ruang Psikolog (SD BPI)</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-fasilitas"><i class="fas fa-shuttle-van"></i></div>
                <h5>Antar Jemput Siswa</h5>
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="galeri-fasilitas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>GALERI FASILITAS</h1>
                    <p>Semua photo fasilitas yang ada di BPI</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div class="card-columns">
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/random" alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/random/1700x650"
                                alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/random/1200x400"
                                alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/random/1500x500"
                                alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/1600x900/?nature,water"
                                alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/2000x900/?nature,water"
                                alt="Card image top">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="https://source.unsplash.com/collection/190727/1600x900"
                                alt="Card image top">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <center class="margin-loadmore">
                    <button type="submit" class="btn bpi-btn col-12 col-sm-12 col-lg-2">VIEW MORE</button>
                </center>
            </div>
        </div>
    </div>
</div> --}}
@endsection
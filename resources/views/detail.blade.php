@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/agendadetail.css') }}">
<link rel="stylesheet" href="{{ asset('css/artikeldeatail.css') }}">
<link rel="stylesheet" href="{{ asset('css/prestasidetail.css') }}">
<style>
    p.info-juara,
    p.info-juara-strip {
        color: #022c43
    }
</style>
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{ asset('img/37.jpg') }});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">{{ $name }} Detail</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Informasi</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="my-4">
    <div class="agenda-artikel-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="img-header">
                        <img src="{{ $data->path }}">
                    </div>
                    <div class="post">
                        <div class="postcategory">
                            <p>{{ strtoupper($name) }}</p>
                        </div>
                        <div class="post-header">
                            <h1>{{ $data->title }}</h1>
                            @if(!empty($data->schedule) && $data->schedule != null)
                            <p class="lokasi"><i class="far fa-calendar iconl"></i>
                                {{ date('d-m-Y', strtotime($data->schedule)) }}</p>
                            @elseif(!empty($data->rank))
                            <ul class="meta-post-prestasi">
                                <li>
                                    <p class="textmeta-per"><i
                                            class="far fa-calendar"></i>{{ date('d-m-Y', strtotime($data->date_competition)) }}
                                    </p>
                                </li>
                                <li>
                                    <p class="textmeta-per"><i class="fas fa-map-marker-alt"></i>{{ $data->location }}
                                    </p>
                                </li>
                                <li>
                                    <p class="textmeta-per"><i class="fas fa-trophy"></i>{{ $data->title_competition }}
                                    </p>
                                </li>
                            </ul>
                            @endif
                            <hr class="garis-bagi">
                        </div>
                        @if(empty($data->rank))
                        <p class="author"><i class="fas fa-user"></i> {{ $data->name }}</p>
                        @endif
                        @if(!empty($data->rank))
                        <div class="colums-prestasi">
                            <div class="row ket-prestasi-bawah">
                                <div class="col-md-4 tgl">
                                    <center>
                                        <p class="info-juara">Memenangkan</p>
                                        <p class="number-juara">{{ $data->rank }}</p>
                                    </center>
                                </div>
                                <div class="col-md-4 tmpt">
                                    <center>
                                        <p class="info-juara-strip">|</p>
                                    </center>
                                </div>
                                <div class="col-md-4 event">
                                    <center>
                                        <p class="info-juara">Unitsekolah</p>
                                        <p class="number-juara">{{ $data->name }}</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="post-content">
                            {!! $data->desc !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="sidebar-area">
                        <div class="single-widget-area">
                            <div class="search-widget">
                                <form action="#" method="post">
                                    <input type="search" name="search-form" placeholder="Search">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-widget-area">
                            <div class="row">
                                @foreach($random as $key)
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <figure class="agenda-card kecil">
                                        <img src="{{ $key->path }}">
                                        <div class="figcaption">
                                            <center>
                                                <h2 class="icon-agenda">{{ date('d-m-Y', strtotime($key->created_at)) }}
                                                </h2>
                                                <h2>{{ $key->title }}</h2>
                                                <h2 class="icon-agenda">{{ $key->name }}</h2>
                                                <h2 class="readmore"><i class="fas fa-chevron-up"
                                                        aria-hidden="true"></i></h2>
                                                <h2 class="readmore">readmore</h2>
                                            </center>
                                        </div>
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
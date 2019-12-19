@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Home</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                @if(Route::is('schedules'))
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                                @elseif(Route::is('articles'))
                                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                                @elseif(Route::is('news'))
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                                @elseif(Route::is('prestations'))
                                <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
                                @elseif(Route::is('gallery'))
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                                @endif
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    <a class="btn btn-primary mb-4" href="{{ $sauce }}">Tambah {{ $name }}</a>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item"><a
                        href="{{ Auth::user()->role == 2 ? url('/admin/post/schedules') : url('/home/schedules') }}"
                        class="nav-link @if(Route::is('schedules') || Route::is('home')) active @endif">Agenda</a>
                </li>
                <li class="nav-item"><a
                        href="{{ Auth::user()->role == 2 ? url('/admin/post/articles') : url('/home/articles') }}"
                        class="nav-link @if(Route::is('articles')) active @endif">Artikel</a></li>
                <li class="nav-item"><a
                        href="{{ Auth::user()->role == 2 ? url('/admin/post/news') : url('/home/news') }}"
                        class="nav-link @if(Route::is('news')) active @endif">Berita</a></li>
                <li class="nav-item"><a
                        href="{{ Auth::user()->role == 2 ? url('/admin/post/prestations') : url('/home/prestations') }}"
                        class="nav-link @if(Route::is('prestations')) active @endif">Prestasi</a></li>
                <li class="nav-item"><a
                        href="{{ Auth::user()->role == 2 ? url('/admin/post/gallery') : url('/home/gallery') }}"
                        class="nav-link @if(Route::is('gallery')) active @endif">Galeri</a></li>
            </ul>
        </div>
        <div class="card-body">
            @if ($name == 'Galeri')
            <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="card-columns">
                                    @if($data->count())
                                    @foreach($data as $key)
                                    <div class="card">
                                        <img class="card-img" src="{{ asset($key->path) }}">
                                        <div class="card-img-overlay">
                                            <form method="post"
                                                action="{{ url('/home/delete').'/'.strtolower($name).'/'.$key->id }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin hapus gambar ini?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <h1>Galeri kosong</h1>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
            @else
            @if($data->count())
            @foreach($data as $key)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="card-title">{{ $key->title }}</h1>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col p-0 mr-2">
                                    <a class="btn btn-primary btn-block"
                                        href="{{ url((Auth::user()->role == 2 ? '/admin' : '/home').'/edit').'/'.strtolower($name).'/'.$key->id }}">Edit</a>
                                </div>
                                <div class="col p-0">
                                    <form method="post"
                                        action="{{ url('/home/delete').'/'.strtolower($name).'/'.$key->id }}">
                                        @csrf
                                        <input type="hidden" name="type" value="{{ $key->type }}">
                                        <input type="hidden" name="title" value="{{ $key->title }}">
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger btn-block"
                                            onclick="return confirm('Apakah anda yakin hapus {{ $key->title }}?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $data->links() }}
            @else
            <h1>{{ $name }} tidak ada</h1>
            @endif
            @endif
        </div>
    </div>
</div>
@endsection
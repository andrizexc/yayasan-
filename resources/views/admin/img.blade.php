@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Galeri</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lihat Semua</li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="gallery my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="card-columns">
                        @foreach($data as $key)
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($key->path) }}">
                            <div class="card-footer">
                                <form method="post" action="{{ url('/home/delete').'/galeri/'.$key->id }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin hapus gambar ini?')">Delete</button>
                                    <span>{{ $key->name }}</span>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
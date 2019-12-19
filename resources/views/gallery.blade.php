@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
@endsection

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
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>Gallery</h1>
                    <p>Foto Foto Kegiatan Yayasan BPI</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div id="place-img" class="card-columns">
                        @foreach($data as $key)
                        <div class="card">
                            <img class="card-img-top" src="{{ $key->path }}" alt="Card image top">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <center class="margin-loadmore">
                    <button id="loader" class="btn bpi-btn col-12 col-sm-12 col-lg-2">LOAD MORE</button>
                </center>
            </div>

        </div>
    </div>
</div>

<script>
    var skip = 7

    window.onload = () => {
        $('#loader').click(function(e){
            axios.post('/resp/gallery/'+skip)
                .then(resp => {
                    var r = resp.data

                    if(r.length > 0){
                        for(var i = 0; i < r.length; i++) $('#place-img').append(`
                            <div class="card">
                                <img class="card-img-top" src="${r[i].path}" alt="Card image top">
                            </div>
                        `)
                        skip += 7
                    }else{
                        $('#loader').remove()
                    }
                })
                .catch(err => console.error(err.response))
        })
    }
</script>
@endsection
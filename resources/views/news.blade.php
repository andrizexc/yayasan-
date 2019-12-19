@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Berita</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Informasi</li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bpi-today">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>YAYASAN BPI TODAY</h1>
                    <p subtitle-prestasi>Tulisan terupdate dari yayasan bpi</p>
                </div>
            </div>
        </div>
        <div id="bpi-today-js" class="row"></div>
        <center>
            <button id="loader" class="btn bpi-btn col-12 col-sm-12 col-lg-2">LOAD MORE</button>
        </center>
    </div>
</div>

<script>
    var n = 14

    window.onload = () => {
        axios.post('/resp/news/0')
            .then(resp => {
                var r = resp.data

                for(var i = 0; i < 6; i++){ 
                    var dt = new Date(r[i].created_at)
                    
                    $('#bpi-today-js').append(`
                        <a href="{{ url('/news') }}/${r[i].id}" class="${i == 0 || i == 5 ? 'col-12 col-sm-6 col-lg-6' : 'col-12 col-sm-6 col-lg-3'}">
                            <div class="single-today-area">
                                <div class="card text-white">
                                    <img class="card-img" src="${r[i].path}" style="height: 310px">
                                    <div class="card-img-overlay card-bg-today">
                                        <div class="card-position-2 text-center">
                                            <h5 class="card-title">${r[i].name}</h5>
                                            <h2 class="card-text">${r[i].title}</h2>
                                            <p class="card-text">
                                                <i class="far fa-clock mr-2"></i> ${dt.toLocaleString('id-ID', {dateStyle: 'medium'})}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `)
                }
                for(var i = 6; i < r.length; i++){
                    var dt = new Date(r[i].created_at)

                    $('#bpi-today-js').append(`
                        <a href="{{ url('/news') }}/${r[i].id}" class="col-12 col-sm-6 col-lg-3">
                            <div class="single-today-area">
                                <div class="card text-white">
                                    <img class="card-img" src="${r[i].path}" style="height: 310px">
                                    <div class="card-img-overlay card-bg-today">
                                        <div class="card-position-2 text-center">
                                            <h5 class="card-title">${r[i].name}</h5>
                                            <h2 class="card-text">${r[i].title}</h2>
                                            <p class="card-text">
                                                <i class="far fa-clock mr-2"></i> ${dt.toLocaleString('id-ID', {dateStyle: 'medium'})}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `)
                }
            }).catch(err => console.error(err.response))

        $('#loader').click(function(){
            axios.post('/resp/news/0/'+n)
                .then(resp => {
                    var r = resp.data
    
                    if(r.length > 0){
                        for(var i = 0; i < r.length; i++){
                            var dt = new Date(r[i].created_at)
                            
                            $('#bpi-today-js').append(`
                                <a href="{{ url('/news') }}/${r[i].id}" class="col-12 col-sm-6 col-lg-3">
                                    <div class="single-today-area">
                                        <div class="card text-white">
                                            <img class="card-img" src="${r[i].path}" style="height: 310px">
                                            <div class="card-img-overlay card-bg-today">
                                                <div class="card-position-2 text-center">
                                                    <h5 class="card-title">${r[i].name}</h5>
                                                    <h2 class="card-text">${r[i].title}</h2>
                                                    <p class="card-text">
                                                        <i class="far fa-clock mr-2"></i> ${dt.toLocaleString('id-ID', {dateStyle: 'medium'})}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `)
                        }
                        n += 8
                    }else{
                        $('#loader').remove()
                    }
                })
        })
    }
</script>
@endsection
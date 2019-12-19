@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Artikel</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Informasi</li>
                                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bpi-artikel">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>YAYASAN BPI ARTIKEL</h1>
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
    var n = 9,
        url = '{{ url("/") }}',
        month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November",
        "Desember"]

    window.onload = () => {
        axios.post('/resp/news/1/0/9')
            .then(resp => {
                var r = resp.data

                for(var i = 0; i < r.length; i++){ 
                    var date = new Date(r[i].created_at),
                        desc = tagRemove(r[i].desc)
                    
                    $('#bpi-today-js').append(`
                        <a class="col-12 col-md-6 col-lg-4 respon-card" href="${url+'/articles/'+r[i].id}">
                            <div class="single-thumb-artikel">
                                <div class="card-img-thumb">
                                    <img src="${r[i].path}" alt="Card image cap" style="height: 310px">
                                </div>
                                <div class="card-tgl">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="tgl-back">
                                                <div class="col-12">
                                                    <h6>${month[date.getMonth()].substring(0, 3).toUpperCase()}</h6>
                                                </div>
                                                <div class="col-12">
                                                    <P>${date.getDate()}</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <h5 class="card-text-artikel">${r[i].title}</h5>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="info-artikel">
                                                <p>${desc.length > 110 ? desc.substring(0, 110)+'...' : desc}</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-artikel-bawah">
                                                <p class="info-date"><i class="far fa-user iconbpi"></i>${r[i].name}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    `)
                }
            }).catch(err => console.error(err.response))

        $('#loader').click(function(){
            axios.post('/resp/news/1/'+n)
                .then(resp => {
                    var r = resp.data

                    if(r.length > 0){
                        for(var i = 0; i < r.length; i++){ 
                            var date = new Date(r[i].created_at),
                                desc = tagRemove(r[i].desc)
                            
                            $('#bpi-today-js').append(`
                                <a class="col-12 col-md-6 col-lg-4 respon-card" href="${url+'/articles/'+r[i].id}">
                                    <div class="single-thumb-artikel">
                                        <div class="card-img-thumb">
                                            <img src="${r[i].path}" alt="Card image cap" style="height: 310px">
                                        </div>
                                        <div class="card-tgl">
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="row">
                                                    <div class="tgl-back">
                                                        <div class="col-12">
                                                            <h6>${month[date.getMonth()].substring(0, 3).toUpperCase()}</h6>
                                                        </div>
                                                        <div class="col-12">
                                                            <P>${date.getDate()}</P>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <h5 class="card-text-artikel">${r[i].title}</h5>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="info-artikel">
                                                        <p>${desc.length > 110 ? desc.substring(0, 110)+'...' : desc}</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="info-artikel-bawah">
                                                        <p class="info-date"><i class="far fa-user iconbpi"></i>${r[i].name}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `)
                        }
                        n += 6
                    }else{
                        $('#loader').remove()
                    }
                })
        })
    }
    function tagRemove(str){
        return str === null || str === ''
            ? false
            : str.toString().replace(/<[^>]*>/g, '')
    }
</script>
@endsection
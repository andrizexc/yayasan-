@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Agenda</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Informasi</li>
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bpi-agenda margin-bpi-agenda">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 respon-card">
                <div class="content-agenda">
                    <h9>Agenda Kegiatan Yang Akan datang</h9>
                    <h1>AGENDA KEGIATAN</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 respon-card">
                <div id="bpi-today-js" class="row"></div>
            </div>
        </div>
        <div class="row agenda-bawah mt-1">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 respon-card">
                <div id="bpi-today-bottom" class="row"></div>
            </div>
        </div>
        <center>
            <button id="loader" class="btn bpi-btn col-12 col-sm-12 col-lg-2">LOAD MORE</button>
        </center>
    </div>
</div>
<script>
    var n = 12,
        url = '{{ url("/") }}'

    window.onload = () => {
        axios.post('/resp/news/2/0/12')
            .then(resp => {
                var r = resp.data

                for(var i = 0; i < 4; i++){ 
                    var date = new Date(r[i].schedule),
                        desc = tagRemove(r[i].desc)
                    
                    $('#bpi-today-js').append(`
                        <div class="col-12 col-sm-6 col-lg-6 agenda-container">
                            <figure class="agenda-card">
                                <img src="${r[i].path}" alt="img12" />
                                <div class="figcaption">
                                    <div class="card-caption-agenda text-center">
                                        <h2 class="icon-agenda">${date.toLocaleDateString('id-ID', {dateStyle: 'medium'})}</h2>
                                        <h2>${r[i].title}</h2>
                                        <p class="grow">${desc.length > 110 ? desc.substring(0, 110)+'...' : desc}</p>
                                        <div class="readmore-agenda">
                                            <h2><i class="fas fa-chevron-up" aria-hidden="true"></i><br>readmore</h2>
                                        </div>
                                    </div>
                                    <a href="${url+'/schedules/'+r[i].id}">View more</a>
                                </div>
                            </figure>
                        </div>
                    `)
                }
                for(var i = 4; i < r.length; i++){
                    var date = new Date(r[i].schedule),
                        desc = tagRemove(r[i].desc)
                    
                    $('#bpi-today-bottom').append(`
                        <div class="col-12 col-sm-6 col-lg-3 agenda-container">
                            <figure class="agenda-card">
                                <img src="${r[i].path}" alt="img12" />
                                <div class="figcaption">
                                    <div class="card-caption-agenda text-center">
                                        <h2 class="icon-agenda">${date.toLocaleDateString('id-ID', {dateStyle: 'medium'})}</h2>
                                        <h2>${r[i].title}</h2>
                                        <p class="grow">${desc.length > 110 ? desc.substring(0, 110)+'...' : desc}</p>
                                        <div class="readmore-agenda">
                                            <h2><i class="fas fa-chevron-up" aria-hidden="true"></i><br>readmore</h2>
                                        </div>
                                    </div>
                                    <a href="${url+'/schedules/'+r[i].id}">View more</a>
                                </div>
                            </figure>
                        </div>
                    `)
                }
            }).catch(err => console.error(err.response))

        $('#loader').click(function(){
            axios.post('/resp/news/1/'+n)
                .then(resp => {
                    var r = resp.data

                    if(r.length > 0){
                        for(var i = 0; i < r.length; i++){ 
                            var date = new Date(r[i].schedule),
                                desc = tagRemove(r[i].desc)
                            
                            $('#bpi-today-bottom').append(`
                                <div class="col-12 col-sm-6 col-lg-3 agenda-container">
                                    <figure class="agenda-card">
                                        <img src="${r[i].path}" alt="img12" />
                                        <div class="figcaption">
                                            <div class="card-caption-agenda text-center">
                                                <h2 class="icon-agenda">${date.toLocaleDateString('id-ID', {dateStyle: 'medium'})}</h2>
                                                <h2>${r[i].title}</h2>
                                                <p class="grow">${desc.length > 110 ? desc.substring(0, 110)+'...' : desc}</p>
                                                <div class="readmore-agenda">
                                                    <h2><i class="fas fa-chevron-up" aria-hidden="true"></i><br>readmore</h2>
                                                </div>
                                            </div>
                                            <a href="${url+'/schedules/'+r[i].id}">View more</a>
                                        </div>
                                    </figure>
                                </div>
                            `)
                        }
                        n += 8
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
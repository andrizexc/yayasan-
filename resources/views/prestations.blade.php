@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Prestasi</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Media Informasi</li>
                                <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="prestasi">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1>PRESTASI YAYASAN BPI</h1>
                    <p subtitle-prestasi>Tulisan terupdate dari yayasan bpi</p>
                </div>
            </div>
        </div>
        <div class="content-prestasi">
            <div id="bpi-today-js" class="row"></div>
        </div>
        <center>
            <button id="loader" class="btn bpi-btn col-12 col-sm-12 col-lg-2">LOAD MORE</button>
        </center>
    </div>
</div>

<script>
    var n = 9,
        url = '{{ url("/") }}'

    window.onload = () => {
        axios.post('/resp/pres/0')
            .then(resp => {
                var r = resp.data

                for(var i = 0; i < r.length; i++){ 
                    var date = new Date(r[i].date_competition),
                        desc = tagRemove(r[i].desc)
                    
                    $('#bpi-today-js').append(`
                        <a href="${url+'/prestations/'+r[i].id}" class="col-12 col-md-6 col-lg-4 respon-card">
                            <div class="single-thumb-juara">
                                <div class="card-img-thumb">
                                    <img src="${r[i].path}" alt="Card image cap" style="height: 310px">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-text">${r[i].title}</h5>
                                    <div class="row justify-content-md-center ket-prestasi">
                                        <p class="col-md-4 tgl">${date.toLocaleString('id-ID', {dateStyle: 'full'})}</p>
                                        <p class="col-md-4 tmpt">${r[i].location}</p>
                                        <p class="col-md-4 event">${r[i].title_competition}</p>
                                    </div>
                                </div>
                                <div class="card-body-bawah text-center">
                                    <div class="row justify-content-md-center ket-prestasi-bawah">
                                        <div class="col-md-4 tgl">
                                            <p class="info-juara">Memenangkan</p>
                                            <p class="number-juara">${r[i].rank}</p>
                                        </div>
                                        <div class="col-md-4 tmpt">
                                            <center>
                                                <p p class="info-juara-strip">|</p>
                                            </center>
                                        </div>
                                        <div class="col-md-4 event">
                                            <p class="info-juara">Unit sekolah</p>
                                            <p class="number-juara">${r[i].name}</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </a>
                    `)
                }
            }).catch(err => console.error(err.response))

        $('#loader').click(function(){
            axios.post('/resp/pres/'+n)
                .then(resp => {
                    var r = resp.data

                    if(r.length > 0){
                        for(var i = 0; i < r.length; i++){ 
                            var date = new Date(r[i].date_competition),
                                desc = tagRemove(r[i].desc)
                            
                            $('#bpi-today-js').append(`
                                <a href="${url+'/prestations/'+r[i].id}" class="col-12 col-md-6 col-lg-4 respon-card">
                                    <div class="single-thumb-juara">
                                        <div class="card-img-thumb">
                                            <img src="${r[i].path}" alt="Card image cap" style="height: 310px">
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-text">${r[i].title}</h5>
                                            <div class="row justify-content-md-center ket-prestasi">
                                                <p class="col-md-4 tgl">${date.toLocaleString('id-ID', {dateStyle: 'full'})}</p>
                                                <p class="col-md-4 tmpt">${r[i].location}</p>
                                                <p class="col-md-4 event">${r[i].title_competition}</p>
                                            </div>
                                        </div>
                                        <div class="card-body-bawah text-center">
                                            <div class="row justify-content-md-center ket-prestasi-bawah">
                                                <div class="col-md-4 tgl">
                                                    <p class="info-juara">Memenangkan</p>
                                                    <p class="number-juara">${r[i].rank}</p>
                                                </div>
                                                <div class="col-md-4 tmpt">
                                                    <center>
                                                        <p p class="info-juara-strip">|</p>
                                                    </center>
                                                </div>
                                                <div class="col-md-4 event">
                                                    <p class="info-juara">Unit sekolah</p>
                                                    <p class="number-juara">${r[i].name}</p>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            `)
                        }
                        n += 9
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
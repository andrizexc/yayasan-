@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Notifikasi</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    @if ($total > 0)
    @foreach($data as $key)
    <div id="parent-{{ $key->id }}" class="card mt-2" {!! $key->status ? "style=\"opacity: .5\"" : '' !!}>
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <h6 class="card-title text-secondary">{{ date('d-m-Y h:i', strtotime($key->created_at)) }}</h6>
                </div>
                <div class="col-1">
                    <button id="btn-{{ $key->id }}" class="btn btn-success p-0 px-2"
                        {{ $key->status ? 'disabled' : '' }} onclick="read({{ $key->id }})">Read</button>
                </div>
            </div>
            <p class="card-text">{{ $key->desc }}</p>
        </div>
    </div>
    @endforeach
    <div class="mt-2"></div>
    {{ $data->links() }}
    @else
    <h1 class="text-center">Tidak ada notifikasi</h1>
    @endif
</div>

<script>
    function read(id){
        $('#parent-'+id).css({opacity: .5})
        $('#btn-'+id).attr('disabled', 1)
        axios.post('/home/notification/read/'+id)
            .then(resp => {
                $('#notif-master').html(`Notification <span class='badge badge-primary'>${resp.data > 9 ? '9+' : resp.data}</span> `)
            })
    }
</script>
@endsection
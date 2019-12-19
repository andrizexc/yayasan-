@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Pesan</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pesan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    <a class="btn btn-primary" href="{{ url('/admin/messages/add') }}">Buat Pesan</a>
    @if ($data->count())
    @foreach($data as $key)
    <div id="parent-{{ $key->id }}" class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <h4 class="card-title">{{ $key->name }}@if($key->status > 0) <small
                            class="text-success"><i>readed</i></small> @endif</h4>
                    {{ $key->desc }}
                </div>
                <div class="col-1">
                    <button id="del-{{ $key->id }}" class="btn btn-danger" onclick="del({{ $key->id }})">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="mt-2"></div>
    {{ $data->links() }}
    @else
    <h1 class="text-center">Tidak ada pesan</h1>
    @endif
</div>

<script>
    function del(id){
        $('#parent-'+id).remove()
        axios.delete('/admin/messages/delete/'+id)
            .catch(err => console.error(err.response))
    }
</script>
@endsection
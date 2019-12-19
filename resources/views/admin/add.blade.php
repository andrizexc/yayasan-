@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Tambah Pesan</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{ url('/admin/messages') }}">Pesan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    <form method="post" action="{{ url('/admin/messages/add') }}">
        @csrf
        <input type="hidden" name="type" value="1">
        <div class="form-group">
            <select class="form-control" name="user_id" required>
                <option value="">-- Unit --</option>
                <option value="all">Semua Unit</option>
                @foreach($data as $key)
                <option value="{{ $key->id }}">{{ $key->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="desc" placeholder="Pesan.." required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Tambah Galeri</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    @if ($errors->any())
    <div class="alert alert-danger my-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ url('/home/add/galeri') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="image[]" class="form-control" accept="image/x-png, image/jpg, image/jpeg" multiple
                required>
            <small class="text-muted">Max. size 2MB</small>
        </div>
        <button class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
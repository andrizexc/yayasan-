@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">{{ $name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lihat Semua</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Pembuat</th>
                <th>Judul</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key)
            <tr>
                <td>{{ $key->name }}</td>
                <td>{{ $key->title }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ url($info.'/'.$key->id) }}">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
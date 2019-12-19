@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Home</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-4">
    @if($data->count())
    @foreach($data as $key)
    <div id="parent-{{ $key->id }}" class="input-group mt-2">
        <div class="input-group-prepend">
            <button id="read-{{ $key->id }}" class="btn btn-success" onclick="read({{ $key->id }})"
                {{ $key->status ? 'disabled' : '' }}>Read</button>
        </div>
        <input id="txt-{{ $key->id }}" class="form-control text-dark border {{ $key->status ? '' : 'bg-white'}}"
            type="text" value="{{ date('d-m-Y h:i A', strtotime($key->updated_at)) }} | {{ $key->desc }}" disabled>
        <div class="input-group-append">
            <button id="delete-{{ $key->id }}" class="btn btn-danger" onclick="destroy({{ $key->id }})">&times;</button>
        </div>
    </div>
    @endforeach
    <div class="pt-2"></div>
    {{ $data->links() }}
    @else
    <h4 class="text-center text-secondary">Tidak ada aktifitas</h4>
    @endif
</div>

<script>
    function destroy(id){
        $('#parent-'+id).remove()
        axios.delete('/admin/msg/delete/'+id)
            .then(() => {})
            .catch(err => console.error(err.repsonse))
    }
    function read(id){
        $('#read-'+id).attr('disabled', 1)
        $('#txt-'+id).removeClass('bg-white')
        axios.post('/admin/msg/read/'+id)
            .then(() => {})
            .catch(err => console.error(err.response))
    }
</script>
@endsection
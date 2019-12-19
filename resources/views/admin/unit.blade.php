@extends('layouts.app')

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Unit</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lihat Semua</li>
                                <li class="breadcrumb-item active" aria-current="page">Unit</li>
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
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Unit</th>
                <th>Email</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key)
            <tr>
                <td>{{ $key->name }}</td>
                <td>{{ $key->email }}</td>
                <td>
                    <a class="btn btn-primary" href="#" onclick="openModal(event, {{ $key->id }})">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="edit-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="edit-title" class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="edit-form" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edit-name">Nama Unit</label>
                                    <input id="edit-name" class="form-control border p-2 text-dark" type="text"
                                        name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="edit-email">Email</label>
                                    <input id="edit-email" class="form-control" type="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="edit-pass">Password (baru)</label>
                                    <input id="edit-pass" class="form-control" type="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function openModal(e, id){
        e.preventDefault()
        axios.post('/resp/edit/unit/'+id)
            .then(resp => {
                const r = resp.data
                $('#edit-title').text('Edit '+r.name)
                $('#edit-name').val(r.name)
                $('#edit-email').val(r.email)
                $('#edit-modal').modal()
                $('#edit-form').attr('action', `{{ url('/admin/edit') }}/unit/${r.id}`)
            })
    }
</script>
@endsection
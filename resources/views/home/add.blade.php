@extends('layouts.app')

@section('css')
<link href="{{ asset('css/quill.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/quill.min.js') }}"></script>
<script>
    var quill = new Quill('#editor', {
        modules: { toolbar: '#tools' },
        theme: 'snow'
    })
    $(function(){
        @if(!empty($data->schedule) || !empty($data->data_competition))
        $('#date-edit').val(new Date('{{ !empty($data->schedule) ? $data->schedule : $data->date_competition }}').toISOString().slice(0, 10))
        @endif
        $('#file-upload').bind('change', function(){
            if(this.files[0].size > 2048000) alert('Maksimal ukuran file 2MB!')
            else{
                var txt = $(this).val(),
                    file = new FileReader()
    
                file.onload = e => {
                    $('#img-result').remove()
                    $('#img-temp').append(`<img id="img-result" src="${e.target.result}" width="150" height="150">`)
                }
                $('#file-name').html(txt.substring(txt.lastIndexOf("\\") + 1, txt.length))
                file.readAsDataURL(this.files[0])
            }
        })
        $('form').submit(function(){
            $('#desc-input').val($('.ql-editor').html())
        })
    })
</script>
@endsection

@section('content')
<section id="breadcrumb" class="breadcrumb-area  jarallax" style="background-image: url({{asset('img/37.jpg')}});">
    <div class="bg-img-crumb">
        <div class="container  h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Tambah {{ $name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                                @switch($name)
                                @case('Agenda')
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                                @break
                                @case('Artikel')
                                <li class="breadcrumb-item active" aria-current="page">Artikel</li>
                                @break
                                @case('Berita')
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                                @break
                                @case('Prestasi')
                                <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
                                @break
                                @default
                                @endswitch
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
    <form id="form-submit" method="POST"
        action="{{ url('/home/'.(!empty($data) ? 'edit' : 'add').'/'.strtolower($name)).'/'.(!empty($data) ? $data->id : '') }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="type" value="{{ $i }}">
        <input id="desc-input" type="hidden" name="desc" value="">
        @if(!empty($data))
        <input type="hidden" name="oldTitle" value="{{ $data->title }}">
        @endif
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <select id="input-lang" class="form-control" name="lang" required>
                        <option value="">-- Pilih bahasa --</option>
                        <option value="0" {{ !empty($data) && $data->lang === 0 ? 'selected' : '' }}>Indonesia</option>
                        <option value="1" {{ !empty($data) && $data->lang === 1 ? 'selected' : '' }}>Inggris</option>
                    </select>
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <input id="input-title" class="form-control mb-2 border p-2 text-dark" type="text" name="title"
                        placeholder="Judul" value="{{ !empty($data) ? $data->title : '' }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($name == 'Agenda' || $name == 'Prestasi')
            <div class="col-3">
                <div class="form-group">
                    <input id="date-edit" class="form-control" type="date" name="date" required
                        title="Tanggal {{ $name == 'Agenda' ? 'Agenda' : 'Prestasi' }}">
                </div>
            </div>
            @endif
            <div class="{{$name == 'Agenda' || $name == 'Prestasi' ? 'col-9' : 'col-12'}}">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input id="file-upload" type="file" class="custom-file-input" id="inputGroupFile01" name="image"
                            accept="image/x-png, image/jpg, image/jpeg" {{!empty($data) ? '' : 'required'}}>
                        <label id="file-name" class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        @if($name == 'Prestasi')
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <input type="text" name="location" class="form-control mb-2 border p-2 text-dark"
                        placeholder="Lokasi lomba" value="{{ !empty($data) ? $data->location : '' }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input type="text" name="rank" class="form-control mb-2 border p-2 text-dark"
                        placeholder="Tingkat juara *contoh 'Juara 1' atau 'Juara Harapan'"
                        value="{{ !empty($data) ? $data->rank : 'Juara ' }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <input type="text" name="title_competition" class="form-control mb-2 border p-2 text-dark"
                        placeholder="Nama lomba" value="{{ !empty($data) ? $data->title_competition : '' }}" required>
                </div>
            </div>
        </div>
        @endif
        <div id="img-temp">
            @if(!empty($data))
            <img id="img-result" src="{{ asset($data->path) }}" width="150" height="150">
            @endif
        </div>
        <div id="tools">
            <span class="ql-formats">
                <select class="ql-size" title="font size"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-link" title="drag salah satu kata/kalimat lalu klik tombol ini"></button>
                <button class="ql-video" title="masukkan link ke video"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-bold" title="bold"></button>
                <button class="ql-italic" title="italic"></button>
                <button class="ql-underline" title="underline"></button>
                <button class="ql-strike" title="strikethrough"></button>
            </span>
            <span class="ql-formats">
                <select class="ql-color" title="font color"></select>
                <select class="ql-background" title="text highlight color"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-script" value="sub" title="subscript"></button>
                <button class="ql-script" value="super" title="superscript"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-header" value="1" title="header 1"></button>
                <button class="ql-header" value="2" title="header 2"></button>
                <button class="ql-blockquote" title="blockquote"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-list" value="ordered" title="ordered list"></button>
                <button class="ql-list" value="bullet" title="bullet list"></button>
                <button class="ql-indent" value="-1" title="indent left"></button>
                <button class="ql-indent" value="+1" title="indent right"></button>
            </span>
            <span class="ql-formats">
                <button class="ql-direction" value="rtl" title="direction"></button>
                <select class="ql-align" title="align"></select>
            </span>
            <span class="ql-formats">
                <button class="ql-clean" title="clear text style"></button>
            </span>
        </div>
        <div id="editor">
            {!! !empty($data) ? $data->desc : '' !!}
        </div>
        <button class="btn btn-primary mt-4">{{!empty($data) ? 'Update' : 'Tambah'}}</button>
    </form>
</div>
@endsection
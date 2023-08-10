@extends('layouts.app')

@section('title', 'Edit Layanan Desa Mojosari')

@section('content')

<div class="container">
    <a href="/admin/document" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('document.update', $document->id)  }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$document->title}}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror
                 <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$document->description}}</textarea>
                </div>
                 @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror
                <img src="/image/{{$document->image}}" alt="" class="img-fluid">
                 <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                 @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Dokumen</label>
                    <input type="file" class="form-control" name="document" accept=".doc,.docx, .xlsx, .pdf">
                </div>
                 @error('document')
                <small style="color:red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
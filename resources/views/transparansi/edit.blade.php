@extends('layouts.app')

@section('title', 'Edit Transparansi Desa Mojosari')

@section('content')

<div class="container">
    <a href="/admin/transpara" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('transparansi.update', $transparansi->id)  }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Transparansi</label>
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

@extends('layouts.app')

@section('title','asset Desa Mojosari')

@section('content')

<div class="container">
    
    <a href="/admin/asset/create" class="btn btn-primary mb-3">Tambah asset</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($asset as $asset)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$asset->title}}</td>
                    <td>{{$asset->description}}</td>
                    <td>
                        <img src="/image/{{$asset->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('asset.edit', $asset->id) }}" class="btn btn-warning">Edit</a>
                        <br>

                        <form action="{{route('asset.destroy', $asset->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           <br> <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('title', 'Data Layanan Desa Mojosari')

@section('content')

<div class="container">
    <a href="/admin/document/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Lihat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($documents as $documents)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$documents->title}}</td>
                    <td>{{$documents->description}}</td>
                    <td>
                        <img src="/image/{{$documents->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="/docs/{{$documents->document}}" type="button" class="btn btn-success">Lihat</a>
                    </td>
                    <td>
                        <a href="{{ route('document.edit', $documents->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{route('document.destroy', $documents->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

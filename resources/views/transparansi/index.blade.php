@extends('layouts.app')

@section('title', 'Data Transparansi Desa Mojosari')

@section('content')

<div class="container">
    <a href="/admin/transparansi/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    <th>Lihat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($transparansi as $transparansi)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>
                        <a href="/docs/{{$transparansi->document}}" type="button" class="btn btn-danger">Lihat</a>
                    </td>
                    <td>
                        <a href="{{ route('transparansi.edit', $transparansi->id) }}" class="btn btn-warning" target="blank">Edit</a>

                        <form action="{{route('transparansi.destroy', $transparansi->id)}}" method="POST">
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

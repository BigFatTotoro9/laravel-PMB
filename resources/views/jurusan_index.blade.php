@extends('layouts.adminlte')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            {{ $judul }}
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Nama Jurusan</td>
                                        <td>Jumlah Pendaftar</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jurusan as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->jenis_jurusan }}</td>
                                            <td>{{ $item->jumlah_pendaftar }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

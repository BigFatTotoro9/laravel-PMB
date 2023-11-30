@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-light table-striped table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Asal SMA</th>
                                    <th>Tahun Lulus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenkel }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->asal_sma }}</td>
                                        <td>{{ $item->tahun_lulus }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

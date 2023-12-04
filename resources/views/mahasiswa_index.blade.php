@extends('layouts.adminlte')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 ">
                <button type="button" class="btn btn-block btn-primary btn-lg" href="{{ route('mahasiswa.create') }}">Tambah
                    Data
                    Mahasiswa</button>
                <!-- small box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $judul }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Asal SMA</th>
                                <th>Tahun Lulus</th>
                            </tr>
                            @foreach ($mahasiswa as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenkel }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->asal_sma }}</td>
                                    <td>{{ $item->tahun_lulus }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

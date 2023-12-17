@extends('layouts.adminlte')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 ">
                <!-- small box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $judul }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>deskripsi</th>
                            </tr>
                            <tr>
                                <td>{{ $jurusan->deskripsi }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

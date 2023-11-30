@extends('layouts.medilab')

@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-1">

                <div class="col-lg-8 mt-5 mt-lg-10">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    {!! Form::model($mahasiswa, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        {!! Form::text('nama', null, ['class' => 'form-control mb-3']) !!}
                        <span class="text-danger">
                            {{ $errors->first('nama') }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        {!! Form::select('jenkel', $list_jenkel, null, ['class' => 'form-control mb-3']) !!}
                        <span class="text-danger">
                            {{ $errors->first('jenkel') }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        {!! Form::date('tanggal_lahir', null, ['class' => 'form-control mb-3']) !!}
                        <span class="text-danger">
                            {{ $errors->first('tanggal_lahir') }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        {!! Form::text('nama', null, ['class' => 'form-control mb-3']) !!}
                        <span class="text-danger">
                            {{ $errors->first('nama') }}
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        {!! Form::text('nama', null, ['class' => 'form-control ']) !!}
                        <span class="text-danger">
                            {{ $errors->first('nama') }}
                        </span>
                    </div>

                    </>

                </div>

            </div>
    </section><!-- End Contact Section -->
    {{-- tes --}}
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Isi data Mahasiswa
                    </div>
                    <div class="card-body">
                        {!! Form::model($mahasiswa, ['route' => $route, 'method' => $method]) !!}

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                {{ $errors->first('nama') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label>
                            {!! Form::select('jenkel', $list_jenkel, null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                {{ $errors->first('jenkel') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                {{ $errors->first('tanggal_lahir') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                {{ $errors->first('nama') }}
                            </span>
                        </div>


                        <div class="form-group">
                            <label for="nama">Nama</label>
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                {{ $errors->first('nama') }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

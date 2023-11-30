<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['mahasiswa'] = Mahasiswa::all();
        $data['judul'] = 'Data-data Mahasiswa';

        return view('mahasiswa_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['mahasiswa'] = new Mahasiswa();
        $data['method'] = 'POST';
        $data['route'] = 'mahasiswa.create';
        $data['jenkel'] = [
            'Laki-laki' => 'laki-laki',
            'Perempuan' => 'perempuan',
        ];
        return view('mahasiswa_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'nama' => 'required',
                'jenkel' => 'required',
                'tanggal_lahir' => 'required',
                'asal_sma' => 'required',
                'tahun_lulus' => 'required',
            ]
        );
        $data = new Mahasiswa();
        $data->fill($validation);
        $data->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

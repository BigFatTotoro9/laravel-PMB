<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jurusan'] = \App\Models\Jurusan::all();
        $data['judul'] = 'Jurusan Kita';
        $data['title'] = "Jurusan | Dashboard";
        $data['list_warna'] = [
            'aqua' => 'aqua',
            'green' => 'green',
            'yellow' => 'yellow',
            'red' => 'red',
        ];

        return view('jurusan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['jurusan'] = new \App\Models\Jurusan();
        $data['route'] = 'jurusan.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Jurusan';
        $data['title'] = "Jurusan | Admission";


        return view('jurusan_index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'jenis_jurusan' => 'required',
            'jumlah_pendaftar' => 'nullable',
        ]);

        $jurusan = new Jurusan();
        $jurusan->fill($validasiData);
        $jurusan->save();

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['jurusan'] = \App\Models\Jurusan::findOrFail($id);
        $data['judul'] = 'Jurusan Kita';
        $data['list_warna'] = [
            'aqua' => 'aqua',
            'green' => 'green',
            'yellow' => 'yellow',
            'red' => 'red',
        ];
        return view('deskripsi', $data);
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

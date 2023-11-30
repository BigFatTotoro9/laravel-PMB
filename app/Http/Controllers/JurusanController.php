<?php

namespace App\Http\Controllers;

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
        return view('jurusan_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['dokter'] = new \App\Models\Jurusan();
        $data['route'] = 'jurusan.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        $data['judul'] = 'Tambah Jurusan';
        
        return view('jurusan_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers;

use App\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPasien = Pasien::all();
        $dataPasien = Pasien::orderBy('id','ASC')->paginate(100);
        return view('Pasien.show', compact('dataPasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id'              => 'required',
            'NAMA'               => 'required',
            'TGL_LAHIR'          => 'required',
            'UMUR'               => 'required',
            'JENIS_KELAMIN'      => 'required',
            'ALAMAT'             => 'required',
            'NO_TELP'             => 'required'

        ]);

        $pasien = Pasien::create($request->all());

        return redirect()->route('create.pasien')->with('message', 'Pasien baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('Pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id'              => 'required',
            'NAMA'               => 'required',
            'TGL_LAHIR'          => 'required',
            'UMUR'               => 'required',
            'JENIS_KELAMIN'      => 'required',
            'ALAMAT'             => 'required',
            'NO_TELP'             => 'required'

        ]);

        $pasien = Pasien::findOrFail($id)->update($request->all());

        return redirect()->route('show.pasien')->with('message', 'Data pasien berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pasien = Pasien::findOrFail($id)->delete();
         return redirect()->route('pasien.index')->with('message', 'Jadwal berhasil dihapus!');
    }
}

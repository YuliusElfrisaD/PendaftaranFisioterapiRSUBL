<?php

namespace App\Http\Controllers;
use App\Pasien;
use App\Jadwal;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        $jadwal = Jadwal::orderBy('TGL_TERAPI', 'ASC')->paginate(100);
        if (!Auth::guest()){
            return view('home', compact('jadwal'));
        } else{
            return view('Jadwal.index', compact('jadwal'));
        }


//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jadwal.create');

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
                'id' => 'required|max:10|exists:pasien',
                'NAMA' => 'required|string|max:255',
                'ALAMAT' => 'required|string|max:255|',
                'TGL_TERAPI' => 'required|string|max:255',
                'JAM_TERAPI' => 'required|string|max:255',
            ]);

            $jadwal = Jadwal::create($request->all());
            return redirect()->route('jadwal.create')->with('message', 'Jadwal berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $pasien = Pasien::find($id);
        $jadwal = DB::table('jadwal')->where('id', $id)->get();
           return view('Jadwal.show', compact(['pasien','jadwal']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('Jadwal.edit', compact('jadwal'));

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
            'id'             => 'required',
            'NAMA'              => 'required',
            'TGL_TERAPI'        => 'required',
            'JAM_TERAPI'        => 'required'

        ]);

        $jadwal = Jadwal::findOrFail($id)->update($request->all());

        return redirect()->route('jadwal.index')->with('message', 'Jadwal berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id)->delete();
        return redirect()->route('jadwal.index')->with('message', 'Jadwal berhasil dihapus!');
    }


}



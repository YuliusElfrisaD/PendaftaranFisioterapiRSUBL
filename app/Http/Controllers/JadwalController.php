<?php

namespace App\Http\Controllers;

use App\Pasien;
use App\Jadwal;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $jadwal = Jadwal::all();
        $jadwal = Jadwal::orderBy('TGL_TERAPI', 'DESC')->paginate(100);
        if (!Auth::guest()) {
            return view('home', compact('jadwal'));
        } else {
            return view('Jadwal.index', compact('jadwal'));
        }
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'id' => 'required|max:10|exists:pasien',
            'NAMA' => 'required|string|max:255',
            'ALAMAT' => 'required|string|max:255|',
            'TGL_TERAPI' => 'required|string|max:255',
            'JAM_TERAPI' => 'required|max:255',
        ]);


        $TGL_TERAPI = $request->input('TGL_TERAPI');
        $JAM_TERAPI = $request->input('JAM_TERAPI');
        $NORM = $request->input('id');
        $cek = null;
        $cekTanggal = DB::table('jadwal')
                        ->select('id')
                        ->where('id', $NORM)
                        ->where('TGL_TERAPI', $TGL_TERAPI)->count();

        if ($cekTanggal > 0) {
            $cekNoRM = DB::table('pasien')->where('id', $NORM)->get();
//            return view('jadwal.create', compact('cekNoRM'))->with('flash_message_danger', 'Pasien sudah ada di tanggal ini');
            return redirect()->route('autofill')->with('flash_message_danger', 'Pasien sudah ada di tanggal ini');
        } else {
            switch ($JAM_TERAPI) {
                case "07:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "07:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "08:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "09:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "10:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "11:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "12:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "13:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "14:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "15:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "15:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "16:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "17:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;

                case "18:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;
                case "19:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('autofill')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::create($request->all());
                        return redirect()->route('autofill')->with('message', 'Jadwal berhasil dibuat!');
                    }
                    break;
            }
        }
    }

//        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $pasien = Pasien::find($id);
        $jadwal = DB::table('jadwal')->where('id', $id)->get();
        return view('Jadwal.show', compact(['pasien', 'jadwal']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
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
    public function update(Request $request, $id) {
        $this->validate($request, [
            'id' => 'required',
            'NAMA' => 'required',
            'TGL_TERAPI' => 'required',
            'JAM_TERAPI' => 'required'
        ]);


        $TGL_TERAPI = $request->input('TGL_TERAPI');
        $TGL_TERAPI2 = $request->input('TGL_TERAPI2');
        $JAM_TERAPI = $request->input('JAM_TERAPI');
        $NORM = $request->input('id');
        $cek = null;
        $cekTanggal = DB::table('jadwal')
                        ->select('id')
                        ->where('id', $NORM)
                        ->where('TGL_TERAPI', $TGL_TERAPI)->count();

        if ($TGL_TERAPI2 == $TGL_TERAPI) {
            switch ($JAM_TERAPI) {
                case "07:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "07:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "08:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "09:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "10:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "11:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "12:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "13:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "14:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "15:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "15:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "16:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "17:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "18:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;
                case "19:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;
            }
        } elseif ($cekTanggal == 1) {
            $cekNoRM = DB::table('pasien')->where('id', $NORM)->get();
//            return view('jadwal.create', compact('cekNoRM'))->with('flash_message_danger', 'Pasien sudah ada di tanggal ini');
            return redirect()->route('home')->with('flash_message_danger', 'Pasien sudah ada di tanggal ini');
        } else {
            switch ($JAM_TERAPI) {
                case "07:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "07:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "08:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "09:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "10:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "11:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "12:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "13:20" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "14:10" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "15:00" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "15:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 6) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "16:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "17:30" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;

                case "18:50" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;
                case "19:40" :
                    $cek = DB::table('jadwal')
                                    ->select('JAM_TERAPI')
                                    ->where('TGL_TERAPI', $TGL_TERAPI)
                                    ->where('JAM_TERAPI', $JAM_TERAPI)->count();
                    if ($cek == 4) {
                        return redirect()->route('home')->with('flash_message_danger', 'Kuota jam ini penuh ' . $cek . ' silahkan coba jam lain');
                    } else {
                        $jadwal = Jadwal::findOrFail($id)->update($request->all());
                        return redirect()->route('home')->with('message', 'Jadwal berhasil diubah!');
                    }
                    break;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $jadwal = Jadwal::findOrFail($id)->delete();
        return redirect()->route('jadwal.index')->with('message', 'Jadwal berhasil dihapus!');
    }

    public function cek(Request $request) {
        $id = $request->input('CekNoRM');
        $cek = DB::table('pasien')->where('id', $id)->count();
        if ($cek == 1) {
            $cekNoRM = DB::table('pasien')->where('id', $id)->get();
            return view('jadwal.create', compact('cekNoRM'));
        } else {
            return redirect()->route('autofill')->with('flash_message_danger', 'Masukkan NO. RM sesuai data pasien yang valid');
        }
        echo $cek;


    }

}

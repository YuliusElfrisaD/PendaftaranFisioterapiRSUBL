<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use DB;

//use ;

class KuotaController extends Controller {

    public function __construct() {
        $this->JAM_TERAPI = new Jadwal();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function cek(Request $request) {
            $tgl_cek = $request->input('cekKuota');
            
            $hasil = DB::table('jadwal')
                    ->select(DB::raw('COUNT(IF(jam_terapi="07:00:00",1,NULL)) AS HASIL7,'
                            . 'COUNT(IF(jam_terapi="07:50:00",1,NULL)) AS HASIL8,'
                            . 'COUNT(IF(jam_terapi="08:40:00",1,NULL)) AS HASIL9,'
                            . 'COUNT(IF(jam_terapi="09:30:00",1,NULL)) AS HASIL10,'
                            . 'COUNT(IF(jam_terapi="10:20:00",1,NULL)) AS HASIL11,'
                            . 'COUNT(IF(jam_terapi="11:10:00",1,NULL)) AS HASIL12,'
                            . 'COUNT(IF(jam_terapi="12:30:00",1,NULL)) AS HASIL13,'
                            . 'COUNT(IF(jam_terapi="13:20:00",1,NULL)) AS HASIL14,'
                            . 'COUNT(IF(jam_terapi="14:10:00",1,NULL)) AS HASIL15,'
                            . 'COUNT(IF(jam_terapi="15:00:00",1,NULL)) AS HASIL16,'
                            . 'COUNT(IF(jam_terapi="15:50:00",1,NULL)) AS HASIL17,'
                            . 'COUNT(IF(jam_terapi="16:40:00",1,NULL)) AS HASIL18,'
                            . 'COUNT(IF(jam_terapi="17:30:00",1,NULL)) AS HASIL19,'
                            . 'COUNT(IF(jam_terapi="18:50:00",1,NULL)) AS HASIL20,'
                            . 'COUNT(IF(jam_terapi="19:40:00",1,NULL)) AS HASIL21'))
                    ->where('TGL_TERAPI', $tgl_cek)
                    ->get();
            return view('Jadwal.hasil', compact(['tgl_cek','hasil']));
        }

}

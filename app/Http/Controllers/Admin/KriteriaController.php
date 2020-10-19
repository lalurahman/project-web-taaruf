<?php

namespace App\Http\Controllers\Admin;

use App\Darah;
use App\Http\Controllers\Controller;
use App\Keterampilan;
use App\Kulit;
use App\Nikah;
use App\Organisasi;
use App\Pekerjaan;
use App\Pendidikan;
use App\Rambut;
use App\Suku;
use App\Tinggi;
use App\Tubuh;
use App\Wajah;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keterampilan   = Keterampilan::all();
        $suku           = Suku::all();
        $tinggi         = Tinggi::all();
        $tubuh          = Tubuh::all();
        $organisasi     = Organisasi::all();
        $pendidikan     = Pendidikan::all();
        $rambut         = Rambut::all();
        $pekerjaan      = Pekerjaan::all();
        $kulit          = Kulit::all();
        $darah          = Darah::all();
        $wajah          = Wajah::all();
        $nikah          = Nikah::all();

        return view('pages.admin.daftar-kriteria',[
            'keterampilan'  => $keterampilan,
            'suku'          => $suku,
            'tinggi'        => $tinggi,
            'tubuh'         => $tubuh,
            'organisasi'    => $organisasi,
            'pendidikan'    => $pendidikan,
            'rambut'        => $rambut,
            'pekerjaan'     => $pekerjaan,
            'kulit'         => $kulit,
            'darah'         => $darah,
            'wajah'         => $wajah,
            'nikah'         => $nikah,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

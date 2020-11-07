<?php

namespace App\Http\Controllers;

use App\Darah;
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
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {        
        if(Auth::user()->roles == 'ADMIN'){
            return redirect()->route('dashboard');
        }

        $data['darah'] = Darah::all();
        $data['keterampilan'] = Keterampilan::all();
        $data['kulit'] = Kulit::all();
        $data['nikah'] = Nikah::all();
        $data['organisasi'] = Organisasi::all();
        $data['pekerjaan'] = Pekerjaan::all();
        $data['pendidikan'] = Pendidikan::all();
        $data['rambut'] = Rambut::all();
        $data['suku'] = Suku::all();
        $data['tinggi'] = Tinggi::all();
        $data['tubuh'] = Tubuh::all();
        $data['wajah'] = Wajah::all();
        
        return view('pages.cari-akhwat', $data);
    }
}

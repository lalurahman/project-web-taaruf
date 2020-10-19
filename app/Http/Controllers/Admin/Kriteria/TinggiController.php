<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Tinggi;
use Illuminate\Http\Request;

class TinggiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Tinggi::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Tubuh;
use Illuminate\Http\Request;

class TubuhController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Tubuh::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

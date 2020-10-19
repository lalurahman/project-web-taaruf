<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Rambut;
use Illuminate\Http\Request;

class RambutController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Rambut::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

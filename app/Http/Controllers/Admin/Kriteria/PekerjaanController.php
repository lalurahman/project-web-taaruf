<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Pekerjaan::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

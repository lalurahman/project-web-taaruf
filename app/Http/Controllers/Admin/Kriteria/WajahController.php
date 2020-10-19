<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Wajah;
use Illuminate\Http\Request;

class WajahController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Wajah::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

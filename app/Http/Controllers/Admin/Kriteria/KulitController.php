<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Kulit;
use Illuminate\Http\Request;

class KulitController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Kulit::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

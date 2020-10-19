<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Darah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DarahController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Darah::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

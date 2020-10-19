<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Nikah;
use Illuminate\Http\Request;

class NikahController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Nikah::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

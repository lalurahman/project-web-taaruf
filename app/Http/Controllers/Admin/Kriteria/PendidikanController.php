<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Pendidikan::create($data);

        return redirect()->route('daftar-kriteria');
    }
}

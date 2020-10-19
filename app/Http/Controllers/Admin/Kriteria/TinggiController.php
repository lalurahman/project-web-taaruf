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

    public function edit($id)
    {
        $item = Tinggi::findOrFail($id);

        return view('pages.admin.tinggi.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Tinggi::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Tinggi::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

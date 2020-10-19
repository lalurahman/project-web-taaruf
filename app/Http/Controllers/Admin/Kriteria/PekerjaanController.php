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

    public function edit($id)
    {
        $item = Pekerjaan::findOrFail($id);

        return view('pages.admin.pekerjaan.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Pekerjaan::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Pekerjaan::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

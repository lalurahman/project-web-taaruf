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

    public function edit($id)
    {
        $item = Pendidikan::findOrFail($id);

        return view('pages.admin.pendidikan.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Pendidikan::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Pendidikan::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

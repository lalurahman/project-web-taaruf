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

    public function edit($id)
    {
        $item = Darah::findOrFail($id);

        return view('pages.admin.darah.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Darah::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Darah::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Organisasi::create($data);

        return redirect()->route('daftar-kriteria');
    }

    public function edit($id)
    {
        $item = Organisasi::findOrFail($id);

        return view('pages.admin.organisasi.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Organisasi::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Organisasi::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

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

    public function edit($id)
    {
        $item = Nikah::findOrFail($id);

        return view('pages.admin.nikah.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Nikah::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Nikah::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

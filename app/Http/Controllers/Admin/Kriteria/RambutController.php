<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Rambut;
use Illuminate\Http\Request;

class RambutController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'rambut' => 'required|string|max:100'
        ]);

        $data = $request->all();

        Rambut::create($data);

        return redirect()->route('daftar-kriteria');
    }

    public function edit($id)
    {
        $item = Rambut::findOrFail($id);

        return view('pages.admin.rambut.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Rambut::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Rambut::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

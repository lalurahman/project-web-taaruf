<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Tubuh;
use Illuminate\Http\Request;

class TubuhController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'tubuh' => 'required|string|max:100'
        ]);

        $data = $request->all();

        Tubuh::create($data);

        return redirect()->route('daftar-kriteria');
    }

    public function edit($id)
    {
        $item = Tubuh::findOrFail($id);

        return view('pages.admin.tubuh.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Tubuh::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Tubuh::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

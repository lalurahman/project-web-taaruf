<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Suku;
use Illuminate\Http\Request;

class SukuController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'suku' => 'required|string|max:100'
        ]);

        $data = $request->all();

        Suku::create($data);

        return redirect()->route('daftar-kriteria');
    }
    public function edit($id)
    {
        $item = Suku::findOrFail($id);

        return view('pages.admin.suku.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Suku::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Suku::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

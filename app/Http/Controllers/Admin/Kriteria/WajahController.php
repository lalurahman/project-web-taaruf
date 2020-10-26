<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Wajah;
use Illuminate\Http\Request;

class WajahController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'wajah' => 'required|string|max:100'
        ]);

        $data = $request->all();

        Wajah::create($data);

        return redirect()->route('daftar-kriteria');
    }

    public function edit($id)
    {
        $item = Wajah::findOrFail($id);

        return view('pages.admin.wajah.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Wajah::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Wajah::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

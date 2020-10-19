<?php

namespace App\Http\Controllers\Admin\Kriteria;

use App\Http\Controllers\Controller;
use App\Kulit;
use Illuminate\Http\Request;

class KulitController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        Kulit::create($data);

        return redirect()->route('daftar-kriteria');
    }

    public function edit($id)
    {
        $item = Kulit::findOrFail($id);

        return view('pages.admin.kulit.edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Kulit::findOrFail($id);

        $item->update($data);

        return redirect()->route('daftar-kriteria');
    }

    public function destroy($id)
    {
        $item = Kulit::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-kriteria');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class IkhwanController extends Controller
{
    public function index()
    {
        $ikhwan = User::where('is_active',0)->where('roles','user')->get(); 
        $ikhwan_active = User::where('is_active',1)->where('roles','user')->get();

        return view('pages.admin.daftar-ikhwan',[
            'ikhwan' => $ikhwan, 
            'ikhwan_active' => $ikhwan_active
        ]);
    }

    public function details($id)
    {
        $ikhwan = User::with('details')->findOrFail($id);
        
        return view('pages.admin.detail-ikhwan',[
            'ikhwan' => $ikhwan
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = User::with('details')->findOrFail($id);
        $data['is_active'] = 1;

        $item->update($data);

        dd($item);

        return redirect()->route('daftar-ikhwan');
    }
}

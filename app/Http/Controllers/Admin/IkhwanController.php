<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class IkhwanController extends Controller
{
    public function index()
    {
        if(request()->ajax()){
            $ikhwan = User::where('roles','USER')->orderBy('created_at', 'desc');
            return DataTables::of($ikhwan)
                ->addColumn('action', function($item){
                    return '
                        <div class="btn-group">
                            <button
                                type="button" class="btn btn-primary dropdown-toggle mb-1 mr-1 px-2" data-toggle="dropdown">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <a href=" '. route('details-ikhwan', $item->id) .' " class="dropdown-item">
                                    Lihat Detail
                                </a>
                                <button class="text-danger dropdown-item" onclick="hapus('. $item->id .')">Hapus</button>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.admin.daftar-ikhwan');

        // $ikhwan = User::where('is_active',0)->where('roles','user')->get(); 
        // $ikhwan_active = User::where('is_active',1)->where('roles','user')->get();

        // return view('pages.admin.daftar-ikhwan',[
        //     'ikhwan' => $ikhwan, 
        //     'ikhwan_active' => $ikhwan_active
        // ]);
    }

    public function details($id)
    {
        $ikhwan = User::with('details')->findOrFail($id);
        
        return view('pages.admin.detail-ikhwan',[
            'ikhwan' => $ikhwan
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->id;
        $item = User::find($data);
        $item->is_active = 1;
        $item->save();
        return redirect()->route('daftar-ikhwan');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('daftar-ikhwan');
    }
}

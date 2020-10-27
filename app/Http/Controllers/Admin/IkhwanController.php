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

    public function details()
    {
        return view('pages.admin.detail-ikhwan');
    }
}

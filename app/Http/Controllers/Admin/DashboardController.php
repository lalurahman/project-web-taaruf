<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Akhwat;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ikhwan = User::where('is_active',0)->count();
        $ikhwan_active = User::where('is_active',1)->count();
        $akhwat = Akhwat::count();
        return view('pages.admin.dashboard',[
            'ikhwan' => $ikhwan,
            'ikhwan_active' => $ikhwan_active,
            'akhwat' => $akhwat
        ]);
    }
}

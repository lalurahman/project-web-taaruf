<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        
        if(Auth::user()->roles == 'ADMIN'){
            return redirect()->route('dashboard');
        }

        // if(Auth::user()->is_active == 1){
        //     // return redirect()->route('register-success');
        //     return view('pages.cari-akhwat');
        // }

        return view('pages.cari-akhwat');

    }
}

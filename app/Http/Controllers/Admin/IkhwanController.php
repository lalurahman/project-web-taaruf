<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IkhwanController extends Controller
{
    public function index()
    {
        return view('pages.admin.daftar-ikhwan');
    }

    public function details()
    {
        return view('pages.admin.detail-ikhwan');
    }
}

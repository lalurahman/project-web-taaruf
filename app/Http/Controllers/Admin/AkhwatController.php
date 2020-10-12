<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkhwatController extends Controller
{
    public function index()
    {
        return view('pages.admin.daftar-akhwat');
    }

    public function details()
    {
        return view('pages.admin.detail-akhwat');
    }

    public function create()
    {
        return view('pages.admin.tambah-data-akhwat');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasanganController extends Controller
{
    public function index()
    {
        return view('pages.admin.daftar-pasangan');
    }

    public function details()
    {
        return view('pages.admin.detail-pasangan');
    }
}

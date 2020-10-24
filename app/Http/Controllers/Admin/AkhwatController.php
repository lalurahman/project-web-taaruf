<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Akhwat;
use App\Darah;
use App\Keterampilan;
use App\Kulit;
use App\Nikah;
use App\Organisasi;
use App\Pekerjaan;
use App\Pendidikan;
use App\Rambut;
use App\Suku;
use App\Tinggi;
use App\Tubuh;
use App\Wajah;
use Validator;

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
        $data['darah'] = Darah::all();
        $data['keterampilan'] = Keterampilan::all();
        $data['kulit'] = Kulit::all();
        $data['nikah'] = Nikah::all();
        $data['organisasi'] = Organisasi::all();
        $data['pekerjaan'] = Pekerjaan::all();
        $data['pendidikan'] = Pendidikan::all();
        $data['rambut'] = Rambut::all();
        $data['suku'] = Suku::all();
        $data['tinggi'] = Tinggi::all();
        $data['tubuh'] = Tubuh::all();
        $data['wajah'] = Wajah::all();
        return view('pages.admin.tambah-data-akhwat', $data);
    }

    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'name'  => 'required',
            'no_hp'  => 'required|max:15|unique:akhwats,no_hp',
            'alamat'  => 'required',
            'biodata' => 'required|file|mimes:doc,pdf,docx,jpeg,png,jpg|max:5048',
            'keterampilan' => 'required',
            'suku' => 'required',
            'tinggi' => 'required',
            'tubuh' => 'required',
            'organisasi' => 'required',
            'rambut' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'kulit' => 'required',
            'darah' => 'required',
            'wajah' => 'required',
            'nikah' => 'required',
            'riwayat_penyakit' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi->errors());
        } else {
            return redirect()->back()->with('success', 'sukses menyimpan data !');
        }

    }
}

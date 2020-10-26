<?php

namespace App\Http\Controllers\Admin;

use App\Darah;
use App\Http\Controllers\Controller;
use App\Keterampilan;
use App\Kulit;
use App\Models\Admin\Akhwat;
use App\Nikah;
use App\Organisasi;
use App\Pekerjaan;
use App\Pendidikan;
use App\Rambut;
use App\Suku;
use App\Tinggi;
use App\Tubuh;
use App\Wajah;
use Illuminate\Http\Request;
use Validator, DB, Str, File;
use Carbon\Carbon;

class AkhwatController extends Controller
{
    public function index()
    {
        $akhwats = Akhwat::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.daftar-akhwat', compact('akhwats'));
    }

    public function details($nama)
    {
        $slug_nama = Str::slug($nama, ' ');
        $data['akhwat'] = Akhwat::where('nama', $slug_nama)->first();
        $data['darah'] = Darah::all();
        $data['keterampilan'] = Keterampilan::with('akhwats')->get();
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
        // dd($data['akhwat']);
        return view('pages.admin.detail-akhwat', $data);
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
            'name' => 'required',
            'no_hp' => 'required|max:15|unique:akhwats,no_hp',
            'alamat' => 'required',
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
            $akhwat = new Akhwat();
            $akhwat->nama = $request->name;
            $akhwat->no_hp = $request->no_hp;
            $akhwat->alamat = $request->alamat;
            $akhwat->riwayat_penyakit = $request->riwayat_penyakit;
            $akhwat->suku_id = $request->suku;
            $akhwat->tinggi_id = $request->tinggi;
            $akhwat->tubuh_id = $request->tubuh;
            $akhwat->organisasi_id = $request->organisasi;
            $akhwat->rambut_id = $request->rambut;
            $akhwat->pendidikan_id = $request->pendidikan;
            $akhwat->pekerjaan_id = $request->pekerjaan;
            $akhwat->kulit_id = $request->kulit;
            $akhwat->darah_id = $request->darah;
            $akhwat->wajah_id = $request->wajah;
            $akhwat->nikah_id = $request->nikah;
            // $akhwat->keterampilan_id = implode(" ", $request->keterampilan);
            // save file biodata
            $file = $request->file('biodata');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $storage = 'assets/upload/biodata/akhwat';
            $file->move($storage, $nama_file);
            $akhwat->cv = $nama_file;
            $akhwat->save();

            foreach ($request->keterampilan as $value) {
                DB::table('akhwats_skills')->insertGetId(
                    ['akhwat_id' => $akhwat->id, 'keterampilan_id' => $value, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
            }

            return redirect()->back()->with('success', 'sukses menyimpan data !');
        }

    }

    public function update(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'name' => 'required',
            'no_hp' => 'required|max:15|unique:akhwats,no_hp,'.$request->id,
            'alamat' => 'required',
            'biodata' => 'file|mimes:doc,pdf,docx,jpeg,png,jpg|max:5048',
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
            $akhwat = Akhwat::findOrFail($request->id);
            $akhwat->nama = $request->name;
            $akhwat->no_hp = $request->no_hp;
            $akhwat->alamat = $request->alamat;
            $akhwat->riwayat_penyakit = $request->riwayat_penyakit;
            $akhwat->suku_id = $request->suku;
            $akhwat->tinggi_id = $request->tinggi;
            $akhwat->tubuh_id = $request->tubuh;
            $akhwat->organisasi_id = $request->organisasi;
            $akhwat->rambut_id = $request->rambut;
            $akhwat->pendidikan_id = $request->pendidikan;
            $akhwat->pekerjaan_id = $request->pekerjaan;
            $akhwat->kulit_id = $request->kulit;
            $akhwat->darah_id = $request->darah;
            $akhwat->wajah_id = $request->wajah;
            $akhwat->nikah_id = $request->nikah;
            // $akhwat->keterampilan_id = implode(" ", $request->keterampilan);
            // update file biodata
            if ($request->hasFile('biodata')) {
                File::delete('assets/upload/biodata/akhwat' . $akhwat->cv);
                $file = $request->file('biodata');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $storage = 'assets/upload/biodata/akhwat';
                $file->move($storage, $nama_file);
                $akhwat->cv = $nama_file;
            }
            $akhwat->save();
            $akhwat->skills()->detach();
            foreach ($request->keterampilan as $value) {
                $akhwat->skills()->attach($value, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
            }

            return redirect()->route('daftar-akhwat')->with('success', 'sukses menyimpan data !');
        }
    }

    public function delete(Request $request)
    {
        try {

            $akhwat = Akhwat::find($request->id_data);
            if ($akhwat->cv != null) {
                File::delete('assets/upload/biodata/akhwat/' . $akhwat->cv);
            }
            $akhwat->delete();

            return response()->json([
                "status" => true,
                "message" => 'berhasil di hapus !',
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                "status" => false,
                "message" => 'gagal di hapus !',
            ], 500);
        }
    }

    public function download($cv)
    {
        $akhwat = Akhwat::where('cv', $cv)->first();
        $file = public_path('assets/upload/biodata/akhwat/'.$akhwat->cv);

        return response()->download($file);
    }
}

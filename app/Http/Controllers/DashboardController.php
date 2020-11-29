<?php

namespace App\Http\Controllers;

use App\Darah;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Helpers\JaccardSimilarity;

class DashboardController extends Controller
{
    public function index(Request $request)
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
        $data['akhwat'] = Akhwat::with('tribe:suku','hair','job','face','height','body','comunity','education','skin','blood','nikah','skills:keterampilan')->get();

        if($request->has('search')) {
            $jaccard = new JaccardSimilarity();
            $data_akhwat = [];
            $jodoh = [];

            // akhwat
            foreach ($data['akhwat'] as $value) {
                $tempp = [
                    'nama' => $value->nama,
                    'keterampilan' => collect($value->skills)->implode('keterampilan', ','),
                    'sukuibu' => $value->tribe[0]->suku,
                    'sukubapak' => $value->tribe[1]->suku,
                    'tinggi' => $value->height->tinggi,
                    'tubuh' => $value->body->tubuh,
                    'organisasi' => $value->comunity->organisasi,
                    'pendidikan' => $value->education->pendidikan,
                    'rambut' => $value->hair->rambut,
                    'kulit' => $value->skin->kulit,
                    'pekerjaan' => $value->job->pekerjaan,
                    'darah' => $value->blood->darah,
                    'wajah' => $value->face->wajah,
                    'usia' => $value->nikah->usia,
                    // 'keterampilan' => [],
                ];
                // foreach ($value->skills as $item) {
                //     array_push($tempp['keterampilan'], $item->keterampilan);
                // }
                array_push($data_akhwat, $tempp);
            }
            // dd($data_akhwat);
            // kriteria ikhwa
            $kriteria = collect($request->all())->except(['search'])->all();
            $kriteria['keterampilan'] = implode(',', $kriteria['keterampilan']);
            // $kriteria['keterampilan'] = implode(',', $kriteria['keterampilan']);
            // dd($kriteria);

            // jodoh
            // dd(implode(',',$data_akhwat[0]));
            // dd(implode(',',$kriteria));
            foreach ($data_akhwat as $value) {
                $tempp1 = [
                    'nama' => $value['nama'],
                    'persentasi' => $jaccard->getSimilarityCoefficient(implode(',',$kriteria), implode(',',array_slice($value,1))),
                ];
                array_push($jodoh, $tempp1);
            }

            $data['jodoh'] = collect($jodoh)->sortByDesc('persentasi');
        } else {
            $data['jodoh'] = null;
        }

        return view('pages.cari-akhwat', $data);
    }

    public function details($nama)
    {
        $slug_nama = Str::slug($nama, ' ');
        $data['akhwat'] = Akhwat::where('nama', $slug_nama)->first();
        $data['keterampilan'] = Keterampilan::with(['akhwats' => function ($query) use ($slug_nama) {
            $query->where('nama', $slug_nama);
        }])->get();
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
        $data['darah'] = Darah::all();


        return view('pages.detail-akhwat', $data);
    }
}

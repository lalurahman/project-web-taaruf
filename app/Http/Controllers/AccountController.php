<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    public function index()
    {
        $user = User::with('details')->find(Auth::id());
        // dd($user);
        return view('pages.profile', [
            'user' => $user
        ]);
    }

    // public function update(Request $request, $redirect)
    // {
    //     $data = $request->all();
    //     $item = Auth::user();

    //     $item->update($data);

    //     return redirect()->route($redirect);
    // }

    public function update(Request $request)
    {
        // $data = $request->all();
        $this->validate($request, [
            'name' => 'required|max:50|string',
            'email' => 'string|unique:users,email,' . Auth::id(),
            'biodata' => 'file|mimes:pdf|max:5048',
            'rekomendasi_murobbi' => 'file|mimes:pdf|max:5048',
            'izin_nikah' => 'file|mimes:pdf|max:5048',
            'keterangan_sehat' => 'file|mimes:pdf|max:5048'
        ], [
            'email.unique' => 'Email sudah ada di database',
            'biodata.mimes' => 'Format file harus PDF',
            'rekomendasi_murobbi.mimes' => 'Format file harus PDF',
            'izin_nikah.mimes' => 'Format file harus PDF',
            'keterangan_sehat.mimes' => 'Format file harus PDF'
        ]);

        // if($validasi->fails()){
        //     return redirect()->back()->with('error', $validasi->errors()->first());
        // }

        $item = User::findOrFail(Auth::id());

        // $detail = new UserDetail();

        if ($request->biodata != '' && $request->biodata != null) {
            File::delete('public/assets/upload/ikhwan/' . $item->details->biodata);

            $file = $request->biodata;
            $file_name = time() . "_" . $file->getClientOriginalName();
            $storage = 'public/assets/upload/ikhwan';
            $file->move($storage, $file_name);
            $item->details->biodata = $file_name;
        }

        if ($request->rekomendasi_murobbi != '' && $request->rekomendasi_murobbi != null) {

            File::delete('public/assets/upload/ikhwan/' . $item->details->rekomendasi_murobbi);

            $file = $request->file('rekomendasi_murobbi');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $storage = 'public/assets/upload/ikhwan';
            $file->move($storage, $file_name);
            $item->details->rekomendasi_murobbi = $file_name;
        }

        if ($request->izin_nikah != '' && $request->izin_nikah != null) {
            File::delete('public/assets/upload/ikhwan/' . $item->details->izin_nikah);

            $file = $request->file('izin_nikah');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $storage = 'public/assets/upload/ikhwan';
            $file->move($storage, $file_name);
            $item->details->izin_nikah = $file_name;
        }

        if ($request->keterangan_sehat != '' && $request->keterangan_sehat != null) {
            File::delete('public/assets/upload/ikhwan/' . $item->details->keterangan_sehat);

            $file = $request->file('keterangan_sehat');
            $file_name = time() . "_" . $file->getClientOriginalName();
            $storage = 'public/assets/upload/ikhwan';
            $file->move($storage, $file_name);
            $item->details->keterangan_sehat = $file_name;
        }
        // dd($data);
        $item->name = $request->name;
        $item->email = $request->email;
        if ($request->filled('password')) {
            // $data['password'] = bcrypt($request->password);
            $item->password = bcrypt($request->password);
        }
        $item->save();

        $item->details->save();

        return redirect()->route('profile')->with('success', 'Profil Berhasil diperbarui');
    }

    public function download_biodata()
    {
        $file = public_path('assets/upload/biodata/Format_Biodata_Ikhwa.docx');

        return response()->download($file);
    }

    public function download_rekomendasi()
    {
        $file = public_path('assets/upload/biodata/Format_Surat_Rekomendasi_Murobbi.docx');

        return response()->download($file);
    }

    public function download_izin()
    {
        $file = public_path('assets/upload/biodata/Format_Surat_Izin_Nikah_Dari_Orang_Tua_Atau_Wali.docx');

        return response()->download($file);
    }
}

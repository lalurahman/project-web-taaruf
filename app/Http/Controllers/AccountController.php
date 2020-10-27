<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.profile',[
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

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = User::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile')->with('success','Profil Berhasil diperbarui');
    }

}

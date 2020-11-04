<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth, Redirect, Session;
use App\Http\Requests\LoginRequest;
use App\User;
use App\UserDetail;
use Dotenv\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthUserController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function getlogin(LoginRequest $request)
    {
        $attemptLogin = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($attemptLogin) {
            $user = Auth::user();

            if ($user->is_active == 1) {
                if ($user->roles == 'ADMIN') {
                    session(['id' => $user->id, 'username' => $user->name, 'email' => $user->email, 'roles' => $user->roles]);
                    return Redirect::to('admin');
                } else if ($user->roles == 'USER') {
                    session(['id' => $user->id, 'username' => $user->name, 'email' => $user->email, 'roles' => $user->roles]);
                    return Redirect::to('/');
                }
            } else {
                Session::flash('Message', 'Akun '.$request->email.' belum di verifikasi');
                return Redirect::to('login');
            }
        }
        // return $this->sendFailedLoginResponse($request);
        return Redirect::to('login')->withErrors([
            'email'=> trans('auth.failed')
        ])->withInput();
    }

    public function logout(){
        session()->flush();
        Auth::logout();
        return Redirect::to('login');
    }

    // register
    public function register()
    {
        return view('auth.register');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'biodata' => 'file|mimes:pdf|max:5048',
    //         'rekomendasi_murobbi' => 'file|mimes:pdf|max:5048',
    //         'izin_nikah' => 'file|mimes:pdf|max:5048',
    //         'keterangan_sehat' => 'file|mimes:pdf|max:5048'
    //     ], [
    //         'email.unique' => 'Email sudah ada di database',
    //         'biodata.mimes' => 'Format file harus PDF',
    //         'rekomendasi_murobbi.mimes' => 'Format file harus PDF',
    //         'izin_nikah.mimes' => 'Format file harus PDF',
    //         'keterangan_nikah.mimes' => 'Format file harus PDF'
    //     ]);
    // }

    public function registerProcess(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50|string',
            'email' => 'string|unique:users,email,'.Auth::id(),
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

        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);  
        
        $detail = new UserDetail();
        
        $file = $request->file('biodata');
        $file_name = time() . "_" . $file->getClientOriginalName();
        $storage = 'assets/upload/ikhwan';
        $file->move($storage, $file_name);
        $detail->biodata = $file_name;
        
        $file = $request->file('rekomendasi_murobbi');
        $file_name = time() . "_" . $file->getClientOriginalName();
        $storage = 'assets/upload/ikhwan';
        $file->move($storage, $file_name);
        $detail->rekomendasi_murobbi = $file_name;
        
        $file = $request->file('izin_nikah');
        $file_name = time() . "_" . $file->getClientOriginalName();
        $storage = 'assets/upload/ikhwan';
        $file->move($storage, $file_name);
        $detail->izin_nikah = $file_name;
        
        $file = $request->file('keterangan_sehat');
        $file_name = time() . "_" . $file->getClientOriginalName();
        $storage = 'assets/upload/ikhwan';
        $file->move($storage, $file_name);
        $detail->keterangan_sehat = $file_name;

        User::find($user->id)->details()->save($detail);

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect()->route('login');
    }

    public function check(Request $request)
    {   
        return User::where('email', $request->email)->count() > 0 ? 'Unavailable' : 'Available';
    }

    
}

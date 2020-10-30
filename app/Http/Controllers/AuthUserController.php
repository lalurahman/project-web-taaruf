<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Redirect, Session;
use App\Http\Requests\LoginRequest;

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
}

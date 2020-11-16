<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginRequest $request)
    {
        $attemptLogin = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        
        if ($attemptLogin) {
            dd('test');
            $user = Auth::user();

            if ($user->is_active == 1) {
                if ($user->roles == 'ADMIN') {
                    session(['id' => $user->id, 'username' => $user->name, 'email' => $user->email, 'roles' => $user->roles]);
                    return Redirect::to('admin');
                } else if ($user->roles == 'USER') {
                    session(['id' => $user->id, 'username' => $user->name, 'email' => $user->email, 'roles' => $user->roles]);
                    return Redirect::to('/user');
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

}

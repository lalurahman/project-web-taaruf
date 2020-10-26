<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserDetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     $user =  User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);

    //     $detail = new UserDetail();
    //     $detail->biodata                = $data['biodata'];
    //     $detail->rekomendasi_murobbi    = $data['rekomendasi_murobbi'];
    //     $detail->izin_nikah             = $data['izin_nikah'];
    //     $detail->keterangan_sehat       = $data['keterangan_sehat'];

    //     return User::find($user->id)->details()->save($detail);

    // }

    public function register(Request $request)
    {
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
                    : redirect()->route('register-success');

    }

    public function success()
    {
        return view('auth.register-success');
    }

    public function check(Request $request)
    {   
        return User::where('email', $request->email)->count() > 0 ? 'Unavailable' : 'Available';
    }
}

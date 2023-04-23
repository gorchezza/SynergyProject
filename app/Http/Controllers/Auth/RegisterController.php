<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PassportData;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::PRIVATE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function getViewRegistration(){

        if(Auth::check()){
            return redirect(route('user.private'));
        }
        
        return view('registration');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // public function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         // 'name' => ['required', 'string', 'max:255'],
    //         // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'first_name' => 'string',
    //         'second_name' => 'string',
    //         'three_name' => 'string',
    //         'id_passport' => 'string',
    //         'issued' => 'string',
    //         'register_date' => 'string',
    //         'brith_date' => 'string',
    //         'brith_place' => 'string',
    //         'resident_place' => 'string',
    //         'email' => 'string',
    //         'password' => 'string',
    //     ]);
    //     dd($data);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create()
    {
        if(Auth::check()){
            return redirect(route('user.private'));
        }


        $validateFields = request()->validate([
            'first_name' => 'string',
            'second_name' => 'string',
            'three_name' => 'string',
            'id_passport' => 'string',
            'issued' => 'string',
            'register_date' => 'string',
            'brith_date' => 'string',
            'brith_place' => 'string',
            'resident_place' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);


        if (isset(User::where('email', $validateFields['email'])->get()[0])){
            return redirect(route('user.registration'))->withErrors([
                'Пользователь с такой почтой уже зарегистрирован',
            ]);
        }

        $hashFields =[
            'first_name' => $validateFields['first_name'],
            'second_name' => $validateFields['second_name'],
            'three_name' => $validateFields['three_name'],
            'id_passport' => $validateFields['id_passport'],
            'issued' => $validateFields['issued'],
            'register_date' => $validateFields['register_date'],
            'brith_date' => $validateFields['brith_date'],
            'brith_place' => $validateFields['brith_place'],
            'resident_place' => $validateFields['resident_place'],
            'email' => $validateFields['email'],
            'password' => Hash::make($validateFields['password']),
        ];

        $user = User::create($hashFields);
        if($user){
            Auth::login($user);
            return redirect( route('user.private'))->with($user);
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохрании пользователя'
        ]);

        // return view('private', $validateFields);
    }
}

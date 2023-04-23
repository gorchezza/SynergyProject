<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function getViewLogin(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }else{
            return view('login');
        }
    }

    public function login(){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $formFields = request()->only(['email', 'password']);
        // $formFields = request()->validate([
        //     'email' => 'string',
        //     'password' => 'string',
        // ]);

        if (isset(User::where('email', $formFields['email'])->get()[0])){
            if(Auth::attempt($formFields)){
                return redirect(route('user.private'));
            }else{
                return redirect(route('user.login'))->withErrors([
                    'formError' => 'Произошла ошибка аутентификации, логин или почта введены неправильно',
                ]);
            }
        }else {
            return redirect(route('user.login'))->withErrors([
                'Пользователь с такой почтой еще не зарегистрирован',
            ]);
        }

       
    }
}

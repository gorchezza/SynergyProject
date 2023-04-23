<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Process\InputStream;

class PrivateController extends Controller
{
    
    public function getPrivate(){
        $data = request()->validate([
            'email' => 'string',
            'password' => 'string',
        ]);

        $user = User::where('email', "{$data['email']}")->get()->all()[0];
        
        return view('private', $user);
    }

    public function getViewPrivate(Request $request){
        // dd(request());
        
        $data = request()->validate([
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
        // dd($data);
        return view('private');
    }

    public function updateUserData(){
        $user = User::find(1);

        $user->update();
    }

}

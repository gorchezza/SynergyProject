<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function get(){
        // dd('1111111111111');
        $validateFields = request()->validate([
            'about' => 'string',
            'first_name' => 'string',
            'second_name' => 'string',
            'three_name' => 'string',
            'id_passport' => 'string',
            'issued' => 'string',
            'register_date' => 'string',
            'brith_date' => 'string',
            'brith_place' => 'string',
            'resident_place' => 'string',
            'password' => 'string',
        ]);
        $user = User::where('id_passport', $validateFields['id_passport']);
        $user->update($validateFields);
        // dd($validateFields);
        return view("about");
    } 

    public function some(){
        $user = User::where('id_passport', '1821707418')->get()[0];
        // dd($user);
        return view('some', $user);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function get(){
        // dd('1111111111111');
        $validateFields = request()->validate([
            'about_user' => 'string',
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
        dd($validateFields);
        // return view("about");
    }
}

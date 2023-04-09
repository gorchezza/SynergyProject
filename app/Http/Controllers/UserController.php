<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PassportData;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function registration(){
        return view('registration');
    }
    
    public function login(){
        return view('login');
    }
    
    public function lk(){
        return view('lk');
    }


    public function select(){
        $users = PassportData::find(1)->get();
        // $users = PassportData::where('first_name', 'Дмитрий')->get();
        foreach ($users as $user) {
            dump($user->first_name);
            dump($user->email);
        }
        dd('end');
    }

    public function insert(){
        $paramArr = [
            'first_name' => 'SOME',
            'second_name' => 'SomeName',
            'three_name' => 'SomeThreeName',
            'id_passport' => '4030343',
            'issued' => 'MVD',
            'register_date' => '2020',
            'brith_date' => '1970',
            'brith_place' => 'Paris',
            'resident_place' => 'Vilnys',
            'email' => 'some@test.com',
            'password' => '123',
        ];
        // dd($paramArr);
        PassportData::create($paramArr);
        dump('Все получилось');
    }

    public function update() {
        $user = PassportData::find(1);

        $user->update([
            'first_name' => 'update',
            'second_name' => 'up',
            'three_name' => 'up',
        ]);
    }

    public function delete() {
        $user = PassportData::find(1);
        $user->delete();
        dump('deleted');
    }

    public function selectOrCreate() {
        $user = PassportData::firstOrCreate([
            'id_passport' => '',
        ],[
            'first_name' => '',
            'second_name' => '',
            'three_name' => '',
            'id_passport' => '',
            'issued' => '',
            'register_date' => '',
            'brith_date' => '',
            'brith_place' => '',
            'resident_place' => '',
            'email' => '',
            'password' => '',
        ]);
        dd($user->get());
    }

    public function updateOrCreate() {
        $user = PassportData::updateOrCreate([
            'id_passport' => '333',
        ],[
            'first_name' => 'who',
            'second_name' => 'is',
            'three_name' => 'wtf',
            'id_passport' => '333',
            'issued' => '134531',
            'register_date' => '3515315',
            'brith_date' => '5315',
            'brith_place' => '53153',
            'resident_place' => '1353',
            'email' => 'test@mail.com',
            'password' => '123',
        ]);
        dd($user->get());
    }
}

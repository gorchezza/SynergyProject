<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        
        return view('index');
    }

}

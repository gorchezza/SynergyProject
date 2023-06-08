<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Mail;
use Illuminate\Support\Facades\Auth;


class VerificationEmailController extends Controller
{
    public function getViewVerificationEmail() 
    {
        $user = Auth::user();
        return view('email', $user);
    }

    public function submitCodeInPost() 
    {
        $email = request()->email;
        Mail::to("$email")->send('Здарова');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Process\InputStream;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    
    public function getPrivate(){
        $user = auth()->user();
        return view('private', $user);
    }

    public function updateUserData(){
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
        ]);
        
        $user = auth()->user();
        $user->update($validateFields);

        return redirect(route('user.private'));
    }

    public function clear($user)
    {
        if (file_exists('storage/avatars/' . $user->id)) {
            foreach (glob('storage/avatars/' . $user->id . '/*') as $avatar) {
                unlink($avatar);
            }
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $user = Auth::user();
            
           $this->clear($user);

            $avatar = $request->file('avatar');
            $filename = time() . '_' . $avatar->getClientOriginalName();
            $path = 'storage/' . $avatar->store('avatars/' . $user->id, 'public'); // Сохранение изображения в папку "public/storage/avatars"

            $user->update(['avatar' => $path]);
            
            return redirect(route('user.private'));
        }

        return redirect(route('user.private'))->withError(['Не удалось загрузить изображение']);
    }
    

    public function uploadNickname(Request $request)
    {
        if ($request->nickname) {
            $user = Auth::user();

            $nick = $request->nickname;

            if (isset(User::where('nickname', $nick)->get()[0])) {
                return redirect(route('user.private'))->withErrors(['Такой никнейм уже существует, придумайте другой']);
            }

            $user->update(['nickname' => $nick]);

            return redirect(route('user.private'));
        }else {
            return redirect(route('user.private'))->withErrors(['Не удалось изменить никнейм']);
        }

    } 

    public function getJson() {
        // if (true) {
        //     $numsArray = [1, 4, 12, -23, 45, 2];
        //     $json = json_encode($numsArray);

           
        //     return response($json);
        //   }

        $numsArray = [1, 4, 12, -23, 45, 2];
        // $json = json_encode($numsArray);

        return response()->json($numsArray);
    }

    public function email() {
        return view('auth/passwords/email');
    }

}

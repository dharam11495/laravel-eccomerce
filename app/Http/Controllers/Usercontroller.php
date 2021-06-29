<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Hash;
use App\User;

class Usercontroller extends Controller
{
    //
    public function login(Request $req)
    {
        $user = User::where(['email'=> $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            echo "Dont match password";
        } else {
            $req->session()->put('user',$user);
           return redirect('/');
        }
    }
}

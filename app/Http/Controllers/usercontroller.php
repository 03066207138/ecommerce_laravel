<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=> $req->email])->first();

        // Check if user exists and password matches
        if (!$user || !Hash::check($req->password, $user->password)) {
            // If user not found or password doesn't match
            return "username or password is not matched";
        } else {
            // Store user id in session
            $req->session()->put('user', $user);
            $req->session()->save();


            // Redirect to home page
            return redirect('/');
        }
    }
}

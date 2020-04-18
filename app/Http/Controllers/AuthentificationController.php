<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class AuthentificationController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->only(["email", "password"]);
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = User::find(Auth::user()->id);
            $user->last_login = new \Datetime;
            $user->save();
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
    public function passwordForget()
    {
        return view('authentication.passwordReset');
    }
}
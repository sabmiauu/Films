<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function register(Request $req) {
        return view('users.register');
    }

    public function store(Request $req) {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        Auth::login($user);
        return view('users.profile');
    }

    public function profile(Request $req) {
        return view('users.profile');
    }

    public function logout(Request $req) {
        Auth::logout();
        return redirect()->route('collections.index');
    }

    public function login(Request $req) {
        return view('users.login');
    }

    public function authenticate(Request $req) {
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('users.profile'));
        }
        return 'Error, los datos no son correctos';
    }

}

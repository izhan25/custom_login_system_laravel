<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create() {
        return view('register');
    }

    public function store(Request $request) {

        $this->validation($request);

        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        if($user->save()) {
            $user = User::where('email', $request->email)->first();

            Auth::login($user);
        }

        return view('home');
    }

    private function validation($request) {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|max:255'
        ]);
    }

    public function login(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where([
            ['email', '=', $email],
            ['password', '=', $password]
        ])->first();

        if(!$user) {
            return view('login')->withErrors('Invalid credentials');
        }

        if($user) {
            Auth::login($user);
        }
        
        return view('home');
    }

    public function loginForm() {
        return view('login');
    }

    public function logout() {
        Auth::logout();

        return view('home');
    }

    
}

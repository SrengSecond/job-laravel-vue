<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('pages.user.create',[
            'header' => 'Create User'
        ]);
    }

    public function login() {
        return view('pages.user.login',[
            'header' => 'Login'
        ]);
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('jobs.index')->with('message','You have been logged out!');
    }

    public function authenticate(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6|max:18',
        ]);

        if(auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('jobs.index')->with('message','You are logged in!');
        }
        return back()->withErrors(['email' => 'invalid credential'])->onlyInput('email');
    }

    public function store(Request $request) {

        // Validate the form 🀄
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed|string|min:6|max:16',
        ]);

        // Modify Value ⚙️
        $formFields['password'] = bcrypt($formFields['password']);

//        dd($formFields);

        // Submit to DB 📦
        $user = User::create($formFields);

        // Redirect to the user profile 🚀
        auth()->login($user);

        return redirect()->route('jobs.index')->with('message','User Created Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function create() {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'  # min:6 -> Minimum character is 6
        ]);

        # Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        # Create User
        $user = User::create($formFields);

        # Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }

    public function logout(Request $request) {
        auth()->logout(); # Removes authentication info from the request

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    # Show Login Form
    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'  # min:6 -> Minimum character is 6
        ]);

        # Confirm Login
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}

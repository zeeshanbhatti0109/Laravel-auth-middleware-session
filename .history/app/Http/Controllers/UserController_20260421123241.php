<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required |confirmed',
            'age' => 'required|integer', // ADDED
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }
    }

    public function login(Request $request)
    {
        $login = $request->validate([

            'email' => 'required | email',
            'password' => 'required ',
        ]);

        if (Auth::attempt($login)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password'
        ])->withInput();
    }
    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function innerPage()
    {
        if (Auth::check()) {
            return view('inner');
        } else {
            return redirect()->route('login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

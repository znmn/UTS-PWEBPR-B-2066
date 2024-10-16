<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $user = [
            'email' => 'zain@email.test',
            'password' => 'password',
            'name' => 'Zainul Muhaimin'
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($request->email == $user['email'] && $request->password == $user['password']) {
            session(['user' => $user]);

            return redirect()->intended('home');
        }

        return back()->with(
            'error',
            'Email atau Password Salah!',
        )->onlyInput('email');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}

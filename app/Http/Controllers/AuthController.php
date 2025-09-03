<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            // Simpan role ke session setelah login berhasil
            $user = auth()->user();
            session(['role' => $user->role]);

            return redirect()->route('dashboard.index');
        }

        return back()->withErrors([
            'login' => 'Username or password is incorrect.',
        ]);
    }
    public function logout()
    {
        auth()->logout();
        session()->flush();

        return redirect()->route('login');
    }
}

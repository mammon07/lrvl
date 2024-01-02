<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Akun; // Adjust the namespace based on your actual model location

class AkunController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Menggunakan model Akun untuk mencari user
        $user = Akun::where('username', $credentials['username'])->first();

        // Jika user ditemukan dan password cocok
        if ($user && password_verify($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/tes');
        }

        // Jika login gagal
        return back()->withErrors(['login' => 'Login failed.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

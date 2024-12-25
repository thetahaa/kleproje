<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('product');
    //     }

    //     return back()->withErrors([
    //         'login' => ' • Eposta ya da şifre hatalı.',
    //     ]);
    // }

    // // public function logout(Request $request)
    // // {
    // //     // Kullanıcıyı oturumdan çıkart
    // //     Auth::logout();

    // //     // Oturum verilerini temizle
    // //     $request->session()->invalidate();
    // //     $request->session()->regenerateToken();

    // //     // Çıkış sonrası yönlendirme
    // //     return redirect('http://localhost:8003');  // login sayfasına yönlendirme
    // // }
}

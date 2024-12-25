<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\delete;

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

    // public function logout(Request $request)
    // {
    //     $user = User::where('id',$request->user()->id)->first();
    //     if($user)
    //     {
    //         $user->tokens()->delete();
    //         return response()->json([
    //             'message' => 'Başarıyla Çıkış Yapıldı.',
    //         ],200);
    //     }
    //     else{
    //         return response()->json([
    //             'message' => 'Kullanıcı Bulunamadı.',
    //         ],401);
    //     }

    //     // // Token iptal et (revocation)
    //     // $request->user()->currentAccessToken()->delete();
    //     // // Çıkış sonrası mesaj
    //     // return response()->json(['message' => 'Çıkış yapıldı.'], 200);
    // }

    // public function profile(Request $request)
    // {
    //     if($request->user())
    //     {
    //         return response()->json([
    //             'message' => 'Profil Getirildi.',
    //             'data' => $request->user()
    //         ],200);
    //     }
    //     else{
    //         return response()->json([
    //             'message' => 'Kimliği Doğrulanmadı.',
    //         ],401);
    //     }
    // }

}

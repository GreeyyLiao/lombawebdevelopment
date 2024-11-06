<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(){
        return view('auth.register');
    }

    public function storeRegister(){

        request()->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:ADMIN,USER',
        ]);

        User::create([
            'nama_depan' => request()->nama_depan,
            'nama_belakang' => request()->nama_belakang,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'role' => request()->role,
        ]);

        return redirect('/login');

    }

    public function login(){
        return view('auth.login');
    }

    public function storeLogin() {

        request()->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', request()->email)->first();
        if($user) {
            if(Hash::check(request()->password, $user->password)) {
                if($user && $user->role =='ADMIN'){
                    Auth::login($user);
                    return redirect('/admin');
                }else{
                    Auth::login($user);
                    return redirect('/user');
                }
            }
            return redirect('/login');
        }
        return redirect('/login');
    }

    public function logout() {
        $user = request()->user();
        Auth::logout($user);
        return redirect('/');
    }
}

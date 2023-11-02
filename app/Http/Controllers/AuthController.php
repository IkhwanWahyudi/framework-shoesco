<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        if ($request->password == $request->cpassword) {
            $usernameExist = User::where("username", $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/auth/regis');
            }
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
            session()->flash('success', 'Registration successful!');
            return redirect('/auth/regis');
        } else {
            session()->flash('error', 'Password confirmation is incorrect!');
            return redirect('/auth/regis');
        }
    }

    public function loginAction(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->role == "customer") {
                return redirect('/customer/home');
            } elseif ($user->role == "admin") {
                return redirect('/admin/dashboard');
            }
        } else {
            session()->flash('error', 'Username or password is incorrect!');
            return redirect('/auth');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('username', 'password');
        if (Auth::attempt($data)) {
            $user = User::where('username', $request->username)->first();
            $totalUser = User::count();
            return view('pages.dashboard', compact('totalUser'));
        } else {
            return redirect('/');
        }
    }

    public function registerPage()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {

        $checkUser = User::where('username', $request->username)->first();
        // dd($request->username);
        if (!$checkUser) {
            if (User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ])) {
                return redirect('/');
            }
        }
    }

    public function dashboard()
    {
        $totalUser = User::count();
        $totalProduct = Product::sum('Qty');
        return view('pages.dashboard', compact('totalUser','totalProduct'));
    }
}

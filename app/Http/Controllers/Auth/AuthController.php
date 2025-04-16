<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('Authentikasi.register');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('username', $request->user)
            ->orWhere('email', $request->user)
            ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['user' => 'Invalid credentials.']);
        }


        auth()->login($user);
        // dd($user);
        return redirect('/')->with('success', 'Login successful.');
        // dd($request->all());

        // $credentials = $request->only('email', 'password');

        // if (auth()->attempt($credentials)) {
        //     return redirect()->route('home')->with('success', 'Login successful.');
        // }

        // return redirect()->back()->withErrors(['user' => 'Invalid credentials.']);
    }


    public function register(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // 'confirm_password' => 'required|string|min:8',
        ]);
        // dd($request->all());

            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
                return redirect()->back()->withErrors(['user' => 'User terdaftar.']);
            }else {
                $user = new User();
                $user->username = $request->username;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->save();
            }

        return redirect()->route('auth.login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/')->with('success', 'Logout successful.');
    }


}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        if (!$user || !Hash::check($request->password, $user->password)  ) {
            return redirect()->back()->withErrors(['user' => 'Invalid credentials.']);
        }

        if($user->role == 'admin'){
            auth()->login($user);
            return redirect('/dashboard')->with('success', 'Login successful.');
        }else{
            auth()->login($user);
            return redirect('/')->with('success', 'Login successful.');
        }

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

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/')->with('success', 'Logout successful.');
    }

    public function authGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();
    $user = User::where('email', $googleUser->getEmail())->first();

    if (!$user) {
        $user = User::create([
            'email' => $googleUser->getEmail(),
            'username' => $this->generateUsername($googleUser),
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
        ]);
    } else {
        $user->update([
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
        ]);
    }

    if ($user->role == 'admin') {
        Auth::login($user);
        return redirect('/dashboard')->with('success', 'Login successful.');
    }else{
        Auth::login($user);
    return redirect('/');
    }


}



    private function generateUsername($googleUser) {
        $base = Str::slug($googleUser->getName());
        $username = $base;
        $i = 1;

        while (User::where('username', $username)->exists()) {
            $username = $base . $i++;
        }

        return $username;
    }


}

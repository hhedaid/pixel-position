<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:250',
            'email' => 'required|email|unique:users,email|max:250',
            'password' => 'required|string|min:5'
        ]);

        $user = User::create($validated);
        $request->session()->regenerate();
        Auth::login($user);

        return redirect()->to('/');
    }
}

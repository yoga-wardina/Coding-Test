<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $input = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    
        if (Auth::attempt($input)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors(['login' => 'Invalid username or password']);
    }
    public function register(Request $request)
    {
        $user = Auth::user();

        if (!$user || $user->role !== 'admin') {
            return back()->withErrors(['login' => 'Invalid credentials']);
        }
    
        $request->validate([
            'username' => ['required', 'string', 'max:45', 'unique:accounts,username'],
            'password' => ['required', 'string', 'min:6'],
            'name' => ['required', 'string', 'max:45'],
            'role' => ['required', 'in:admin,author'],
        ]);

        Account::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->route('register.form')->with('success', 'Account created successfully!');
    }
}

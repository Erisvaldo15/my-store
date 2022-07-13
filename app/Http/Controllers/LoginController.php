<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

        
        if(Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password'],
        ])) {
            
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return back()->withErrors([
            'email' => 'E-mail incorreto',
            'password' => 'Senha incorreta',
        ]);

    }

    public function destroy(Request $request) {
        
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login')->with('Logout', 'Logout realized with success');
    }

}

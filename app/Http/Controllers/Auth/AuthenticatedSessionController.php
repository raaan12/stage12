<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = auth()->user(); // Récupérer l'objet User connecté$user = auth()->user(); // Récupérer l'objet User connecté
            if ($user->role === 'admin') {
                return redirect()->intended(route('products.index')); // Redirection vers l'interface admin
            } elseif ($user->role === 'client') {
                return redirect()->intended(route('client.index')); // Redirection vers l'interface client
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = auth()->user(); // Récupérer l'objet User connecté

        if ($user->role === 'admin') {
            return redirect()->intended(route('products.index')); // Redirect admin to admin dashboard
        } elseif ($user->role === 'client') {
            return redirect()->intended(route('client.index')); // Redirect client to client dashboard
        }
    
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

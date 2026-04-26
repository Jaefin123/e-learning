<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Logika redirect berdasarkan role
        if ($request->user()->role === 'dosen') {
            return redirect()->intended(route('look'));
        }elseif ($request->user()->role === 'admin') {
            return redirect()->intended(route('admin.dashboard'));
        }elseif($request->user()->role === 'mahasiswa') {
            return redirect()->intended(route('dashboard'));
        }

        // Default redirect jika role tidak cocok
        return redirect()->intended(RouteServiceProvider::HOME);

        // return redirect()->intended(route('dashboard', absolute: false));
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

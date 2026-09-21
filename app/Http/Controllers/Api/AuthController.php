<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Rate limiting
        $throttleKey = Str::transliterate(
            Str::lower($request->string('email')) . '|' . $request->ip()
        );

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            return response()->json([
                'message' => 'Terlalu banyak percobaan login. Silakan coba lagi nanti.',
                'retry_after' => $seconds,
            ], 429);
        }

        try {
            $attempt = Auth::attempt(
                [
                    'email' => $credentials['email'],
                    'password' => $credentials['password'],
                ]
            );
        } catch (\RuntimeException $e) {
            // Fallback untuk password lama yang belum ter-hash
            $user = User::where('email', $credentials['email'])->first();

            if ($user && $user->password === $credentials['password']) {
                $user->password = Hash::make($credentials['password']);
                $user->save();

                Auth::login($user);

                RateLimiter::clear($throttleKey);

                return response()->json([
                    'message' => 'Login berhasil',
                    'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => $user->role,
                    ],
                ], 200);
            }

            $attempt = false;
        }

        if (! $attempt) {
            RateLimiter::hit($throttleKey);

            return response()->json([
                'message' => 'Email atau password salah.',
            ], 401);
        }

        RateLimiter::clear($throttleKey);

        $user = Auth::user();

        return response()->json([
            'message' => 'Login berhasil',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ],
        ], 200);
    }
}
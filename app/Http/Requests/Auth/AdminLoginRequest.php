<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AdminLoginRequest extends LoginRequest
{

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();
        $login = $this->email;
        $user = User::where('email', $login)
            ->orWhere('username', $login)
            ->orWhere('phone', $login)
            ->first();

        if (!$user || !Hash::check($this->password, $user->password) || $user->role !== 'admin') {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'login' => trans('auth.failed'),
            ]);
        }

        Auth::login($user, $this->boolean('remember'));
        RateLimiter::clear($this->throttleKey());
    }

}

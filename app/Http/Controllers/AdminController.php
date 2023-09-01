<?php

namespace App\Http\Controllers;


use App\Http\Requests\Auth\AdminLoginRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index',[
            'user'=>Auth::user()->load('profile')
        ]);
    }

    public function show()
    {
        return view('admin.profile', [
            'user' => Auth::user()->load('profile')
        ]);
    }

    public function create()
    {
        return view('admin.login');
    }

    public function store(AdminLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    public function edit()
    {
        $user = Auth::user()->load('profile');
        return view('admin.edit-profile', [
            'user' => $user
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

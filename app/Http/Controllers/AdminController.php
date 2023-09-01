<?php

namespace App\Http\Controllers;


use App\Http\Requests\admin\ChanePasswordRequest;
use App\Http\Requests\admin\UpdateProfileRequest;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index', [
            'user' => Auth::user()->load('profile')
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

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user()->load('profile');
        $profile = $user->profile;

        $userInfo = $request->only('name', 'username', 'phone');
        $profileInfo = $request->only('about', 'address', 'github', 'tweeter', 'instagram');

        if ($request->file('header_image')) {
            if ($profile->header_image && Storage::exists($profile->header_image)) {
                Storage::delete($profile->header_image);
            }

            $imagePath = $request->file('header_image')->store('public/usersHeaderImage');
            $profileInfo['header_image'] = $imagePath;
        }

        if ($request->file('profile_image')) {
            if ($profile->profile_image && Storage::exists($profile->profile_image)) {
                Storage::delete($profile->profile_image);
            }

            $imagePath = $request->file('profile_image')->store('public/usersProfileImage');
            $profileInfo['profile_image'] = $imagePath;
        }
        Auth::user()->update($userInfo);
        Auth::user()->profile()->update($profileInfo);
        return redirect()->route('admin.profile')->with('success', 'profile updated successfully');
    }

    public function changePass()
    {
        return view('admin.changePass', [
            'user' => Auth::user()->load('profile')
        ]);
    }

    public function submitPass(ChanePasswordRequest $request)
    {
        $user = Auth::user();
        $user->password = Hash::make($request->input('newPass'));
        $user->save();
        return redirect()->route('admin.profile')->with('success', 'password change successfully');
    }
    
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

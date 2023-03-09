<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function signup(SignUpRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($request['password']);

        if ($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $user = User::query()->create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function signin(SignInRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return back()
                ->withErrors(['invalid' => 'Invalid credentials'])
                ->withInput($request->all());
        }

        if (Auth::user()->role === 'banned') {
            Auth::logout();

            return back()
                ->withErrors(['banned' => 'You are has been blocked! :3'])
                ->withInput($request->all());
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        $credentails = ['email' => $data['email'], 'password' =>$data['password']];

        if (!Auth::attempt($credentails)) {
            throw ValidationException::withMessages(['email' => 'Either email address or password is incorrect.']);
        }

        return redirect()->route('products.create')->with('success', "You are logged in successfully!");
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('admin.login');
    }
}

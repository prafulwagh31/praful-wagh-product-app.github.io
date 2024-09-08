<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registration()
    {
        return view('admin.register');
    }

    public function storeRegistration(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string'],
            'email' => ['required', "email"],
            'password' => ['required','string'],
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['user_type'] = 'admin';

        $user = User::create($data);
        //dd($user);
        auth()->login($user);

        return redirect()->route('products.create')->with('success', 'User Registered  Successfully');
    }
}

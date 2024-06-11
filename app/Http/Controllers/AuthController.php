<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Hash;
//use Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        dd($request->all());
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_post(Request $request)
    {
        //dd($request->all());
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        $user->mobile = trim($request->mobile);
        $user->address = trim($request->address);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->status = 0;
        $user->is_admin = 0;
        $user->save();

        return redirect('/')->with('success', 'Registered successfully');

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('registerUser');
    }

    public function register(Request $request){
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);


        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        Auth::login($user);

        return redirect(route('view.posts'));

    }

    public function showLoginForm(){
        return view('loginUser');
    }

    public function login(Request $request){
        // $credentials = $request->only('email', 'password');
        // $credentials = $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // $user = User::where('email', $credentials['email'])->first();

        // if (Auth::attempt($credentials)) {
        //     Auth::login($user);
        //     return redirect()->route('view.posts');
        // }
        // else{
        //     return redirect()->route('login.form');
        // };

        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if (auth()->guard('web')->attempt(['email' => $credentials['email'],'password'=>$credentials['password']])){
            $request->session()->regenerate();
        }

        return redirect()->route('login.form');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }

    public function viewMain(){
        return view('viewPosts');
    }
}

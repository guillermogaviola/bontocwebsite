<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login_show()
    {
    	return view('auth.login');
    }

    public function login_perform(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password ]))
        {
            if(!empty(Auth::user()->email_verified_at))
            {
                return redirect('dashboard');
            }
           
        }
    }

     public function register_show()
    {
    	return view('auth.register');
    }
    
    public function create_user(Request $request)
    {

     //    request()->validate([
     //    'name' => 'required',
     //    'email' => 'required|email|unique:users',
     //    'password' => 'required'
     // ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        // $save->remember_token = Str::random(40);
        $save->save();

     //    Mail::to($save->email)->send(new RegisterMail($save));

        return redirect('login')->with('success', "Your account registered successfully.");
    }

    public function forgot()
    {
    	return view('auth.forgot');
    }

    public function logout()
    {
      	return redirect('/login');
    }


}

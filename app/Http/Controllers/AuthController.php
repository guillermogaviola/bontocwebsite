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

    public function login_perform()
    {
    	return view('auth.login');
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

    public function forgot_password(Request $request)
    {
       $user = User::where('email', '=', $request->email)->first();
       if(!empty($user))
       {
            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect('login')->with('success', "Please check your email and reset your password.");
       }
       else
       {
            return redirect()->back()->with('error', "Email not found in the system.");
       }
    }

    public function logout()
    {
      	Auth::logout();
      	return redirect('/login');
    }


}

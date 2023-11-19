@extends('layouts.auth')

@section('content')

<title>LGU-Bontoc | Login</title>

@include('layouts.partials.message')

<form method="post" action="{{ route('login.perform') }}">

@csrf

<div class="app-auth-body mx-auto"> 
        <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html">
        <img class="logo-icon me-2" src="{{ asset('assets/images/bontoclogo.png')}}" alt="logo"></a></div>
        <h2 class="auth-heading text-center mb-5">Login</h2>
        <div class="auth-form-container text-start">
            <form class="auth-form login-form">         
                <div class="email mb-3">
                    <label for="floatingName">Username</label>
                     <input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required" autofocus>
                    
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif

                </div><!--//form-group-->
                <div class="password mb-3">
                    <label for="floatingPassword">Password</label>
                   <input type="password" class="form-control" name="password" value="{{ old('password') }}" required="required">
                    
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                    <div class="extra mt-3 row justify-content-between">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                <label class="form-check-label" for="RememberPassword">
                                Remember me
                                </label>
                            </div>
                        </div><!--//col-6-->
                        <!-- <div class="col-6">
                            <div class="forgot-password text-end">
                                <a href="reset-password.html">Forgot password?</a>
                            </div>
                        </div> --><!--//col-6-->
                    </div><!--//extra-->
                </div><!--//form-group-->
                <div class="text-center">
                    <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>

                </div>
            </form>
            
            <div class="auth-option text-center pt-5">No Account? <a class="text-link" href="{{route('register.show')}}" >Register </a>here.</div>
        </div><!--//auth-form-container-->  

    </div><!--//auth-body-->
</form>
@endsection
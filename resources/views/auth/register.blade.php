@extends('layouts.auth')

@section('content')

    <title>Register</title>


    @include('layouts.partials.messages')

    <form method="post" action="{{ route('register.perform') }}">

    <div class="app-auth-body mx-auto"> 
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html">
                    <img class="logo-icon me-2" src="{{asset('resources/img/bontoclogonobg.png')}}" alt="logo"></a>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <h2 class="auth-heading text-center mb-5">Register</h2>
                    <div class="auth-form-container text-start mx-auto">
                        <form class="auth-form auth-signup-form">         
                            <div class="email mb-3">
                            <div class="name mb-3"> 
                                <label for="floatingEmail">Name</label>
                               <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="required" autofocus>
                               
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                               
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif

                            </div>
                            <div class="email mb-3"> 
                                <label for="floatingEmail">Email Address</label>
                               <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required" autofocus>
                               
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="password mb-3">
                                <label for="floatingName">Username</label>
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required" autofocus>

                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="email mb-3">
                                 <label for="floatingPassword">Password</label>
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" required="required">
                           
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="email mb-3">
                                <label for="floatingConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" required="required">
                                
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                    <label class="form-check-label" for="RememberPassword">
                                    I accept the <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Statement of the Portal</a>.
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                            </div>
                        </form>
                        <div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="{{route('login.show')}}" >Log in.</a></div>
                    </div>                 
                </div>
    </form>
@endsection
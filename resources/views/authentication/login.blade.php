@extends('layouts.authentication.master')
@section('title', 'Login')


@section('content')
<div class="container-fluid p-0">
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row m-0">
      <div class="col-12 p-0">
         <div class="login-card">
            <div>
               <div>
                   <a class="logo" href="#">
                       <img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}" alt="looginpage">
                       <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage">
                   </a>
               </div>
               <div class="login-main">
                  <form class="theme-form" method="POST" action="{{ route('login') }}">
                      @csrf
                     <h4>Sign in to account</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                         <x-input-label for="email" :value="__('Email')" />
                         <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
{{--                        <label class="col-form-label">Email Address</label>--}}
{{--                        <input class="form-control" type="email" required="" placeholder="Test@gmail.com">--}}
                     </div>
                     <div class="form-group">
                         <x-input-label for="password" :value="__('Password')" />

                         <x-text-input id="password" class="form-control"
                                       type="password"
                                       name="password"
                                       required autocomplete="current-password" />

                         <x-input-error :messages="$errors->get('password')" class="mt-2" />
{{--                        <label class="col-form-label">Password</label>--}}
{{--                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">--}}
                        <div class="show-hide"><span class="show">                         </span></div>
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1">Remember password</label>
                        </div>
                        <a class="link" href="{{ route('forget-password') }}">Forgot password?</a>
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                     </div>
                     <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                     <div class="social mt-4">
                        <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                     </div>
                     <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="{{  route('sign-up') }}">Create Account</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection




@extends('includes.master')

@section('title','Login')

@section('css')
@endsection

@section('guest-content')
    
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">         
            <div class="text-center mb-4 text-white">
                <h2>SOCIALITE LOGIN</h2>
            </div>       
            @include('message')
            <div class="login-form">
                <form method="post" action="{{ route('admin_login') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        @error('email')
                            <span class="error">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        @error('password')
                            <span class="error">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="checkbox">                                                

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>                    
                </form>
                <div class="social-login-content">
                    <div class="social-button">                        
                        <a href="{{ route('facebook_login') }}" target="_blank">
                            <button type="button" class="btn social facebook btn-flat btn-addon">
                                <i class="ti-facebook"></i>
                                Sign in with facebook
                            </button>
                        </a>
                        <a href="{{ route('google_login') }}" target="_blank">
                        <button type="button" class="btn social google btn-flat btn-addon mt-2">
                            <i class="ti-google"></i>
                            Sign in with google
                        </button>
                        </a>
                        <a href="{{ route('twitter_login') }}" target="_blank">
                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2">
                                <i class="ti-twitter"></i>
                                Sign in with twitter
                            </button>
                        </a>
                        <a href="{{ route('github_login') }}" target="_blank">
                            <button type="button" class="btn social github btn-flat btn-addon mt-2">
                                <i class="ti-github"></i>
                                Sign in with github
                            </button>
                        </a>
                        <a href="{{ route('linkedin_login') }}" target="_blank">
                            <button type="button" class="btn social linkedin btn-flat btn-addon mt-2">
                                <i class="ti-linkedin"></i>
                                Sign in with LinkedIn
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @php
    dd("SFds");
@endphp --}}
@endsection

@section('js')
    
@endsection
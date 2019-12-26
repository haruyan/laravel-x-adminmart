@extends('layouts.auth')

@section('content')
    <div class="text-center">
        <img src="{{ asset('template/assets/images/big/icon.png') }}" alt="wrapkit">
    </div>
    <h2 class="mt-3 text-center">Sign In</h2>
    <p class="text-center">Enter your email or username and password to access admin panel.</p>
    <form class="mt-4" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="text-dark" for="uname">Username or Email</label>
                    <input id="uname" type="text" placeholder="enter your username/email"
                        class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"
                        name="username" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="text-dark" for="pwd">Password</label>
                    <input id="pwd" type="password" placeholder="enter your password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <button type="submit" class="btn btn-block btn-dark">Sign In</button>
            </div>
            <div class="col-lg-12 text-center mt-5">
                Don't have an account? <a href="#" class="text-danger">Sign Up</a>
            </div>
        </div>
    </form>
@endsection
@extends('layouts.auth')

@section('content')
<div class="container">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Reset Password</div>
          <div class="card-body">
            <div class="text-center mb-4">
              <h4>Forgot your password?</h4>
              <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
              <div class="form-group">
                <div class="form-label-group">
                    <input id="email" type="email" placeholder="Enter email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  <label for="email">Enter email address</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
              @if (Route::has('password.request'))
                <a class="d-block small" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </div>
          </div>
        </div>
      </div>




@endsection

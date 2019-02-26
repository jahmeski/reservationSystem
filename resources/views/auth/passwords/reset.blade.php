@extends('layouts.auth')

@section('content')
<div class="container">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Reset Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                                <div class="form-label-group">
                                    <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                  <label for="email">Email address</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                  <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                      <label for="password">Password</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-label-group">
                                      <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                                      <label for="password-confirm">Confirm password</label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

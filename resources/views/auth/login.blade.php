@extends('layouts.base_login')

@section('content')
<div style="display:flex; justify-content: center; align-items:center;">
    <div class="col-lg-3 col-md-5 col-sm-6 vertical-center">
        <div class="card bg-white" style="display:flex; justify-content: center; align-items:center;">
            <div class="card-title  bg-white">
                <img id="logo" src="{{ asset('/Static/img/logo.png') }}" alt="logo de empresa">
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-auto">
                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-envelope"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                              
                                  
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                            
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-auto my-1 float-right" style="padding-top: 5%;">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              {{ __('Remember Me') }}
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                        </div>
                    </div>

                    <br><br>

                    <center><button class="btn btn-success my-2" type="submit">{{ __('Login') }}</button></center>
                </form>

                @if (Route::has('password.request'))
                    <a class="text-small my-4 text-center btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
                
            </div>

        </div>
    </div>
</div>
@endsection
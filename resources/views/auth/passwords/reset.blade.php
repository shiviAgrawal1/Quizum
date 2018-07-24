@extends('layout')
@section('container')
 <nav>
    <div class="nav-wrapper blue-grey">
      <a href="#" class="brand-logo center">Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('register') }}">Register</a></li>
        <li><a href="/login">Login</a></li>
        </ul>
    </div>
  </nav>
<br><div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="col s12 offset-s2">
            <h2>{{ __('Reset Password') }}</h2>
        </div>
        <div class="col s6">
            <!--img src="#" style="width: 200px; height: 200px;" class="offset-s3"-->

        </div>
         <div class="card-content">
               <form method="POST" action="{{ route('password.request') }}">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>   
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>   
                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                              </div>
                        </div>
                  <div class="form-group row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>   
                              <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                              </div>
                        </div>
                 
                 <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                 <button type="submit" class="btn btn-primary"  >
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
@extends('layout')
@section('container')

<nav>
    <div class="nav-wrapper blue-grey">
      <a href="#" class="brand-logo center">Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('register') }}">Register</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/adminlogin">Admin Login</a></li>
        </ul>
    </div>
  </nav>

  <br><div class="row">
    <div class="col s4 offset-s4">
      <div class="card">
        <div class="col s12 offset-s4">
            <h2>Login</h2>
        </div>
        <div class="col s6">
             
</div>
         <div class="card-content">
                <form class="form-horizontal" method="POST" action="/Login"> 
                {{csrf_field()}}
                <div class="form-group row">
                     <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>   
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif   
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
 
                      </div>
                </div> 
 

                    <div class="form-group row">
                     <div class="input-field col s12">
                      <i class="material-icons prefix">lock</i>   
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif   
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
 
                      </div>
                </div>

                        <div class="form-group row">
                            <div class="col s6 offset-s1">
                                 
                         <label>
                         <input type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                         <span>{{ __('Remember Me') }}</span>
                         </label>
                                 
                            </div>

                            <div class="col s4 offset-s8">
                                <div>
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                             <div class="col s2 offset-s4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
 
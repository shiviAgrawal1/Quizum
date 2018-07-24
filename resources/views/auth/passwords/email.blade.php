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
        </div>
        <div class="card-content">
            <div class="col s12 offset-s2">
                @if (session('status'))
                        <div class="red-text text-darken-2">
                            {{ session('status') }}
                        </div>
                @endif
              </div>
            <form method="POST" action="{{ route('password.email') }}">
                        {{csrf_field()}}
                 
                        <div class="form-group row">
                            <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>   
                             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                             <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
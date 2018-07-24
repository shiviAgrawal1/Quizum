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
        <div class="col s12 offset-s4">
            <h2>Register</h2>
        </div>
        <div class="col s6">
             
        </div>
         <div class="card-content">
               <form method="POST" action="{{ route('register') }}">
                {{csrf_field()}}
                <div class="form-group row">
                     <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>   
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif   
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
 
                      </div>
                </div>

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
                      <i class="material-icons prefix">email</i>   
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                      <i class="material-icons prefix">date_range</i>   
                    <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif   
                    <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
 
                      </div>
                </div>
                 
                  <div class="form-group row">
                     <div class="input-field col s12">
                      <i class="material-icons prefix">call</i>   
                    <input id="Contact_no" type="text" class="form-control{{ $errors->has('Contact_no') ? ' is-invalid' : '' }}" name="Contact_no" value="{{ old('Contact_no') }}" maxlength="10" minlength="10" required autofocus>

                                @if ($errors->has('Contact_no'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Contact_no') }}</strong>
                                    </span>
                                @endif   
                    <label for="Contact_no" class="col-md-4 col-form-label text-md-right">{{ __('Contact No. ') }}</label>
 
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
                     <div class="input-field col s12">
                      <i class="material-icons prefix">lock</i>   
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
 
                      </div>
                </div>
                 
                <div class="form-group row">
                     <div class="input-field col s3 offset-s5">
                       <button class="btn-large btn-submit" type="submit">{{ __('Register') }}</button>
                      </div>
                </div>

                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

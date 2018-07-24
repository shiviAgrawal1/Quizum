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
      	<div class="col s12 offset-s2">
            <h2>Admin Login</h2>
      	</div>
      	<div class="col s6">
      		<!--img src="#" style="width: 200px; height: 200px;" class="offset-s3"-->

      	</div>
         <div class="card-content">
              <form method="POST" action="./logincomplete">
                {{csrf_field()}}
             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">account_circle</i>	
                      <input id="user_name" type="text" name="user_name"  required>
                       <label>Username</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">lock</i>	
                      <input id="pass_word" type="password" name="pass_word" required>
                       <label>Password</label>
                      </div>
             	</div>
             <div class="row">
             		  <div class="col s2 offset-s4">
             		   <button class="btn-large btn-submit" type="submit">Submit</button>
                      </div>
             	</div>
             
             	

             </form>
        </div>
         </div>
    </div>
  </div>
            
@endsection
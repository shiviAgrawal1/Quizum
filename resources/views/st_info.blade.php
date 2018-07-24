@extends('layout')
@section('container')
<?php
session_start();
 $_SESSION["username"]=$user->username;
  
?>


<nav>
    <div class="nav-wrapper blue-grey">
      <a href="#" class="brand-logo center">Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	 <li><a href="/edit_ur_detail/{{$user->username}}">Edit your Detail</a></li>
         <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav>
<br>
  <div class="row">
    <div class="col s10 offset-s1">
      <div class="card-panel teal lighten-2">
        <span class="card-title black-text"><center><h3><u>Your Detail</h3></u></center></span><br>
        <div class="card-content white-text col s8 offset-s3">
          <input type="hidden" class="btn btn" name="username" id="username" value="{{$user->username}}">
          <input type="hidden" class="btn btn" name="name" id="name" value="{{$user->name}}">
          <input type="hidden" class="btn btn" name="email" id="email" value="{{$user->email}}">
          <input type="hidden" class="btn btn" name="dob" id="dob" value="{{$user->dob}}">
          <input type="hidden" class="btn btn" name="Contact_no" id="Contact_no" value="{{$user->Contact_no}}">
          <input type="hidden" class="btn btn" name="password" id="password" value="{{$user->password}}">


           <div class="col s7 white-text"><h5>Username:        {{$user->username}}</h5></div>
            <div class="col s7 white-text"><h5> Name:          {{$user->name}}</h5></div>
           <div class="col s7 white-text"><h5>Date of Birth:         {{$user->dob}}</h5></div>
           <div class="col s7  white-text text-darken-2"><h5> Contact_no:      {{$user->Contact_no}}</h5></div>
           <div class="col s7  white-text text-darken-2"><h5> Email_id:      {{$user->email}}</h5></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>

        </div><br>
        <div class="card-action"><!--button onclick="time()" >time</button-->
           <a href="/quiz"><center><button class="btn btn-warning red " onclick="time()">Start Quiz</button></center></a>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>

        </div>
      </div>
    </div>
  </div>
  <script src="/js/cus.js"></script>          

 


@endsection
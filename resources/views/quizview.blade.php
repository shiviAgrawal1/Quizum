<?php
session_start();
if($_SESSION["username"]){
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>quiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/plugins/materialize/css/materialize.min.css">
    <!--link rel="stylesheet" href="assets/css/animate.css"-->
    <link rel="stylesheet" href="/assets/css/qportal.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import Google Icon Font-->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <Import materialize.css-->
      <!--link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <Let browser know website is optimized for mobile-->
      <!--meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     -->
<style type="text/css">
  body {

   background-image: url("/s4.jpg");
   background-repeat: no-repeat;
   background-color: #cccccc;
   background-size: 100% 110%; 
   opacity: 0.9;


    
}
</style>
</head>

<body>

<header>
  <nav>
    <div class="nav-wrapper orange darken-1">
      <a href="#" class="brand-logo center righteous">Quiz</a>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
  </nav>
</header>
<div class="row ">
  <div class="col s2 offset-s8 blue ">
    <h5 class="right-align">Time Left:</h5>
  </div>
  <div class="col s2 blue">
      <h5><div id="demo"></div>  </h5>
   </div>   
  </div>
<input type="hidden" class="btn btn" name="username" id="username" value='{{$_SESSION["username"]}}'>
 
 <?php $size = sizeof($quiz)?>
<main class="container">
  <div class="row">
    <div class="row"></div>
    
    <aside class="col s4 question-tile">
      <div class="tile-heading col s12 orange center white-text z-depth-2">
        Question Numbers
      </div>

      <div class="col s12 tile-heads-holder center center-align black-text">
        <?php  for($k = 1; $k<=$size;$k++)
      {     ?>
        <!-- <div class="tile-heads col s3">
          <div class="tile-heads-question tile-active orange z-depth-2" onclick="circle({{$k}})">{{$k}}</div>
        </div> -->
        <div class="tile-heads col s3">
          <div class="tile-heads-question" name="circles" onclick="circle({{$k}})">{{$k}}</div>
        </div>
        <!-- <div class="tile-heads col s3">
          <div class="tile-heads-question" onclick="circle({{$k+2}})">{{$k+2}}</div>
        </div>
        <div class="tile-heads col s3">
          <div class="tile-heads-question" onclick="circle({{$k+3}})">{{$i+3}}</div>
        </div> -->
         <?php
        }?>

      </div>
    </aside>

    <!-- loop -->
    <div class="col s8 sections-holder">

    

    <div class="row" id="change">
       <input type="hidden" name="idd" id="idd" value="{{$i}}">
       <input type="hidden" name="i" id="i" value="{{$i}}">
       <input type="hidden" class="btn btn" name="q_id" id="q_id" value="{{$quiz[$i]->id}}">

 
       <div class="col s8">
        <div class="container">
         
        <p id="question" class="black-text"><b>Q{{$i+1}}:      {{$quiz[$i]->question}}</b></p>
        <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(1)" value="1"/>
        <span><b>A)     {{$quiz[$i]->option1}}</b></span>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(2)" value="2" />
        <span><b>B)     {{$quiz[$i]->option2}}</b></span>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(3)" value="3" />
        <span><b>C)     {{$quiz[$i]->option3}}</b></span>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(4)" value="4" />
        <span><b>D)     {{$quiz[$i]->option4}}</b></span>
      </label>
    </p>
          </div>
        </div>
      </div> 




    <div class="row"></div>
      <hr>
      <div class="row"></div>

      <div class="row button-holder">
        <div class="col s12">
          <button class="btn orange left previous" onclick="back()">Previous</button>
          <button class="btn orange right next" onclick="next()">Next</button>

        </div>
      </div>
      <div class="row button-holder">
        <div class="col s12">
          <div class="row"></div>
          <a href="/result2?username={{$username}}" ><button class="btn red left previous col s4 offset-s4" onclick="return confirm('If quiz once submitted you canot return back. Click OK for submit and CANCEL for return back to quiz. ');">Submit</button></a>
        </div>
      </div>
      </div>
      
    <!-- end Loop -->
</main>
<script>
  
// Set the date we're counting down to
var d = new Date();
    
var countDownDate =  d.setHours(d.getHours()+1);
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + ":"
    + minutes + ": " + seconds ;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        window.location = "http://localhost:8000/result2 ";
     }
}, 1000);
</script>

<script src="/js/cus.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/qportal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>





<?php } 
 else
  return redirect('/loginn') ?>


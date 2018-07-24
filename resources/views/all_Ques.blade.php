 
<?php
session_start();
if(isset($_SESSION["user"])){
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 -->
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

<style type="text/css">
  body {

    
   background-image: url("s4.jpg");
   background-repeat: no-repeat;
   background-color: #cccccc;
   background-size: 100% 100%;
   background-repeat: repeat-y;
    
    font-weight: bold;

    
}
nav{
  opacity: 0.8;
}
</style>
</head>
<body>
<nav>
    <div class="nav-wrapper blue-grey">
      <a href="#" class="brand-logo center">Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="/addQuiz">Add Questions</a></li>
        <li><a href="/result">Result</a></li>
        <li><a href="/allusers">All Users</a></li>
        <li><a href="/all_Ques">All Ques</a></li>
        <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
  </nav><br>
  <div class="row">
    <div class="col s12">
       <center><h3><u>All Questions</u></h3></center>
    </div>
  </div>
  <?php $i=1 ?>
@foreach($ques as $q)
 <div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="col s12 ">
            <h5>Q {{$i++}}.    {{$q->question}}</h5>
        </div>
         
         <div class="card-content">
                <div class="row">1.    {{$q->option1}}</div> 
                <div class="row">2.    {{$q->option2}}</div> 
                <div class="row">3.    {{$q->option3}}</div> 
                <div class="row">4.    {{$q->option4}}</div> 
                <hr>
                <div class="row">Answer:   Option   {{$q->answer}}</div> 
                <div class="row"> 
              <div class="col s6">
              <form action="/edit_ques/{{$q->id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-success btn-edit" onclick="return confirm('Are u sure to edit!');">Edit</button>
              </form>
              </div>

               <div class="col s6">
               <form action="/destroy_ques/{{$q->id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-danger btn-delete red" onclick="return confirm('Are u sure to delete!');">Delete</button>
              </form>
              </div>

                </div> 
          </div> 
        </div>
      </div>
    </div>

 @endforeach
<script type="text/javascript" src="js/materialize.min.js"></script>
    
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  -->
</body>
</html>

<?php } 
            else{
               //session_destroy();
               return redirect('/adminlogin'); 
            }
            ?>
 
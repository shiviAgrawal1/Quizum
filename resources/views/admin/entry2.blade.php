@extends('layout')
@section('container')
<?php
session_start();
//echo $_SESSION["user"];
if(isset($_SESSION["user"])){
?>
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
<br><div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
      	<div class="col s12 offset-s2">
            <h2>Add Questions</h2>
      	</div>
      	<div class="col s6">
      		<!--img src="#" style="width: 200px; height: 200px;" class="offset-s3"-->

      	</div>
         <div class="card-content">
               <form method="POST" action="/admin1">
                {{csrf_field()}}

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">question_answer</i>	
                       <textarea name="question" id="question" class="materialize-textarea"  required></textarea>
                       <label>Question :</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">radio_button_checked</i>	
                       <input type="text" name="option1" id="option1" required>
                       <label>Option 1 :</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">radio_button_checked</i>	
                       <input type="text" name="option2" id="option2">
                       <label>Option 2 :</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">radio_button_checked</i>	
                       <input type="text" name="option3" id="option3">
                       <label>Option 3 :</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">radio_button_checked</i>	
                       <input type="text"type="text" name="option4" id="option4"> 
                       <label>Option 4 :</label>
                      </div>
             	</div>

             	<div class="row">
             		 <div class="input-field col s12">
             		  <i class="material-icons prefix">question_answer</i>	
                       <input type="text" name="answer" id="answer" required> 
                       <label>Answer (Option no [1,2,3 or 4]):</label>
                      </div>
             	</div>
             <div class="row">
             		 <div class="input-field col s12">
             		   <button class="btn-large btn-submit" type="submit" name="submit">Submit</button>
                      </div>
             	</div>
             
             	

             </form>
        </div>
         </div>
    </div>
  </div>
       <?php } 
            else{ echo "hjgj";
               //session_destroy();
               //return redirect('/adminlogin'); 
            }
            ?>     
@endsection
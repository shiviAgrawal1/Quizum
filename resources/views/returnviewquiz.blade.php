 

<div class="row">
  <input type="hidden" name="idd" id="idd" value="{{$i}}">
	<input type="hidden" name="i" id="i" value="{{$i}}">
       <input type="hidden" class="btn btn" name="q_id" id="q_id" value="{{$quiz[$i]->id}}">
 
       <div class="col s8">
        <div class="container">
         
        <p id="question" class="black-text"><b>Q{{$i+1}}:      {{$quiz[$i]->question}}</b></p>
        <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(1)" value="1" <?php 
if(isset($response->response)){ if($response->response== 1 ) echo 'checked'; } ?> />
        <span><b>A)     {{$quiz[$i]->option1}}</b></span>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(2)" value="2" <?php 
if(isset($response->response)){ if($response->response== 2) echo 'checked'; } ?> />
        <span><b>B)     {{$quiz[$i]->option2}}</b></span></b>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(3)" value="3"<?php 
if(isset($response->response)){ if($response->response== 3) echo 'checked'; } ?>  />
        <span><b>C)     {{$quiz[$i]->option3}}</b></span>
      </label>
    </p>
    <p>
      <label style="color: black;">
        <input class="with-gap" name="group1" type="radio" id="radio" onclick="foo(4)" value="4" <?php 
if(isset($response->response)){ if($response->response==4 ) echo 'checked'; } ?> />
       <span><b>D)     {{$quiz[$i]->option4}}</b></span>
      </label>
    </p>
          </div>
        </div>
      </div> 

  
 
 <!-- <script type="text/javascript">
  var i = <?php  $i; ?>
   document.getElementsById(i).className = "tile-active orange z-depth-2"; 
 </script> -->
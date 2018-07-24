 
<?php
session_start();
if(isset($_SESSION["username"])){
  session_unset(); 
  
}
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
<body  onkeydown="return (event.keyCode == 154)" onload="noBack();" onkeydown="return (event.keyCode != 116)"
     onpageshow="if (event.persisted) noBack();" onunload="">
<nav>
    <div class="nav-wrapper blue-grey">
      <a href="#" class="brand-logo center">Quiz</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav><br>
  <div class="row">
    <div class="col s12">
       <center><h3><u>Your Responses</u></h3></center>
       <center><p class="red-text">*See your result at the last of this page</p></center>
    </div>
  </div>
  <?php $j=1 ; $marks=0;
  $q_size=sizeof($ques); ?>
@foreach($ques as $q)
<?php $o=0; ?>
 <div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="col s12 ">
            <h5>Q {{$j++}}.    {{$q->question}}</h5>
        </div>
         
         <div class="card-content">
                <div class="row">1.    {{$q->option1}}</div> 
                <div class="row">2.    {{$q->option2}}</div> 
                <div class="row">3.    {{$q->option3}}</div> 
                <div class="row">4.    {{$q->option4}}</div> 
                <hr>
                <div class="row">
                <div class="col s6">
                  Answer:   Option   {{$q->answer}}
                </div>
                <div class="col s6">
                     

                  <?php for($i=0;$i<$r;$i++)
                       { 
                        if($Response[$i]->q_no == $q->id)
                        {   $o=$i+1;
                          if($Response[$i]->response == $q->answer)
                          {    $marks+=4;
                              ?>
                              <pre class="green">Your Response: Option {{$Response[$i]->response}}   (+4)</pre>
                              <?php
                          }
                          else
                          {  $marks-=1;
                             ?>
                              <pre class="red">Your Response: Option {{$Response[$i]->response}}   (-1)</pre>
                              <?php
                          }
                        }

                       } 
                        if($o==0)
                        {
                          ?>
                              <pre class="blue-grey">Your Response: none       (0)</pre>
                              <?php
                        }
                       ?>
                     
                </div>  

                </div> 
                 
          </div> 
        </div>
      </div>
    </div>

 @endforeach
 <div class="row">
    <div class="col s12">
       <center><h3><u>Your Result</u></h3></center>
    </div>
  </div>
  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="col s12">
          <?php if(isset($marks)){ ?>
            <center><h5>Your's Result : {{$marks}}  marks</h5></center>
          
          <?php } ?>
        </div>
         <div class="card-content">
          <div class="row"></div>
          <div class="row"></div>
         </div>
         </div>
       </div>

<script type="text/javascript" src="js/materialize.min.js"></script>
 <script type="text/javascript">
   window.onload = function () {  
        document.onkeydown = function (e) {  
            return (e.which || e.keyCode) != 116;  
        };  
    }  
  function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
$(document).on("keydown", disableF5);
      window.history.forward();
      window.open ("mywindow","status=1,toolbar=0");
      function noBack() { window.history.forward(); }

      $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });


      document.onkeydown = checkKeycode
    function checkKeycode(e) {
        var keycode;
        if (window.event)
            keycode = window.event.keyCode;
        else if (e)
            keycode = e.which;

        // Mozilla firefox
        if ($.browser.mozilla) {
            if (keycode == 116 ||(e.ctrlKey && keycode == 82)) {
                if (e.preventDefault)
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } 
        else if ($.browser.chrome) {
            if (keycode == 116 ||(e.ctrlKey && keycode == 82)) {
                if (e.preventDefault)
                {
                    e.preventDefault();
                    e.stopPropagation();
                }
            }
        } 
        // IE
        else if ($.browser.msie) {
            if (keycode == 116 || (window.event.ctrlKey && keycode == 82)) {
                window.event.returnValue = false;
                window.event.keyCode = 0;
                window.status = "Refresh is disabled";
            }
        }
    }

    function goodbye(e) {
    if(!e) e = window.event;
    //e.cancelBubble is supported by IE - this will kill the bubbling process.
    e.cancelBubble = true;
    e.returnValue = 'You sure you want to leave/refresh this page?';
 
    //e.stopPropagation works in Firefox.
    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
}
window.onbeforeunload=goodbye;
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
 
</body>
</html>


 
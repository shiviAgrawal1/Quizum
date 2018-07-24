 
<?php
session_start();
if(isset($_SESSION["user"])){
?> <!DOCTYPE html>
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
   
   background-size: 100% 260%; 
    font-weight: bold;

    
}
nav{
  opacity: 0.8;
}
tr:nth-child(odd){background-color: #f2f2f2}
   
</style>
</head>
<body>
<nav>
    <div class="nav-wrapper orange">
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

<table class="striped highlight centered responsive-table">
    <!--center><h5><i>In this page there are {{ $users->count() }} users.</i> </h5></center-->
        <thead class="blue-grey">
          <tr>
              <th>S No.</th>
              <th>Username</th>
              <th>Name</th>
              <th>Email Id</th>
              <th>DOB</th>
              <th>Contact No.</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>
        	<?php $i=1;?>
@foreach($users as $r)
          <tr>
              <td>{{$i++}}</td>
              <td>{{$r->username}}</td>
              <td>{{$r->name}}</td>
              <td>{{$r->email}}</td>
              <td>{{$r->dob}}</td>
              <td>{{$r->Contact_no}}</td>
              <td>
        <form action="/destroy_user/{{$r->id}}" method="GET">
              {{ csrf_field()}}
              {{ method_field('DELETE')}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button class="btn btn-danger btn-delete red" onclick="return confirm('Are u sure to delete!');">Delete</button>
        </form>
         </td>
          </tr>


      

@endforeach      
 </tbody>
      </table>
{{$users->links()}}
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

<?php

session_start();

session_destroy();

echo "<script>
 alert('You are successfully Logout!');
</script>";

//header('Location:http://localhost:8000/login');
 //return redirect('/login');

?>
<script type="text/javascript">
	 window.location = "http://localhost:8000/" ;
</script>
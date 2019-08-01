<?php 
      header('Access-Control-Allow-Origin: ' . '*');
      header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');
      header('Access-Control-Max-Age: 1000');
      header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	$conn = mysqli_connect("localhost","root","","test");
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
?>
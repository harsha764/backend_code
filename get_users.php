<?php 
	include('connection.php');
	$rows=[];
	$sql = mysqli_query($conn,'SELECT * FROM react_project');
	while ($result = mysqli_fetch_assoc($sql)) {
		array_push($rows, $result);
	}

	echo json_encode($rows);
 ?>
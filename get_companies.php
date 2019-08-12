<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$type =  $data['type'];
	$rows=[];

	if($type == 'mycompanies'){
		$name =  $data['name'];
		$sql = mysqli_query($conn,"SELECT * FROM company_details WHERE created_for = '$name' ");
	}else{
		$sql = mysqli_query($conn,"SELECT * FROM company_details");
	}
	while ($result = mysqli_fetch_assoc($sql)) {
		array_push($rows, $result);
	}
	echo json_encode($rows);
 ?>
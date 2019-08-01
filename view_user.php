<?php 
	
	include('connection.php');

	$data = json_decode(file_get_contents("php://input"), TRUE);
	$userid = $data['id'];
	$resobj = new stdClass;
	
	$sql =mysqli_query($conn,"SELECT * FROM react_project WHERE id='$userid' ");

	while ($result =mysqli_fetch_assoc($sql)) {
		$resobj->data = $result;
	}

	if ($sql) {
		$resobj->status ='sucess';
	}else{
		$resobj->status = 'failure';
	}

	echo json_encode($resobj);

 ?>
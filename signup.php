<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);

	if ($data['type'] != '') {
		$name = $data["username"];
		$password = md5($data["password"]);
		$sql = mysqli_query($conn,"INSERT INTO react_project (name,password) VALUES('$name','$password')");
		$resobj = new stdClass;
		$resobj->name = $name;
		$resobj->type = 'signup';

		if($sql){
			$resobj->status = "created";
		}else{
			$resobj->status = "Please try again";
		}

		echo json_encode($resobj);
	}
	
 ?>
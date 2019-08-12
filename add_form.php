<?php 
	include("connection.php");
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$resobj = new stdClass;
	
	if($data['apiname']= "addform"){
		$title = $data["title"];
		$unique_id = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))), 1, 10);
		$sql = mysqli_query($conn,"INSERT INTO form_list(unique_id,name) VALUES('$unique_id','$title')");
		
		foreach ($data as $key => $value){
				if($key != 'title' && $key != 'apiname'){
					$sql = mysqli_query($conn,"INSERT INTO form_details(unique_id,field_name,field_type) VALUES('$unique_id','$key','$value')");
			}
		}
		$resobj->status = "Inserted";
		echo json_encode($resobj);
	}
 ?>
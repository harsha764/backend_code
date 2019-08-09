<?php 
	include("connection.php");
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$resobj = new stdClass;
	
	if($data['apiname']= "updateform" && $data["name"] !== ''){
		$unique_id =  $data["id"];
		// Delete previous records
		$sql = mysqli_query($conn,"DELETE FROM form_list WHERE unique_id = '$unique_id'");
		$sql = mysqli_query($conn,"DELETE FROM form_details WHERE unique_id = '$unique_id'");

		// Insert new records
		$form_name = $data["name"];
		$sql = mysqli_query($conn,"INSERT INTO form_list(unique_id,name) VALUES('$unique_id','$form_name')");
		
		foreach ($data as $key => $value){
			if($key != 'name' && $key != 'apiname' && $key != 'id' ){
				$sql = mysqli_query($conn,"INSERT INTO form_details(unique_id,field_name,field_type) VALUES('$unique_id','$key','$value')");
			}
		}

		$resobj->status = "Updated";
		echo json_encode($resobj);
	}
 ?>

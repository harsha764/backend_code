<?php 
	include("connection.php");
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$resobj = new stdClass;
	
	if($data['apiname']= "updateprocedure" && $data["procedureName"] !== ''){
		$procedure_id =  $data["procedureId"];
		// Delete previous records
		$sql = mysqli_query($conn,"DELETE FROM procedure_list WHERE unique_id = '$procedure_id'");
		$sql = mysqli_query($conn,"DELETE FROM procedure_details WHERE unique_id = '$procedure_id'");

		// Insert new records
		$procedure_name = $data["procedureName"];
		$sql = mysqli_query($conn,"INSERT INTO procedure_list(unique_id,name) VALUES('$procedure_id','$procedure_name')");
		$data_types = $data['typearray'];
		$count = 0;
		foreach ($data as $key => $value){
			if($count < count($data_types)){
				if($key != 'procedureName' && $key != 'apiname'){
					$sql = mysqli_query($conn,"INSERT INTO procedure_details(unique_id,field_type,field_name,field_value) VALUES('$procedure_id','".$data_types[$count]."','$key','$value')");
				$count++;
				}
			}
		}

		$resobj->status = "Updated";
		echo json_encode($resobj);
	}
 ?>

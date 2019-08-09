<?php 
	include("connection.php");
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$resobj = new stdClass;
	
	if($data['apiname']= "addprocedure"){
		$procedure_name = $data["procedureName"];
		$procedure_id = substr(str_shuffle($str_result),0, 10); 
		$resobj->content = $data;
		
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
		$resobj->status = "Inserted";
		echo json_encode($resobj);
	}
 ?>
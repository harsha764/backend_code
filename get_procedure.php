<?php
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$type =  $data['type'];
	if($type === 'Single procedure'){
		$rowid= $data['rowid'];
		$sql = mysqli_query($conn,"SELECT * FROM procedure_list WHERE unique_id='$rowid'");
		$resobj = new stdClass;
		while ($result = mysqli_fetch_assoc($sql)) {
			$resobj->maindata = $result;
		}
		$procedure_details = [];
		$field_type = [];
		$data= new stdClass;
		$sql1 = mysqli_query($conn,"SELECT * FROM procedure_details WHERE unique_id='$rowid' ORDER BY id ASC");
		while ($result = mysqli_fetch_assoc($sql1)) {
			array_push($procedure_details, $result);
		}
		$sql2 = mysqli_query($conn,"SELECT field_type FROM procedure_details WHERE unique_id='$rowid' ORDER BY id ASC");
		while ($result = mysqli_fetch_assoc($sql2)) {
			array_push($field_type, $result["field_type"]);
		}

		$sql3 = mysqli_query($conn,"SELECT field_name,field_value FROM procedure_details WHERE unique_id='$rowid' ORDER BY id ASC");
		while ($result = mysqli_fetch_assoc($sql3)) {
			$data->{$result["field_name"]} = $result["field_value"];
		}
		$resobj->procedure_details = $procedure_details;
		$resobj->type_array = $field_type;
		$resobj->data = $data;
		echo json_encode($resobj);
	}
?>
<?php
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$type =  $data['type'];
	if($type === 'Single form'){
		$resobj = new stdClass;
		$formdetails = new stdClass;
		$rowid= $data['rowid'];
		$sql = mysqli_query($conn,"SELECT * FROM form_list WHERE unique_id='$rowid' ");
		while ($result = mysqli_fetch_assoc($sql)) {
					$resobj->maindata = $result;
				}		
		$sql = mysqli_query($conn,"SELECT * FROM form_details WHERE unique_id='$rowid' ");
		while ($result = mysqli_fetch_assoc($sql)) {
			$formdetails->{$result["field_name"]} = $result["field_type"];
		}

		$resobj->formdetails = $formdetails;
		echo json_encode($resobj);
	}
?>
<?php
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$type =  $data['type'];
	if($type === 'Single company'){
		$rowid= $data['rowid'];
		$sql = mysqli_query($conn,"SELECT * FROM company_details WHERE id='$rowid'");
		$resobj = new stdClass;
		while ($result = mysqli_fetch_assoc($sql)) {
			$resobj->data = $result;
		}
		echo json_encode($resobj);
	}
?>
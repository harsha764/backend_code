<?php
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$sql = mysqli_query($conn,"SELECT * FROM form_list");
	$rows =[];
	$resobj = new stdClass;
	while ($result = mysqli_fetch_assoc($sql)) {
		array_push($rows, $result);
	}
	$resobj->data = $rows;
	echo json_encode($resobj);
?>
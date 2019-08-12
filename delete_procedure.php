<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$companyid = $data['id'];
	$resobj = new stdClass;
	$sql =mysqli_query($conn,"DELETE FROM procedure_list WHERE unique_id='$companyid'");
	$sql1 =mysqli_query($conn,"DELETE FROM procedure_details WHERE unique_id='$companyid'");
	if ($sql && $sql1) {
		$resobj->data ='Procedure Deleted';
	}else{
		$resobj->data = "Please try again ... Procedure not deleted ";
	}
	echo json_encode($resobj);

 ?>
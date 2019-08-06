<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$companyid = $data['id'];
	$resobj = new stdClass;
	$sql =mysqli_query($conn,"DELETE FROM company_details WHERE id='$companyid'");
	if ($sql) {
		$resobj->data ='Company Deleted';
	}else{
		$resobj->data = "Please try again ... Company not deleted ";
	}

	echo json_encode($resobj);

 ?>
<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	if ($data['type'] != '') {
		$new_company_name = $data['companyname'];
		$rowid = $data['company_id'];

		$sql = mysqli_query($conn,"UPDATE company_details SET company_name = '$new_company_name' WHERE id = '$rowid' ");
		$resobj = new stdClass;
		if ($sql) {
			$resobj->status ='sucess';
			$resobj->data ='Updated';
		}else{
			$resobj->status ='failure';
			$resobj->data ='Error in updating';
		}
		echo json_encode($resobj);
	}
 ?>
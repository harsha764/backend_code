<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	// echo $data['type'];
	if($data['type'] != ''){
		// echo "string";
		$companyname  = $data["companyname"];
		$createdby  = $data["createdby"];
		$createdfor  = $data["createdfor"];
		$sql = mysqli_query($conn,"INSERT INTO company_details (company_name, created_by, created_for) VALUES('$companyname','$createdby','$createdfor')");
		$resobj = new stdClass;
		$resobj->for = $createdfor;

		if($sql){
			$resobj->status = "created";
		}else{
			$resobj->status = "Please try again";
		}
		echo json_encode($resobj);
	}	
 ?>
<?php 
	include('connection.php');
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$resobj = new stdClass;
	$company_id =$data['company_id'];
	if($data["type"] == "update machines"){
		$machine_name = $data['machine_name'];
		$sql1 = mysqli_query($conn,"SELECT * FROM company_details WHERE id='$company_id'");
		if($sql1){
			while ($result = mysqli_fetch_assoc($sql1)) {
				$machines = $result["machines"];
				if($machines !== ''){
					$machine_array = explode(",",$machines);
					if(!(in_array( $machine_name,$machine_array))){
						array_push($machine_array, $machine_name);
						$resobj->ifpresent = 'Machine Added Sucessfully';
						
					}else{
						$resobj->ifpresent = 'Machine Already Present';
					}
					$finaldata = implode(',', $machine_array);
				}else{
					$finaldata = $machine_name;
				}
				$sql = mysqli_query($conn,"UPDATE company_details SET machines ='$finaldata' WHERE id='$company_id'");
				if ($sql) {
					$resobj->status = "Updated";
				}else{
					$resobj->status = "Error";
				}
			}
			
		}
	}else{
		$machine_name = $data['machine_name'];
		$sql = mysqli_query($conn,"UPDATE company_details SET machines ='$machine_name' WHERE id='$company_id'");
		if ($sql) {
			$resobj->ifpresent = 'Machines Edited Sucessfully';
			$resobj->status = "Edited";
		}else{
			$resobj->status = "Error";
		}
	}
	echo json_encode($resobj);
?>
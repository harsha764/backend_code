<?php 
	
	include('connection.php');

	$data = json_decode(file_get_contents("php://input"), TRUE);
	$userid = $data['id'];
	$resobj = new stdClass;
	$sql =mysqli_query($conn,"DELETE FROM react_project WHERE id='$userid'");
	if ($sql) {
		$sql1 = mysqli_query($conn,'SELECT * FROM react_project');
		$rows=[];
		while ($result =mysqli_fetch_assoc($sql1)) {
			array_push($rows, $result);
		}
		$resobj->users = $rows;
		$resobj->data ='User Deleted';
	}else{
		$resobj->data = "Please try again ... User not deleted ";
	}

	echo json_encode($resobj);

 ?>
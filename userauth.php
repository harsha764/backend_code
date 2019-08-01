<?php 
	include('connection.php');

	$data = json_decode(file_get_contents("php://input"), TRUE);
	$name = $data['username'];
	$pass = md5($data['password']);
	// Create token header as a JSON string
	$header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
	// Create token payload as a JSON string
	$payload = json_encode(['username' => $name,'password' => $pass]);
	// Encode Header to Base64Url String
	$base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
	// Encode Payload to Base64Url String
	$base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));


	$sql = mysqli_query($conn,"SELECT * FROM react_project WHERE name='$name' && password = '$pass'");
	$resobj = new stdClass;
	$resobj->name = $name;
	$resobj->type = 'login';
	
	if ($sql->num_rows == 1) {
		$signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);
		// Encode Signature to Base64Url String
		$base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
		// Create JWT
		$jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
		$resobj->jwt_token = $jwt;
		$resobj->status = 'success';
		$sql =  mysqli_query($conn,"UPDATE react_project SET token = '$jwt' WHERE name= '$name'");
	}else{
		$resobj->status = 'Invalid Credentials';
	}
	echo json_encode($resobj);

 
 ?>
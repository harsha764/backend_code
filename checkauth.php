<?php 
    include('connection.php');
    $data = json_decode(file_get_contents("php://input"), TRUE);
    
    $name = $data["username"];
    $token =  $data["token"];

    $resobj = new stdClass;
    $resobj->name = $name;
    $resobj->token = $token;

    $sql= mysqli_query($conn,"SELECT * FROM react_project WHERE name='$name' && token = '$token' ");
    if ($sql->num_rows == 1) {
        $resobj->status = 'success';
    }else{
        $resobj->status = 'Data not found';
    }
    echo json_encode($resobj);

 ?>
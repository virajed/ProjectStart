<?php


$json = file_get_contents("php://input");
$json = stripslashes($json);//moreslashes $sJSON = get_magic_quotes_gpc() ? stripslashes($_GET['jsonstring']): $_GET['jsonstring'];
$data = json_decode($json); 
		
$fn = $data->name;
$cn = $data->cn;
$st = $data->status;




$sql = "INSERT INTO table .....";

$msg = mysqli_query();//

echo json_encode($msg);

?>
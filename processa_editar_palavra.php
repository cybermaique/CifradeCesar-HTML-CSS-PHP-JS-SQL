<?php

$id_cesar = $_POST["id"];
$output_cesar = $_POST["output"];

$servername = "localhost";
$database = "cesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

$sql = "update palavra set output ='" . $output_cesar  . "' where id = " . $id_cesar ;


mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);

header('location: listar_palavra.php');

?>
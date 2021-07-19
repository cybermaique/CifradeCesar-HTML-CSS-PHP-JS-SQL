<?php

$id_cesar = $_GET["id"];

$servername = "localhost";
$database = "cesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

// chegando aqui,..posso fazer qq operacao no banco de dados.

$sql = "delete from palavra where id = " . $id_cesar ;

mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);


header('location: listar_palavra.php');

?>
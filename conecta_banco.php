<?php

$servername = "localhost";
$database = "cesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o BD falhou :( " . mysqli_connect_error());
}

echo "Conectado com sucesso ao BD :)";

mysqli_close($conn);


?>
<?php


$output_cesar = $_POST["input"];

$servername = "localhost";
$database = "cesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o BD falhou :( " . mysqli_connect_error());
}

$sql = "INSERT INTO palavra (id, output) values(null, '". $output_cesar . "')";

$foi_salvo_com_sucesso = mysqli_query($conn,$sql);
if($foi_salvo_com_sucesso){
	echo "Mensagem criptografada e salva com sucesso";
}else{
	echo "Erro ao criptografar/salvar mensagem.";
}

mysqli_close($conn);


header('location: listar_palavra.php');

?>
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

$sql = "select output from palavra where id = " . $id_cesar;

$query = mysqli_query($conn,$sql) or
				die("erro ao buscar os produtos");
			
			
$linha = mysqli_fetch_array($query);

		
echo "<form action='processa_editar_palavra.php' method='post'>
ID Produto:
<input type='text' value='" . $id_cesar. "' disabled> <br>
Palavra: 
<input type='text' name='output' value='" .$linha["output"]. "'>
<input type='hidden' name='id' value='" . $id_cesar. "'>
</br></br>
<input type='submit' value='editar'></form>";


?>
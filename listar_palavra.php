<?php

$servername = "localhost";
$database = "cesar";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Conexão com o banco, falhou :( " . mysqli_connect_error());
}

$sql = "select id, output from palavra";

$query = mysqli_query($conn,$sql) or
				die("erro ao buscar os produtos");
				
while($linha = mysqli_fetch_array($query)){
	echo "<br>id: " . $linha["id"] . " Palavra:" . $linha["output"] . 
	" <a href=remover_palavra.php?id=" . $linha["id"] . ">Remover:</a>" .
	" <a href=editar_palavra.php?id=" . $linha["id"] . ">Editar:</a>";
}


mysqli_close($conn);


?>
<?php
$nome = $_POST['NomeCliente'];
$senha = $_POST['Senha'];
$strcon = mysqli_connect('localhost','root','','banco_teste1') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$senha')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
?>
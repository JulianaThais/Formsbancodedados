<?php
$produtos = $_POST['produtos'];
$descricao = $_POST['descricao'];
$coduni = $_POST['coduni'];
$marca = $_POST['marca'];
$fornecedor = $_POST['fornecedor'];
$strcon = mysqli_connect('localhost','root','','produtos') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO produtos VALUES ";
$sql .= "('$produtos', '$descricao', '$coduni', '$marca', '$fornecedor')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Produto cadastrado com sucesso!<br>";
?>
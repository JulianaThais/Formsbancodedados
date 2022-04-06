<?php
$CPF = $_POST['CPF'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$mae = $_POST['mae'];
$endereço = $_POST['endereço'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$strcon = mysqli_connect('localhost','root','','clientes') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO clientes VALUES ";
$sql .= "('$CPF', '$nome', '$nascimento', '$mae', '$endereço' , '$email', '$telefone', '$senha')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";

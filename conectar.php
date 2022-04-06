<?php
include_once("conectar.php");
$nome = $_POST['NomeCliente'];
$senha = $_POST['Senha'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$senha')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
?>

use fornecedores;


create table fornecedores(
empresa varchar(20),
cnpj varchar(10)
endereço varchar(20),
telefone varchar(10)
EMAIL varchar(20),

);
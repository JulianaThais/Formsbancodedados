<?php
$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$endereço = $_POST['endereço'];
$telefone = $_POST['telefone'];
$EMAIL = $_POST['EMAIL'];
$strcon = mysqli_connect('localhost','root','','fornecedores') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO fornecedores VALUES ";
$sql .= "('$empresa', '$cnpj', '$endereço', '$telefone', '$EMAIL')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Fornecedor cadastrado com sucesso!<br>";
?>



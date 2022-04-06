<?php
$produtos = $_POST['produtos'];
$data = $_POST['data'];
$coduni = $_POST['coduni'];
$marca = $_POST['marca'];
$fornecedor = $_POST['fornecedor'];
$pagamento = $_POST['pagamento'];



$strcon = mysqli_connect('localhost','root','','vendas') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO vendas VALUES ";
$sql .= "('$produtos', '$data', '$coduni', '$marca', '$fornecedor' , '$pagamento')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Venda cadastrada com sucesso!<br>";




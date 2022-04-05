<?php
include_once('../Model/conexao.php');
include_once('../View/header.php');


$Nome= $_POST['Nome'];
$Descricao= $_POST['Descricao'];
$Tel= $_POST['Telefone'];
echo $Nome;

$sql= "insert into tbempresa(Name_Emp, Descr_Emp, Tel_emp) values('$Nome', '$Descricao' ,$Tel)";
$inserir = mysqli_query($conexao, $sql);
?>

<h3>Cadastrado com sucesso</h3>
<a type="button"  href="../View/Index.php" class="btn btn-warning">Voltar</a>
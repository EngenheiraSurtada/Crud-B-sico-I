<?php
include_once('../Model/conexao.php');
include_once('../View/header.php');

$id= $_GET['id'];

$sql= "DELETE FROM tbempresa WHERE Cod_Emp=$id";

$excluir= mysqli_query($conexao, $sql);

?>

<h3>Excluido com sucesso</h3>
<a type="button"  href="../View/listar.php" class="btn btn-warning">Voltar</a>
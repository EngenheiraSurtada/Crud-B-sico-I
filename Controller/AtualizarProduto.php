<?php

include_once('../View/header.php');

$id= $_POST['id'];
$Name= $_POST['Nome'];
$Descricao = $_POST['descricao'];
$telefone= $_POST['telefone'];

  $sql= "UPDATE tbempresa SET Name_Emp='$Name', Descr_Emp='$Descricao', Tel_emp='$telefone' WHERE Cod_Emp = $id;";

include_once('../Model/conexao.php');
 $atualizar = mysqli_query($conexao, $sql);

?>





    <h3>Atualizado com sucesso</h3>
    <a type="button"  href="../View/listar.php" class="btn btn-warning">Voltar</a>

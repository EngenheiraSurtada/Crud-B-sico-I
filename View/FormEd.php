<?php
$id= $_GET['id'];
include_once('../View/header.php');
?>

    

<form  method="POST" action="../Controller/AtualizarProduto.php">
<div class="container-form">

<h4>Formulário de edição</h4>


<?php

include_once('../Model/conexao.php');
$sql= "SELECT * FROM tbempresa WHERE Cod_Emp= $id";
$buscar = mysqli_query($conexao, $sql);

while($array= mysqli_fetch_array($buscar)){
    $Name_Emp= $array['Name_Emp'];
    $Descr_Emp= $array['Descr_Emp'];
    $Tel_emp= $array['Tel_emp'];
   $id_empresa = $array['Cod_Emp'];
  

  ?>
  <div class="col">
  
<div class="row ml-4">

<label for="InputName">Nome da empresa:</label>
<input type="text" value="<?php echo $Name_Emp?>" name="Nome" id="InputName">
</div>

<!--<div class="row ml-4">

<label for="InputSenha">Senha:</label>
<input type="password"  name="Senha" id="InputSenha">
</div> --->

 
<div class="row ml-4">

<label for="InputDescr">Descrição:</label>
<input type="text" value="<?php echo $Descr_Emp?>" name="descricao" id="InputDescr">
</div>

 
<div class="row ml-4" style="display: none;">


<input type="text" value="<?php echo $id_empresa?>" name="id" id="InputDescr">
</div>

 
<div class="row ml-4">

<label for="InputTel">Telefone:</label>
<input type="text" name="telefone" value="<?php echo $Tel_emp?>" id="InputTel" placeholder="(55) 0000-0000">
</div>
  
 <div class="row ml-4">
 <button type="submit" class="btn btn-primary">Alterar</button>
 </div>
 
  
  </div>
    <?php } ?>
</form>


</body>
</html>

<?php

include_once('header.php');

?>

<form method="post" action="../Controller/Cadastrar.php" >


    <div class="container-form">


    <div class="col">

<div class="row ml-4">

<label for="Nome">Nome da empresa:</label>
<input type="text" name="Nome" id="InputName">
</div>

<div class="row ml-4">

<label for="InputSenha">Senha:</label>
<input type="password" name="Senha" id="InputSenha">
</div>

 
<div class="row ml-4">

<label for="Descricao">Descrição:</label>
<input type="text" name="Descricao" id="InputDescr">
</div>

 
<div class="row ml-4">

<label for="Telefone">Telefone:</label>
<input type="text" name="Telefone" id="InputTel" placeholder="(55) 0000-0000">
</div>
<button type="submit" class="btn btn-primary ml-5"> Cadastrar</button>

</div>
</div>

  

  

</form>




  
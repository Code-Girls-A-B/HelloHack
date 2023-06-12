<?php

session_start();
require "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputMensagem'])){
   
   $nome = $_POST['inputNome'];
   $email = $_POST['inputEmail'];
   $mensagem =  $_POST['inputMensagem'];
   
   inserirContato($nome,$email,$mensagem);

   header('Location:../HTML/contato.php');
   die();

}

?>
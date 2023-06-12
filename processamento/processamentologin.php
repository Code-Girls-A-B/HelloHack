<?php

session_start();
require "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputEmail']) &&
   !empty($_POST['inputSenha'])){
   
   $nome = $_POST['inputNome'];
   $email = $_POST['inputEmail'];
   $senha =  $_POST['inputSenha'];
   
   CadastrarUsuario($nome,$email,$senha);

   header('Location:../HTML/login.php');
   die();

}

?>
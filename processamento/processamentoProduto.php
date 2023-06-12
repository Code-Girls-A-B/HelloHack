<?php

session_start();
require "funcoesBD.php";

//Cadastro de Cliente
if(!empty($_POST['inputNome']) && !empty($_POST['inputEmail']) 
&& !empty($_POST['inputEndereco']) && !empty($_POST['inputCidade']) 
&& !empty($_POST['inputEstado']) && !empty($_POST['inputCep']) 
&& !empty($_POST['inputNomeCartao']) && !empty($_POST['inputNumCartao']) 
&& !empty($_POST['inputMesVenc']) && !empty($_POST['inputAnoVenc']) 
&& !empty($_POST['inputCvv'])  ){
   
   $nome = $_POST['inputNome'];
   $email = $_POST['inputEmail'];
   $endereco =  $_POST['inputEndereco'];
   $cidade = $_POST['inputCidade'];
   $estado = $_POST['inputEstado'];
   $cep =  $_POST['inputCep'];
   $nome_cartao = $_POST['inputNomeCartao'];
   $num_cartao = $_POST['inputNumCartao'];
   $mes_vencimento =  $_POST['inputMesVenc'];
   $ano_vencimento = $_POST['inputAnoVenc'];
   $cvv = $_POST['inputCvv'];
   
   inserirProduto($nome,$email,$endereco,$cidade,$estado,$cep,$nome_cartao,$num_cartao,$mes_vencimento,$ano_vencimento,$cvv);

   header('Location:../HTML/produtoform.php');
   die();

}

?>
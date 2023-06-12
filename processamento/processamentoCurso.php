<?php
// cadastro curso

session_start();
require "funcoesBD.php";

if (!empty($_POST['inputNomeCurso']) && !empty($_POST['inputNome']) 
&& !empty($_POST['inputEmail']) && !empty($_POST['inputCpf']) 
&& !empty($_POST['inputNumCelular']) && !empty($_POST['selectPagamento'])){

    $nomeCurso = $_POST['inputNomeCurso'];
    $nomeAluno = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $cpf = $_POST['inputCpf'];
    $numeroCelular = $_POST['inputNumCelular'];
    $pagamento = $_POST['selectPagamento'];
   
    inserirCurso($nomeCurso,$nomeAluno,$email,$cpf,$numeroCelular,$pagamento);

    header('location: ../HTML/cursos.php');
    die();

}   

?>
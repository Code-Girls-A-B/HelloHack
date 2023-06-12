<?php
function conectarBD()
{
  $conexao = mysqli_connect("localhost","root","","hellohack");
  return($conexao);
}

function CadastrarUsuario($nome,$email,$senha)
{
  $conexao = conectarBD();
  $consulta = "INSERT INTO cadastro_usuario(nome,email,senha) 
  VALUES ('$nome','$email','$senha')";
  mysqli_query($conexao,$consulta);
}

function retornaUsuario()
{
  $conexao = conectarBD();
  $consulta = "SELECT * FROM cadastro_usuario";
  $listaUsuario = mysqli_query($conexao,$consulta);
  return $listaUsuario;
}

function inserirContato($nome,$email,$mensagem)
{
  $conexao = conectarBD();
  $consulta = "INSERT INTO contato(nome,email,mensagem) 
  VALUES ('$nome','$email','$mensagem')";
  mysqli_query($conexao,$consulta);
}

function retornaContato()
{
  $conexao = conectarBD();
  $consulta = "SELECT * FROM contato";
  $listaContato = mysqli_query($conexao,$consulta);
  return $listaContato;
}

function inserirProduto($nome,$email,$endereco,$cidade,$estado,$cep,$nome_cartao,$num_cartao,$mes_vencimento,$ano_vencimento,$cvv)
{
  $conexao = conectarBD();
  $consulta = "INSERT INTO produto(nome,email,endereco,cidade,estado,cep,nome_cartao,num_cartao,mes_vencimento,ano_vencimento,cvv) 
  VALUES ('$nome','$email','$endereco','$cidade','$estado','$cep','$nome_cartao','$num_cartao','$mes_vencimento','$ano_vencimento','$cvv')";
  mysqli_query($conexao,$consulta);
}

function retornaProduto()
{
  $conexao = conectarBD();
  $consulta = "SELECT * FROM produto";
  $listaProduto = mysqli_query($conexao,$consulta);
  return $listaProduto;
}

function inserirCurso($nomeCurso,$nomeAluno,$email,$cpf,$numeroCelular,$pagamento)
{
  $conexao = conectarBD();
  $consulta = "INSERT INTO curso(nomeCurso,nomeAluno,email,cpf,numeroCelular,pagamento) 
  VALUES ('$nomeCurso','$nomeAluno','$email','$cpf','$numeroCelular','$pagamento')";
  mysqli_query($conexao,$consulta);
}

function retornaCurso()
{
  $conexao = conectarBD();
  $consulta = "SELECT * FROM curso";
  $listacurso = mysqli_query($conexao,$consulta);
  return $listacurso;
}



?>
<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$atual = filter_input(INPUT_POST, 'atual', FILTER_SANITIZE_STRING);
$dateex = filter_input(INPUT_POST, 'dateex', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$casa = filter_input(INPUT_POST, 'casa', FILTER_SANITIZE_STRING);
$apto = filter_input(INPUT_POST, 'apto', FILTER_SANITIZE_STRING);
$vendedor = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_STRING);
$prestador = filter_input(INPUT_POST, 'prestador', FILTER_SANITIZE_STRING);
$fixo = filter_input(INPUT_POST, 'fixo', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);

$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$material = filter_input(INPUT_POST, 'material', FILTER_SANITIZE_STRING);
$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome,endereco,cidade,casa, apto,vendedor,prestador,valor,material,servico,email, created) VALUES ('$nome', '$endereco','$cidade','$casa','$apto','$vendedor','$prestador','$valor','$material','$servico','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cad_usuario.php");
}

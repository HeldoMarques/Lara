
<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
	<title> FORMULARIO DE CADASTROS DE O.S ELETRICA LARA </title>
  <link rel="stylesheet" href="stilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/Faviconn.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="ststilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
</head>
<div class="container">
<body p style="background-color:orange;"></p>  
<form method="POST" action="proc_cad_usuario.php " class="col-s12">
<div class="container"> 
  <div class="alert  btn-dark">  
 <center> <h1 style="font-size:400%; color:orange;">ELETRICA LARA</h1></center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
        
	<br>	<br>

    <div class="form-row">
    
    <div class="col-6">
  
     <p class="text-warning" > <B> NOME:</B>  <input type="text"  class="form-control is-valid" placeholder="Nome do Cliente" name="nome"   maxlength="7" >
    </div>
    
    <div class="col-3">
   
    <p class="text-warning"><B>  DATA ATUAL:</B>  <input type="text" class="form-control is-valid" placeholder="Data da solicitação" name="atual" maxlength="12">
    </div>
    <div class="col-3" >
    <p class="text-warning">

    <B> DATA DE EXECUÇÃO: </B> <input type="text" class="form-control is-valid" placeholder="Data da Execução" name="dateex"  maxlength="3"> 
    </div>
    <div class="col-6">
     EMAIL: <input type="email" class="form-control is-valid" placeholder="Email do Cliente" name="email"  maxlength="50"> 
    </div>
    <div class="col-3">
    <p class="text-warning"> <B> FIXO:</B>  <input type="text" class="form-control is-valid" placeholder="Informe o numero do telefone Fixo  " name="fixo"  maxlength="50"> 
    </div><div class="col-3">
    <p class="text-warning"><B>  CELULAR:</B>  <input type="email" class="form-control is-valid" placeholder="Informe o numero do telefone celular" name="celular"  maxlength="50"> 
    </div>


    <div class="col-12">

    <p class="text-warning"><B> ENDEREÇO:</B><textarea  type="text" class="form-control is-valid" placeholder="Infor o endereço coreto do cliente"  name="endereco" maxlength="100"></textarea>  
    </div>
   
    <div class="col-6">
    <p class="text-warning"><B> CIDADE:</B> <input  type="text" class="form-control is-valid" placeholder="Cidade do cliente"  name="cidade" maxlength="100"></input>  
    </div>
   

    <div class="col-3">
    <p class="text-warning"><B>  Nº CASA:</B> <input type="text" class="form-control is-valid" placeholder=" Informe o numero da Casa "  name="casa" maxlength="4">
    </div>

    <div class="col-3">
    <p class="text-warning"><B>  Nº APARTAMENTO:</B> <input type="text" class="form-control is-valid" placeholder=" Informe o numero do apto "  name="apto" maxlength="4">
    </div>
    <div class="col-3">
    <p class="text-warning"><B>   VENDEDOR:</B> <input type="text" class="form-control is-valid" placeholder=" Informe o nome do vendedor" name="vendedor" maxlength="15">
    </div>
    <div class="col-4">
    <p class="text-warning"><B>  TECNICO:</B> <input type="text" class="form-control is-valid" placeholder="Prestador de Serviço" name="prestador" maxlength="15">
    </div>
    <div class="col-4">
    <p class="text-warning"><B>  VALOR DA O.S:</B> <input type="text" class="form-control is-valid" placeholder="Qual o Valor do serviço" name="valor" maxlength="20">
    </div>
    <div class="col-12">
    <p class="text-warning"><B>  MATERIAL:</B>   <textarea  input type="text" class="form-control is-valid" placeholder="Descrição dos Produtos " name="material" maxlength="1000"></textarea> 
    </div>
    <div class="col-12">
    <p class="text-warning"><B>   SEVIRÇOS : </B> <textarea  input type="text"  class="form-control needs-validation" placeholder="Informe quais serviços a serem Excutados " name="servico" maxlength="1000"></textarea> 
    </div>
    </div>
<p>
<CEnter>
<div class="container"> 
	
	<button type="submit" class="btn btn-success">SALVAR .O.S</button>
	<a href="cad_usuario.php" class="btn btn-success" role="button">+ NOVO CADASTRO</a>
	<a href="index.php" class="btn btn-success" role="button">RELATORIO DAS O.S</a>	
	<button type="reset" class="btn btn-danger">LIMPAR CAMPOS </button>	
	<a href="https://www.google.com/" class="btn btn-danger" role="button">PESQUISAR  GOOGLE</a>



<a href="http://servicos.receita.fazenda.gov.br/Servicos/cnpjreva/Cnpjreva_Solicitacao.asp?cnpj=" class="btn btn-danger" role="button">PERQUISAR CNPJ </a>





</form>

</body>

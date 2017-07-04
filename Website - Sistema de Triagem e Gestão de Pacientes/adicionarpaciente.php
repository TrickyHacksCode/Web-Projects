<?php
session_start();

if(isset($_POST['adicionar'])){

      $nome = $_POST['nome'];
      $sexo = $_POST['sexo'];
      $morada = $_POST['morada'];
      $localidade = $_POST['localidade'];
      $distrito = $_POST['distrito'];
      $contacto = $_POST['contacto'];
      $email = $_POST['email'];
      $datadenascimento = $_POST['datadenascimento'];
      $nif = $_POST['nif'];
      
      
$image= addslashes($_FILES['image']['tmp_name']);
$image= file_get_contents($image);
$image= base64_encode($image);
$mysqli = NEW MySQLi('localhost','root','','triafct');
$mysqli->query("INSERT INTO `pacientes`(`paciente`, `nome`, `sexo`, `morada`, `localidade`, `distrito`, `contacto`,`email`,`datadenascimento`,`nif`,`fotografia`) VALUES ('0', '$nome', '$sexo', '$morada', '$localidade', '$distrito','$contacto','$email','$datadenascimento','$nif','$image')");
$_SESSION['nifpaciente'] = $nif;
header('Location:triagem2paciente.php');
}


?>
<html >
<head>
<meta  charset="utf-8">
<title>Staff - Administra&ccedil;&atilde;o</title>


<?php 
 include "style.php";
?>


</head>


<body>


<?php 
include "slidemenu.php";
?>

<table  align="center"  height="630px">
<tr><td>
<br>


<div class="container2" align="center">
<br><p><a>O NIF n&atilde;o se encontra registado!	</a></p>
<br>

<br><p><a>Registar Novo Paciente</a></p>
<form action="adicionarpaciente.php" method="post" enctype="multipart/form-data">
<br><br>
<div class="form-input"><input type="text" name ="nome" placeholder="Nome"></div> 
<div class="form-input"><input type="text" name ="sexo" placeholder="Sexo"></div>
<div class="form-input"><input type="text" name ="morada" placeholder="Morada"></div>
<div class="form-input"><input type="text" name ="localidade" placeholder="Localidade"></div>
<div class="form-input"><input type="text" name ="distrito" placeholder="Distrito"></div>
<div class="form-input"><input type="text" name ="contacto" placeholder="Contacto"></div>
<div class="form-input"><input type="text" name ="email" placeholder="Email"></div>
<div class="form-input"><input type="text" name ="datadenascimento" placeholder="Data de Nascimento"></div>
<div class="form-input"><input type="text" name ="nif" placeholder="NIF"></div>

<div class="form-input"><input type="file" name="image"></div><br>
<input type="submit" name="adicionar" value="Adicionar" class="login">
</form>


</div>
</td></tr>
</table>
<br>

</body>

<footer>
 &copy; Carolina Conduto, Ricardo Bernardino e Tiago Oliveira. FCT-UNL
</footer>

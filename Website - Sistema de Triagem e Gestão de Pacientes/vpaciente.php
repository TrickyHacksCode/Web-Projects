<html >
<head>
<meta  charset="utf-8">
<title>Login</title>


<?php 
session_start();

 include "style.php";
?>


</head>

<body>

<?php 
include "slidemenu.php";

?>
<br><br><br>
<table  align="center"  height="575px">
<tr><td>


<div class="containerpaciente">
<?php 
$mysqli = NEW MySQLi('localhost','root','','triafct');
$nif= $_SESSION['nifpaciente'];
$verimg= $mysqli->query("SELECT * FROM pacientes WHERE nif='$nif'");
$data = mysqli_fetch_array($verimg);
$id = $data['paciente'];
$nome = $data['nome'];
$sexo = $data['sexo'];
$morada = $data['morada'];
$localidade = $data['localidade'];
$distrito = $data['distrito'];
$contacto = $data['contacto'];
$email = $data['email'];
$datadenascimento = $data['datadenascimento'];


echo '<img height="300" alt="Login" width="300" src="data:image;base64,'.$data['fotografia'].'">'; ?>

<form action="triagem2paciente.php" method="post" enctype="multipart/form-data">

<div class="form-input"><input type="text" name ="nome" placeholder="<?php if(isset($nome)){echo"$nome";} ?>"></div> 
<div class="form-input"><input type="text" name ="sexo" placeholder="<?php if(isset($sexo)){echo"$sexo";} ?>"></div>
<div class="form-input"><input type="text" name ="morada" placeholder="<?php if(isset($morada)){echo"$morada";} ?>"></div>
<div class="form-input"><input type="text" name ="localidade" placeholder="<?php if(isset($localidade)){echo"$localidade";} ?>"></div>
<div class="form-input"><input type="text" name ="distrito" placeholder="<?php if(isset($distrito)){echo"$distrito";} ?>"></div>
<div class="form-input"><input type="text" name ="contacto" placeholder="<?php if(isset($contacto)){echo"$contacto";} ?>"></div>
<div class="form-input"><input type="text" name ="email" placeholder="<?php if(isset($email)){echo"$email";} ?>"></div>
<div class="form-input"><input type="text" name ="datadenascimento" placeholder="<?php if(isset($datadenascimento)){echo"$datadenascimento";} ?>"></div>
<div class="form-input"><input type="text" name ="nif" placeholder="<?php if(isset($nif)){echo"$nif";} ?>"></div>


<input type="submit" value="Criar Novo Processo" class="login">
</form>
</div></td>
</tr>
</table>


<?php
include "footer.php"; 
?>

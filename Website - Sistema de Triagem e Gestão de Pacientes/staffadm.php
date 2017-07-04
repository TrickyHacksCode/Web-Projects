<?php
session_start();
include "style.php";

?>
<html >
<head>
<meta  charset="utf-8">
<title>Staff - Administra&ccedil;&atilde;o</title>
</head>
<body style="height:763px">

<?php 
include "slidemenu.php";
?>

<table  align="center"  >
<tr><td>
<br>



<div class="containeradm2" align="center">
<?php
include "connectlogin.php";
if(isset($_POST['eliminar'])){

		     $nome = $_POST['nome'];
     $username = $_POST['username'];
     
    
	$insquery = 'DELETE FROM utilizadores WHERE (username = :username or nome = :nome)';

	$insresult = $con->prepare($insquery); 	
	$insexec = $insresult->execute(array(":username"=>$username,":nome"=>$nome));
	echo"<a><b>Aviso:</b> Eliminado!</a>";}
    


else if(isset($_POST['adicionar'])){

$nome = $_POST['nome'];
     $morada = $_POST['morada'];
     $contacto = $_POST['contacto'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $privilegio = $_POST['privilegio'];
     $insquery = "INSERT INTO `utilizadores`(`id`, `nome`, `morada`, `contacto`, `username`, `password`, `privilegio`) VALUES (0,:nome,:morada,:contacto,:username,:password,:privilegio)";
     $insresult = $con->prepare($insquery); 	
     $insexec = $insresult->execute(array(":nome"=>$nome, ":morada"=>$morada, ":contacto"=>$contacto, ":username"=>$username, ":password"=>$password, ":privilegio"=>$privilegio));
     echo"<a><b>Aviso:</b> Adicionado!</a>";
}


?>


<br><br><p><a>Por Nome:</a></p>
<form action="staffadm.php" method="post">
<br><br>
<div class="form-input"> <input type="text" name="nome"></div>
<p><a>Por Username:</a></p><br><br>
<div class="form-input"> <input type="text" name="username"><br></div>
<input type="submit" name="eliminar" value="Eliminar" class="login">
</form>


<br><p><a>Adicionar Utilizador</a></p>
<form action="staffadm.php" method="post">
<br><br>
<div class="form-input"> <input type="text" name="nome" placeholder="Nome"></div>
<div class="form-input"> <input type="text" name="morada" placeholder="Morada"></div>
<div class="form-input"> <input type="text" name="contacto" placeholder="Contacto"></div>
<div class="form-input"> <input type="text" name="username" placeholder="Username"></div>
<div class="form-input"> <input type="text" name="password" placeholder="Password"></div>
<div class="form-input"> <input type="text" name="privilegio" placeholder="Privilegio(2-Enf,3-Med,4-Admin)"></div>
<input type="submit" name="adicionar" value="Adicionar" class="login">
</form>


</div>
</td></tr>
</table>
<br>
</body>

<?php
include "footer.php";
?>



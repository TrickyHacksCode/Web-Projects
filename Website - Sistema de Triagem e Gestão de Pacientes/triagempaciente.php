<?php
session_start();
include "connectlogin.php"; 
       
if(isset($_POST['procurar'])){
$mysqli = NEW MySQLi('localhost','root','','triafct');
$nif= $mysqli->real_escape_string($_POST['valoraprocurar']);
$select = $con->prepare("SELECT * FROM pacientes WHERE nif='$nif'");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$data=$select->fetch();
if($data['nif']!= $nif)
{
  header('Location:adicionarpaciente.php');
}
else
{
  		$_SESSION['nifpaciente']=$nif;
  		header('Location:vpaciente.php');
}
}
       
         
?>
<html>
<head>
<meta  charset="utf-8">
<title>Search User</title>




</head>

<body >

<?php 
include "style.php"; 
include "slidemenu.php";

?>


<table  align="center"  height="650px" >
<tr><td>

<div class="containerListaEspera">




<form method="post" action="triagempaciente.php"> 
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><p><a>Procurar Por Nif:</a></p>
<br><br>
<div class="form-input"> <input type="text" name="valoraprocurar"></div>
<input type="submit" name="procurar" value="procurar" class="login">
</form>

</div>
</td></tr>
</table>
</body>

<?php 
include "footer.php";
?>

</html>
  
<?php
session_start();
$mysqli = NEW MySQLi('localhost','root','','triafct');
if(isset($_SESSION['medpaciente'])){
$resultSet1 = $mysqli->query("SELECT * FROM pacientes WHERE nif = '".$_SESSION['medpaciente']."'");
$row1 = mysqli_fetch_array($resultSet1);
$nome = $row1['nome'];
$nif = $row1['nif'];
$email = $row1['email'];
$datadenascimento = $row1['datadenascimento'];
$sexo = $row1['sexo'];
}
else{
//SELECCIONAR DADOS DO PACIENTE
$resultSet2 = $mysqli->query("SELECT * FROM pacientes WHERE nif = (SELECT nif FROM listadeespera WHERE tatendimento = (SELECT MIN(tatendimento) FROM listadeespera )) ");
$row2 = mysqli_fetch_array($resultSet2);
$nome = $row2['nome'];
$nif = $row2['nif'];
$email = $row2['email'];
$datadenascimento = $row2['datadenascimento'];
$sexo = $row2['sexo'];
//ELIMINAR DA LISTA DE ESPERA
$mysqli->query("DELETE FROM listadeespera WHERE nif = $nif ");
}
if(isset($_POST['adicionar'])){
$sintomas = $_POST['sintomas'];
$infopaciente = $_POST['reclamacoesdopaciente'];
$causas = $_POST['causas'];
$medi= $_POST['medi'];
$medcom = $_POST['diagnostico'];
$mysqli->query("INSERT INTO `exames` (`nif`, `sintomas`, `infopaciente`, `causas`, `med`, `medcom`, `consultemp`) VALUES ('$nif','$sintomas','$infopaciente','$causas','$medi','$medcom',now())");

$email_to = $email;
$email_subject = "Hospital Tria Fct";
$email_from = "td.oliveira@campus.fct.unl.pt";

function clean_string($string) {

	 $bad = array("content-type","bcc:","to:","cc:","href");

	 return str_replace($bad,"",$string);

}

	

	$email_message .= "First Name: ".clean_string($nome)."\n";

	$email_message .= "Email: ".clean_string($email_from)."\n";

	$email_message .= "Sintomas: ".clean_string($sintomas)."\n";
	
	$email_message .= "Medicação Receitada: ".clean_string($medi)."\n";
	
	$email_message .= "Diagnóstico Final: ".clean_string($medcom)."\n";

	

	



$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_message, $headers);  

unset($_SESSION['medpaciente']);
header('Location:index.php');
}
include "style.php";
include "slidemenu.php";
?>


<table  align="center"  height="630px" id="table2">
<tr><td>



<div class="containerconsulta" align="center">
<br>
<form method="post" action="verexames.php">
<a>Dados do Paciente:</a><br><br><br>
<div class="form-input"><input type="text" name ="nome" value="<?php if(isset($nome)){echo"$nome";} ?>">     <input type="text" name ="sexo" value="<?php if(isset($datadenascimento)){echo"$datadenascimento";} ?>"></div><br><br> 
<div class="form-input"><input type="text" name ="datadenascimento" value="<?php if(isset($sexo)){echo"$sexo";} ?>">     <input type="text" name ="nif" value="<?php if(isset($nif)){echo"$nif";} ?>"></div><br><br>
<div class="form-input"><input type="text" name ="email" value="<?php if(isset($email)){echo"$email";} ?>"></div><br>
<input type="submit" name="ver" value="Ver Hist&oacute;rico" class="login">
</form>
<br><br>
<a>Relat&oacute;rio:</a><br><br><br><br><br>
<form method="post" action="abrirconsulta.php">

<div class="form-input"><input type="text3" name ="sintomas" placeholder="Sintomas"></div><br><br><br>

<div class="form-input"><input type="text3" name ="reclamacoesdopaciente" placeholder="Reclama&ccedil;&atilde;o (Paciente)"></div><br><br><br>

<div class="form-input"><input type="text3" name ="causas" placeholder="Poss&iacute;veis Causas"></div><br><br><br>

<div class="form-input"><input type="text3" name ="medi" placeholder="Medica&ccedil;&atilde;o Receitada"></div><br><br><br>

<div class="form-input"><input type="text3" name ="diagnostico" placeholder="Diagn&oacute;stico Final(coment&aacute;rios)"></div><br><br><br>


<input type="submit" name="adicionar" value="Finalizar Consulta" class="login"><br><br>
<a></a><br>
</form>
</div>
</td>
</tr>
</table>

<?php
include "footer.php";
?>

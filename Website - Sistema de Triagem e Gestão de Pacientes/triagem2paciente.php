<?php 

try{
  $con = new PDO('mysql:host=localhost;dbname=triafct;charset=utf8mb4', 'root', '');
}
catch(PDOException $e){
   echo "error".$e->getMessage();
}
$class=0;
session_start();
if(isset($_POST['adicionar'])){
include"cart.php";
}
if(isset($_POST['registar'])){
$class = $_POST['classificacao'];

if($class == 1){
$tempo = 0;
}
else if($class == 2){
$tempo = 1000;
}
else if($class == 3){
$tempo = 6000;
}
else if($class == 4){
$tempo= 12000;
}
else if($class == 5){
$tempo= 24000;
} 	

$insquery = "INSERT INTO `listadeespera`(`id`, `nif`, `nivel`, `tchegada`, `tatendimento`) VALUES (0,'{$_SESSION['nifpaciente']}','$class',now(),now() + '$tempo')";
$insresult = $con->prepare($insquery); 
$insexec = $insresult->execute();
unset($_SESSION['nifpaciente']);
header('Location:index.php');
}

?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<title>Triagem</title>
</head>

<body>
<?php
include "style.php";
include "slidemenu.php";
?>
<table  align="center"  height="630px" id="table2">
<tr><td>



<div class="container2" align="center">
<br>

<form method="post" action="triagem2paciente.php">
<a>Verifica(Sim/N&atilde;o):</a><br><br>
<a>Dificuldades      </a><br><input type="radio" name ="dificuldade" value="1"><input type="radio" name ="dificuldade" value="0"><br>
<a>Problema      </a><br><input type="radio" name ="problema" value="1"><input type="radio" name ="problema" value="0"><br>
<a>Fracturas      </a><br><input type="radio" name ="fractura" value="1"><input type="radio" name ="fractura" value="0"><br>
<a>Tonturas      </a><br><input type="radio" name ="tonturas" value="1"><input type="radio" name ="tonturas" value="0"><br>
<a>Hemorragia      </a><br><input type="radio" name ="hemorragia" value="1"><input type="radio" name ="hemorragia" value="0"><br>
<a>Azia      </a><br><input type="radio" name ="azia" value="1"><input type="radio" name ="azia" value="0"><br>
<a>Vomitos      </a><br><input type="radio" name ="vomitos" value="1"><input type="radio" name ="vomitos" value="0"><br><br>
<a>Temperatura      </a><input type="text2" name ="temperatura"><br>
<a>Glicemia      </a><input type="text2" name ="glicemia"><br>
<input type="submit" name="adicionar" value="Classificar" class="login"><br><br>
<a><?php if ($class==1){
	echo 'Pulseira vermelha';
}

else if ($class==2){
	echo 'Pulseira laranja';
}

else if ($class==3){
	echo 'Pulseira amarela';
}

else if ($class==4){
	echo 'Pulseira verde';
}

else if ($class==5){
	echo 'Pulseira azul';
}
else{
	echo 'Nenhuma pulseira atribuida';
}
?>
</a><br>

<br><br>

<a>Manter Classifica&ccedil;&atilde;o </a><input type="radio" name="classificacao" value="<?php if(isset($class)){echo "$class";} ?>"> <br>
<p><b><a>Mudar para:</a></b></p><br>
<a>Vermelho </a><input type="radio" name="classificacao" value="1"> <br>
<a>Laranja </a><input type="radio" name="classificacao" value="2"> <br>
<a>Amarelo </a><input type="radio" name="classificacao" value="3"> <br>
<a>Verde </a><input type="radio" name="classificacao" value="4"> <br>
<a>Azul </a><input type="radio" name="classificacao" value="5"> <br><br>
<input type="submit" name="registar" value="Registar" class="login"><br><br><br><br>
</form><br><br>
</div></td></tr></table>
<?php
include "footer.php";
?>

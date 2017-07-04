<html>
<head>
<meta  charset="utf-8">
<title>Lista de Utilizadores</title>

<script src="sorttable.js"></script>

<?php
session_start();
include "style.php";
?>


</head>

<body>

<?php 
include "slidemenu.php";
?>

<table  align="center"  height="650px" >
<tr><td>


<div class="containerconsulta">
<br><br>
<form method="post" action="verexames.php"> 
<br><br><p><a>Procurar Por Nif:</a></p>
<br><br>
<div class="form-input"> <input type="text" name="nif"></div>
<input type="submit" name="procurar" value="procurar" class="login">
</form>
<b><h1 align="center" style="color:lime">Lista de Consultas</h1></b><br>
<table  align="center"  height="290px">
<tr><td>

 <table  cellspacing="0" cellpadding="0" border="0" width="800px" >
 <tr>
  <td>
  <div style="width:800px; height:250px; overflow:auto;">
   <table  class="table2" cellspacing="0" cellpadding="1px" border="1" width="800px" >
     <tr style="color:white;background-color:grey">
        <th style="width:100px">NIF</th>
        <th style="width:100px">Sintomas</th>
        <th style="width:100px">Info-Paciente</th>
        <th style="width:100px">Poss&iacute;veis Causas</th>
        <th style="width:100px">Medica&ccedil;&atilde;o Receitada</th>
        <th style="width:100px">Diagn&oacute;stico</th>
        <th style="width:100px">Data</th>
      </tr>
      <?php
        if(isset($_POST['ver'])){
           $_SESSION['medpaciente'] = $_POST['nif'];
           $nif = $_POST['nif'];
		   $mysqli = NEW MySQLi('localhost','root','','triafct');

		$resultSet = $mysqli->query("SELECT * FROM exames WHERE nif = '$nif' ORDER BY consultemp DESC");
        if($resultSet->num_rows != 0){

			while($rows = $resultSet->fetch_assoc())
			{
				$nif = $rows['nif'];
				$sintomas = $rows['sintomas'];
				$info = $rows['infopaciente'];
				$causas = $rows['causas'];
				$med = $rows['med'];
				$diagnostico = $rows['medcom'];
				$data = $rows['consultemp'];
				
                
				echo"
				     <tr>
				     <th>$nif</th>
				     <th>$sintomas</th>
				     <th>$info</th>
				     <th>$causas</th>
				     <th>$med</th>
				     <th>$diagnostico</th>
				     <th>$data</th>
				     </tr>"; 	
			}
	    }	

		else{

 				echo"No Results";
 
}
}

        if(isset($_POST['procurar'])){
        $nif = $_POST['nif'];
		$mysqli = NEW MySQLi('localhost','root','','triafct');

		$resultSet = $mysqli->query("SELECT * FROM exames WHERE nif = '$nif' ORDER BY consultemp DESC");
        if($resultSet->num_rows != 0){

			while($rows = $resultSet->fetch_assoc())
			{
				$nif = $rows['nif'];
				$sintomas = $rows['sintomas'];
				$info = $rows['infopaciente'];
				$causas = $rows['causas'];
				$med = $rows['med'];
				$diagnostico = $rows['medcom'];
				$data = $rows['consultemp'];
				
                
				echo"
				     <tr>
				     <th>$nif</th>
				     <th>$sintomas</th>
				     <th>$info</th>
				     <th>$causas</th>
				     <th>$med</th>
				     <th>$diagnostico</th>
				     <th>$data</th>
				     </tr>"; 	
			}
	    }	

		else{

 				echo"No Results";
 
}
}
?>

   </table>
   </div>   
  </td>
 </tr>
</table>
</td></tr>
</table>
<div>
</div>
</div>
</td></tr>
</table>
<?php 
include "footer.php";
?>
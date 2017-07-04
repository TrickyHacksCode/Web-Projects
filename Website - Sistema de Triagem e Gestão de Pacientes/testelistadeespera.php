<html>
<head>
<meta  charset="utf-8">
<title>Lista de Espera</title>


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


<div class="containerlistautili">
<br><br>

<b><h1 align="center" style="color:lime">Lista de Espera</h1></b><br>
<table  align="center"  height="290px">
<tr><td>

 <table  cellspacing="0" cellpadding="0" border="0" width="300px" >
 <tr>
  <td>
  <div style="width:510px; height:250px; overflow:auto;">
   <table  class="table2" cellspacing="0" cellpadding="1px" border="1" width="490px" >
     <tr style="color:white;background-color:grey">
        <th style="width:100px">NIF</th>
        <th style="width:100px">Hora de Chegada</th>
        <th style="width:100px">Hora de Atendimento</th>
        <th style="width:100px">N&iacute;vel</th>
        <th style="width:100px">Ordem de Atendimento</th>
      </tr>
      <?php

		$mysqli = NEW MySQLi('localhost','root','','triafct');

		$resultSet = $mysqli->query("SELECT * FROM listadeespera ORDER BY tatendimento ASC, nivel DESC");

		if($resultSet->num_rows != 0){
            $ordem = 0;
			while($rows = $resultSet->fetch_assoc())
			{
				$nif = $rows['nif'];
				$tatendimento = $rows['tatendimento'];
				$tchegada = $rows['tchegada'];
				$nivel = $rows['nivel'];
				$ordem = $ordem + 1;
				echo"
				     <tr>
				     <th>$nif</th>
				     <th>$tchegada</th>
				     <th>$tatendimento</th>
				     <th>$nivel</th>
				     <th>$ordem</th>
				    </tr>"; 	
			}
	    }	

		else{

 				echo"No Results";
 
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
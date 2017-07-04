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


<div class="containerlistautili">
<br><br>

<b><h1 align="center" style="color:lime">Lista de Utilizadores</h1></b><br>
<table  align="center"  height="290px">
<tr><td>

 <table  cellspacing="0" cellpadding="0" border="0" width="300px" >
 <tr>
  <td>
  <div style="width:510px; height:250px; overflow:auto;">
   <table  class="table2" cellspacing="0" cellpadding="1px" border="1" width="490px" >
     <tr style="color:white;background-color:grey">
        <th style="width:100px">Username</th>
        <th style="width:100px">Nome</th>
        <th style="width:100px">ID</th>
        <th style="width:100px">Privil&eacute;gio</th>
      </tr>
      <?php

		$mysqli = NEW MySQLi('localhost','root','','triafct');

		$resultSet = $mysqli->query("SELECT * FROM utilizadores ORDER BY privilegio");

		if($resultSet->num_rows != 0){

			while($rows = $resultSet->fetch_assoc())
			{
				$nome = $rows['nome'];
				$username = $rows['username'];
				$tipo = $rows['privilegio'];
				$id = $rows['id'];
                if($tipo == 4)
                 {$priv = 'Administrador';}
                else if($tipo == 3)
                {$priv = 'M&eacute;dico';}
                else
                {$priv = 'Enfermeiro';}

				echo"
				     <tr>
				     <th>$username</th>
				     <th>$nome</th>
				     <th>$id</th>
				     <th>$priv</th></tr>"; 	
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
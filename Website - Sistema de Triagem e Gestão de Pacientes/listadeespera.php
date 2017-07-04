<?php
session_start();
?>
<html >
<head>
<meta  charset="utf-8">
<title>Lista de Espera 	</title>


<?php 
  include "style.php";
?>


</head>

<body>

<?php 
include "slidemenu.php";
?>

<table  align="center"  >
<tr><td>


<div class="containerListaEspera">
<br><br>

<b><h1 align="center" style="color:lime">Lista de Espera</h1></b><br>
<table  align="center"  height="290px">
<tr><td>

 <table  cellspacing="0" cellpadding="0" border="0" width="300px" >
 <tr>
  <td>
   <table cellspacing="0" cellpadding="1px" border="1" width="475px" >
     <tr style="color:white;background-color:grey">
        <th style="width:120px">Hora de Chegada</th>
        <th style="width:120px">N&iacute;vel</th>
        <th style="width:120px">Tempo Limite</th>
        <th style="width:120px">Ordem de Atendimento</th>
     </tr>
   </table>
  </td>
 </tr>
 
<tr>
<td>
   <div style="width:493px; height:187px; overflow:auto;">
     <table cellspacing="0" cellpadding="1px" border="1" width="475px" >
       <tr>
         <td style="width:120px">new item</td>
         <td style="width:120px">new item</td>
         <td style="width:120px">new item</td>
         <td style="width:120px">new item</td>
       </tr>
       <tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
          <tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
       <tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
<tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
<tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
<tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
<tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
          <tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>   
       <tr>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
         <td>new item</td>
       </tr>
     </table>  
   </div>
   <br>
   <br>
   <table align="center" height="100px" style="text-align:center" >
				<tr> <td  colspan="5" width="100%"><a style="text-align:center">Tempo M&eacute;dio de Atendimento</a></td></tr>
				<tr>
					<td bgcolor="#F80101" width="20%"> Emerg&ecirc;ncia </td>
					<td bgcolor="#FF6600" width="20%"> Muito Urgente </td>
					<td bgcolor="yellow" width="20%"> Urgente </td>
					<td bgcolor="green" width="20%"> Pouco Urgente </td>
					<td bgcolor="blue" width="20%"> N&atilde;o Urgente </td>
				</tr>
				<tr>
					<td><a>23</a></td>
					<td><a>23</a></td>
					<td><a>23</a></td>
					<td><a>23</a></td>
					<td><a>23</a></td>
				</tr>
			</table>
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
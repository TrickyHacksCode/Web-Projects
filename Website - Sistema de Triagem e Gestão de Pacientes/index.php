<?php
session_start();
?>
<html>
<head>
<meta  charset="utf-8">
<title>TriaFCT</title>

<?php 
 include "style.php";
?>

</head>

<body>

<?php 

include "slidemenu.php";

?>

<table  align="center"  height="630px">
<tr><td><div class="containerlogin">
<a><h1><br><br><br><br><?php 
if(isset($_SESSION['username'])){ echo 'Bem-Vindo, '.$_SESSION['username'];}
else{ echo 'Plataforma TriaFct ';} ?></h1></a>
</div></td></tr>
</table>

<?php
include "footer.php"; 
?>


<?php
session_start();
include "connectlogin.php";

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
 
  $select = $con->prepare("SELECT * FROM utilizadores WHERE username='$username' AND password='$password'");
  $select->setFetchMode(PDO::FETCH_ASSOC);
  $select->execute();
  $data=$select->fetch();
 	if($data['username']!= $username and $data['password']!= $password)
 	{
    	 header('Location:badlogin.php');
 	}
 	else
 	{
   		$_SESSION['username']=$data['username'];
   		$_SESSION['privilegio']=$data['privilegio']; 
   		header('Location:index.php');	
 	}
}
include "style.php";
?>

<html >
<head>
<meta  charset="utf-8">
<title>Login</title>



</head>

<body>

<?php 
include "slidemenu.php";
?>

<table  align="center"  height="630px">
<tr><td>
<div class="containerlogin">
<img src="logn.png" alt="Login">

<form method="post">
<div class="form-input"><input type="text" name ="username" placeholder="Username"></div> <br><br>
<div class="form-input"><input type="password" name ="password" placeholder="Password"></div><br>
<input type="submit" value="LOGIN" name="submit" class="login"><br>
<a href="contactos.php">Esqueceu a Password?</a>

</form>
</div>


</td></tr>
</table>

<?php
include "footer.php"; 
?>


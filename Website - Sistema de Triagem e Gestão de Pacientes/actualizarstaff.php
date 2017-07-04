<html>


<head>
<meta  charset="utf-8">
<title>Search User</title>



</head>

<body style="height:850px " >

<?php 
session_start();
include "style.php";
include "slidemenu.php";

?>

<table  align="center" height="800px">
<tr><td>
<div class="containeradm3" align="center">

<form method="post" action="actualizarstaff.php"> 
<br><br><p><a>Por Nome ou Username:</a></p>
<br><br>
<div class="form-input"> <input type="text" name="valoraprocurar"></div>

<input type="submit" name="procurar" value="procurar" class="login">
</form>

<div ></div>
<table align="center" cellspacing="0" cellpadding="1px" border="1" width="475px" class="table2" style="overflow:auto">
<tr style="color:white;background-color:grey">
		<th style="width:100px">ID</th>
        <th style="width:100px">Nome</th>
        <th style="width:100px">Username</th>
        <th style="width:100px">Privil&eacute;gio</th>
</tr>

       <?php
         $mysqli = NEW MySQLi('localhost','root','','triafct');
  		 if(isset($_POST['procurar'])){
			$valoraprocurar = $mysqli->real_escape_string($_POST['valoraprocurar']);
            $resultSet = $mysqli->query("SELECT * FROM `utilizadores` WHERE (CONCAT(`username`,`nome`)) LIKE '%$valoraprocurar%' ORDER BY nome");
            if($resultSet->num_rows != 0){ 

			    while($rows = $resultSet->fetch_assoc())
			    {
			    
			    
			    
			      $id = $rows['id'];
				  $no = $rows['nome'];
				  $user = $rows['username'];
				  $pass = $rows['password'];
				  $ti = $rows['privilegio'];
				  $mora = $rows['morada'];
				  $conta = $rows['contacto'];
				  
                 if($ti == 4)
                  {$priv = 'Administrador';}
                 else if($ti == 3)
                  {$priv = 'M&eacute;dico';}
                 else
                  {$priv = 'Enfermeiro';}
 
				 echo"
<tr>
				     <th><a>$id</a></th>
				     <th><a>$no</a></th>
				     <th><a>$user</a></th>
				     <th><a>$priv</a></th></tr>"; 	
			   






				  }	
	         }	

		     else{

 				echo"<a>No Results</a>";
 
            }







        }
		else{
  			 $resultSet = $mysqli->query("SELECT * FROM utilizadores ORDER BY nome");
             if($resultSet->num_rows != 0){

			while($rows = $resultSet->fetch_assoc())
			{
				$id = $rows['id'];
				$no = $rows['nome'];
				$user = $rows['username'];
				$ti = $rows['privilegio'];
                if($ti == 4)
                 {$priv = 'Administrador';}
                else if($ti == 3)
                {$priv = 'M&eacute;dico';}
                else
                {$priv = 'Enfermeiro';}

				echo"
				     <tr>
				     <th><a>$id</a></th>
				     <th><a>$no</a></th>
				     <th><a>$user</a></th>
				     <th><a>$priv</a></th></tr>"; 	
			}
			$id  = '';
			$no  = '';
			$user= '';
			$ti  = '';
	    }	

		else{

 				echo"<a>No Results</a>";
 
}
}

if(isset($_POST['update'])){
            $id = $_POST['id'];
     	    $nome = $_POST['nome'];
	  		$morada = $_POST['morada'];
      		$contacto = $_POST['contacto'];
	  		$username = $_POST['username'];
	  		$password = $_POST['password'];
	  		$privilegio = $_POST['privilegio'];
            $resultSet = $mysqli->query("UPDATE `utilizadores` SET `nome`= '$nome',`morada`='$morada',`contacto`='$contacto',`username`='$username',`password`='$password',`privilegio`='$privilegio' WHERE id = '$id'");
            echo"<a>Actualizado!</a>";
}


?>


</table>  

<form action="actualizarstaff.php" method="post">


<br><br><p><a>Editar informação funcion&aacute;rio(a):</a></p>
<br><br>
<p></p><a>ID:</a></p><br><br>
<div class="form-input"><input type="text" name="id" value="<?php if(isset($id)){echo"$id";} ?>"></div>
<p></p><a>Username:</a></p><br><br>
<div class="form-input"><input type="text" name="username" value="<?php if(isset($user)){echo"$user";} ?>"></div>
<p></p><a>Nome:</a></p><br><br>
<div class="form-input"><input type="text" name="nome" value="<?php if(isset($no)){echo"$no";} ?>"></div>
<p></p><a>Morada:</a></p><br><br>
<div class="form-input"><input type="text" name="morada" value="<?php if(isset($mora)){echo"$mora";} ?>"></div>
<p></p><a>Contacto:</a></p><br><br>
<div class="form-input"><input type="text" name="contacto" value="<?php if(isset($conta)){echo"$conta";} ?>"></div>
<p></p><a>Password:</a></p><br><br>
<div class="form-input"><input type="text" name="password" value="<?php if(isset($pass)){echo"$pass";} ?>"></div>
<p></p><a>Privilegio(2-Enf,3-Med,4-Admin):</a></p><br><br>
<div class="form-input"><input type="text" name="privilegio" value="<?php if(isset($ti)){echo"$ti";} ?>"></div>


<input type="submit" name="update" value="Update" class="login">
</form>

</div>


</td></tr>
</table>
<?php 
include "footer.php";
?>

</body>


</html>
  
<br><p><a>Alterar Utilizador</a></p>


<form method="post" action="alterarstaff.php?id=<?php $nome  ?>">
<input type="text" name="valoraprocurar">
<input type="submit" name="procurar" value="procurar">
</form>


<?php
        global $id;
        $id = $_GET['id'];
		try{
 					$con = new PDO('mysql:host=localhost;dbname=triafct;charset=utf8mb4', 'root', '');
 					}
 				catch(PDOException $e)
					{
					echo "error".$e->getMessage();
					}
            
		if(isset($_POST['procurar'])){
   				 		  
		  	$username = $_POST['valoraprocurar'];
	  		
		  $valoraprocurar = ($_POST['valoraprocurar']);
    	  $select = $con->prepare("SELECT * FROM utilizadores WHERE username='$valoraprocurar'");
  		  $select->setFetchMode(PDO::FETCH_ASSOC);
  		  $select->execute();
  		  $data = $select->fetch();
		  $id = $data['id'];
          	if($data['username']!= $valoraprocurar)
 			{
    		 echo "invalid email or pass";
 			}
 		  	elseif($data['username']== $valoraprocurar)
 			{	
            $id = $data['id'];
            $nome = $data['nome'];
	        $morada = $data['morada'];
            $contacto = $data['contacto'];
			$username = $data['username'];
			$password = $data['password'];
			$privilegio = $data['privilegio'];
 			}
			}
 		else if(isset($_POST['update'])){
     	    $usernamenovo = $_POST['usernamenovo'];
      		$nome = $_POST['nome'];
	  		$morada = $_POST['morada'];
      		$contacto = $_POST['contacto'];
	  		$username = $_POST['username'];
	  		$password = $_POST['password'];
	  		$privilegio = $_POST['privilegio'];


            if($_POST['usernamenovo'] != NULL){
            
 			$insquery = "UPDATE `utilizadores` SET `nome` = :nome, `morada` = :morada, `contacto`= :contacto, `username` = :username, `password` = :password, `privilegio` = :privilegio WHERE `id` = :id";
    		$insresult = $con->prepare($insquery); 	
    		$insexec = $insresult->execute(array(":nome"=>$nome, ":morada"=>$morada, ":contacto"=>$contacto, ":username"=>$usernamenovo, ":password"=>$password, ":privilegio"=>$privilegio, ":id"=>$id));
		    }
		    else{
      	    $insquery = "UPDATE `utilizadores` SET `nome` = :nome, `morada` = :morada, `contacto`= :contacto, `username` = :username, `password` = :password, `privilegio` = :privilegio WHERE `id` = :id";
    		$insresult = $con->prepare($insquery); 	
    		$insexec = $insresult->execute(array(":nome"=>$nome, ":morada"=>$morada, ":contacto"=>$contacto, ":username"=>$username, ":password"=>$password, ":privilegio"=>$privilegio, ":id"=>$id));
		    
		    }
		}           
?>

          
            <form action="alterarstaff.php" method="post">
<br><br>
<div class="form-input"> <input type="text" name="username" value="<?php echo" $username"; ?>" placeholder="Username"></div>
<div class="form-input"> <input type="text" name="nome" value="<?php echo" $nome"; ?>" placeholder="Nome"></div>
<div class="form-input"> <input type="text" name="morada" value="<?php echo" $morada"; ?>" placeholder="Morada"></div>
<div class="form-input"> <input type="text" name="contacto" value="<?php echo" $contacto"; ?>" placeholder="Contacto"></div>
<div class="form-input"> <input type="text" name="usernamenovo" value="" placeholder="UsernameNovo"></div>
<div class="form-input"> <input type="text" name="password" value="<?php echo" $password"; ?>" placeholder="Password"></div>
<div class="form-input"> <input type="text" name="privilegio" value="<?php echo" $privilegio"; ?>" placeholder="Privilegio(2-Enf,3-Med)"></div>
<input type="submit" name="update" value="Update" class="login">
</form>

<?php 




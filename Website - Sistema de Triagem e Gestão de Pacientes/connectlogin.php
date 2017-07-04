<?php try{
  $con = new PDO('mysql:host=localhost;dbname=triafct;charset=utf8mb4', 'root', '');
   }
catch(PDOException $e){
   echo "error".$e->getMessage();
    }
?>

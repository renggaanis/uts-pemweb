<?php 

      try 

      { 

           $con = new PDO('mysql:host=localhost;dbname=quranpedia', 'root', '', array(PDO::ATTR_PERSISTENT => true)); 

      } 

      catch(PDOException $e) 

      { 

           echo $e->getMessage(); 

      } 
      // penggunaan auth class
      include_once 'AuthClass.php'; 

      $user = new Auth($con); 

 ?> 
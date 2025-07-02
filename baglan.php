
    
<?php
try{
    $db= new PDO("mysql:host=localhost; dbname=turizm_herberi", "root","");
}
catch(PDOException $e){
    print $e->getMessage();
}



?> 

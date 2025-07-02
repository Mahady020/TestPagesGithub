<?php
include "baglan.php"; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$telefon=$_POST['telefon'];
$adres=$_POST['adres'];
$mesaj=$_POST['mesaj'];

$sorgu=$db->prepare("INSERT INTO formu SET
name= :oNameo,
email= :oEmail,
phone= :oPhone,
adres= :oAdres,
message= :oMessage");
$kayit=$sorgu->execute(array(
    "oNameo" => "$name",
    "oEmail" => "$email",
    "oPhone" =>"$telefon",
    "oAdres" =>"$adres",
    "oMessage" =>"$mesaj"));


     if($kayit){

         // Si l'insertion réussit, afficher un message JavaScript de succès et rediriger
         echo "<script type='text/javascript'>
         alert('Kayıt işlemi başarılı.');
         window.location.href='http://localhost/gezi_tanitim_turizm_herberi/web_site/hakkinda.html';
         </script>";
    }else {
        // Si l'insertion échoue, afficher un message JavaScript d'erreur
         echo "<script type='text/javascript'>
            alert('Erreur: " . $sql . "\\n" . $conn->error . "');
            window.location.href='http://localhost/gezi_tanitim_turizm_herberi/web_site/hakkinda.html';
          </script>";
    }
}
?>
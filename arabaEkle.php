<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "turizm_herberi";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyer les données
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $car = $_POST['car'];
    $start_date =$_POST['start_date'];
    $end_date =  $_POST['end_date'];


    // Insertion dans la base de données
    $sql = "INSERT INTO reservation_araba (name, email, phone, car, start_date, end_date) VALUES ('$name', '$email', '$phone', '$car', '$start_date', '$end_date')";

    // Exécuter la requête et afficher un message selon le résultat
    if ($conn->query($sql) === TRUE) {
        // Si l'insertion réussit, afficher un message JavaScript de succès et rediriger
        echo "<script type='text/javascript'>
                alert('Kayıt işlemi başarılı.');
                window.location.href='http://localhost/gezi_tanitim_turizm_herberi/web_site/araba.html';
              </script>";
    } else {
        // Si l'insertion échoue, afficher un message JavaScript d'erreur
        echo "<script type='text/javascript'>
                alert('Erreur: " . $sql . "\\n" . $conn->error . "');
                window.location.href='http://localhost/gezi_tanitim_turizm_herberi/web_site/araba.html';
              </script>";
    }
}

$conn->close();
?>
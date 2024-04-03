<?php
// Connexion à MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esso_plus"; // Nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$commentaire = $_POST['commentaire'];

// Insertion des données dans la table des commentaires
$sql = "INSERT INTO commentaires (nom, email, commentaire) VALUES ('$nom', '$email', '$commentaire')";

if ($conn->query($sql) === TRUE)  {
    // Message de succès
    echo '<script>alert("Commentaire soumis avec succès"); window.location.href = "siteweb2.html";</script>';
  } else {
    // Message d'erreur
    echo '<script>alert("Erreur lors de la soumission du commentaire : ' . $conn->error . '");</script>';
  }

// Fermeture de la connexion
$conn->close();
?>

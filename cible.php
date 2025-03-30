<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription - Résultat</title>
    <link rel="stylesheet" href="cible.css">
</head>
<body>
    <div class="form-container">
        <h2>Formulaire d'inscription - Résultat</h2>

        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sécuriser les données reçues
            $prenom = htmlspecialchars($_POST['prenom'] ?? '');
            $nom = htmlspecialchars($_POST['nom'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $telephone = htmlspecialchars($_POST['telephone'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            $genre = htmlspecialchars($_POST['genre'] ?? '');
            $date_naissance = htmlspecialchars($_POST['date_naissance'] ?? '');

            // Gestion de la photo de profil
            $photo_nom = $_FILES['photo']['name'] ?? '';
            $photo_tmp = $_FILES['photo']['tmp_name'] ?? '';
            $photo_destination = "uploads/" . basename($photo_nom);

            // Vérifier si le dossier existe
            if (!file_exists('uploads')) {
                mkdir('uploads', 0777, true); // Créer le dossier si nécessaire
            }

            // Vérifier si l'upload a réussi
            if (!empty($photo_nom)) {
                if (move_uploaded_file($photo_tmp, $photo_destination)) {
                    $photo_url = $photo_destination;
                } else {
                    echo "Erreur lors de l'upload de l'image.";
                    $photo_url = "default.jpg"; // Image par défaut si l'upload échoue
                }
            } else {
                $photo_url = "default.jpg"; // Image par défaut si aucune photo n'est envoyée
            }

            // Afficher les informations de l'utilisateur
            echo "<p><strong>Bienvenue, $prenom $nom !</strong></p>";
            echo "<p>Email : $email</p>";
            echo "<p>Numéro de téléphone : $telephone</p>";
            echo "<p>Genre : $genre</p>";
            echo "<p>Date de naissance : $date_naissance</p>";
            echo "<p>Photo de profil : </p>";
            echo "<img src='$photo_url' alt='Photo de profil' width='150' height='150'>"; // Afficher l'image
        } else {
            // Rediriger vers le formulaire si l'utilisateur essaie d'accéder directement à cette page
            header("Location: formulaire.PHP");
            exit();
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
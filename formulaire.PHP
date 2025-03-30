<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <div class="form-container">
        <h2>Formulaire d'inscription</h2>
        <form id="formUtilisateur">
            <div class="form-group">
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="telephone">Numéro de téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="genre">Genre :</label>
                    <select id="genre" name="genre" required>
                        <option value="">Sélectionnez</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="date_naissance">Date de naissance :</label>
                    <input type="date" id="date_naissance" name="date_naissance" required>
                </div>
                <div>
                    <label<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="form-container">
        <h2>Formulaire d'inscription</h2>
        <form id="formUtilisateur" action="cible.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="telephone">Numéro de téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="genre">Genre :</label>
                    <select id="genre" name="genre" required>
                        <option value="">Sélectionnez</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <label for="date_naissance">Date de naissance :</label>
                    <input type="date" id="date_naissance" name="date_naissance" required>
                </div>
                <div>
                    <label for="photo">Photo de profil :</label>
                    <input type="file" id="photo" name="photo" accept="image/*" required>
                </div>
            </div>

            <button type="submit">S'inscrire</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>

document.getElementById("formUtilisateur").addEventListener("submit", function(event) {
    let nom = document.getElementById("nom").value.trim();
    let prenom = document.getElementById("prenom").value.trim();
    let email = document.getElementById("email").value.trim();
    let telephone = document.getElementById("telephone").value.trim();
    let password = document.getElementById("password").value.trim();
    let genre = document.getElementById("genre").value;
    let dateNaissance = document.getElementById("date_naissance").value;
    let photo = document.getElementById("photo").files.length;

    // Expressions régulières pour validation
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let phoneRegex = /^[0-9]{10}$/;
    let passwordRegex = /^(?=.[A-Za-z])(?=.\d)[A-Za-z\d]{8,}$/;  // Correction de la regex pour le mot de passe

    // Vérification des champs
    if (nom === "" || prenom === "" || email === "" || telephone === "" || password === "" || genre === "" || dateNaissance === "" || photo === 0) {
        alert("Tous les champs sont obligatoires !");
        event.preventDefault(); // Empêcher l'envoi si validation échoue
        return;
    }

    if (!emailRegex.test(email)) {
        alert("Adresse email invalide !");
        event.preventDefault();
        return;
    }

    if (!phoneRegex.test(telephone)) {
        alert("Numéro de téléphone invalide (10 chiffres requis) !");
        event.preventDefault();
        return;
    }

    if (!passwordRegex.test(password)) {
        alert("Le mot de passe doit contenir au moins 8 caractères, une lettre et un chiffre !");
        event.preventDefault();
        return;
    }

    
});
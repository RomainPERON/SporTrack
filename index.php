<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="connection.css">
    <title>Connection - SporTrack</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            
        </div>
        <div class="titre">
            <h1>SportTrack</h1>
        </div>
        <div class="bouton">
            <button class="boutonFormulaire" type="button"><a href="inscrire.html">S'inscrire</a></button>
            <button class="boutonFormulaire" type="button"><a href="index.html">Page d'Acceuil</a></button>
        </div>
    </div>

    <div class="centrerFormulaire">
        <div id="formulaireConnection">
            <p class="formulaireTexte">Se Connecter</p>

            <form method="GET" action="index.php">
                <input type="email" placeholder="E-mail" required class="email"><br>
                <input type="password" placeholder="Password" required minlength="8" class="password"><br>
                <button type="submit" class="buttonConnect">Se Connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
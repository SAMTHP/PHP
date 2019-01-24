<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Test MySQL</title>
    </head>
    
    <body>
        <h1>Bienvenue sur la page de test pour la connexion à MySQL</h1>
        <form action="test.php" method="get">
            <p>
                <label for="login">Pseudo</label>
                <input type="text" name="login"/>
            </p>
            <p>
                <label for="pwd">Mot de pass</label>
                <input type="password" name="pwd"/>
            </p>
            <p><input type="submit" value="Connexion"> <a href="register.php">S'enregistrer</a></p>

        </form>
    </body>
</html>

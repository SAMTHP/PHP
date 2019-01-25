<?php
//require_once 'config.php';
$flag = true;
if(isset($_GET['reponse'])){
    $rep = $_GET['reponse'];
    if ($rep == "OK"){
        $flag = false;
    }
}
?>
<?php if ($flag == true) :?>
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
                <input type="text" name="login" required="true"/>
            </p>
            <p>
                <label for="pwd">Mot de pass</label>
                <input type="password" name="pwd" required="true"/>
            </p>
            <p><input type="submit" value="Connexion"> <a href="register.php">S'enregistrer</a></p>

        </form>
    </body>
</html>
<?php else :?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Accueil MySQL</title>
    </head>
    
    <body>
    <head>
        <h1>Bienvenue sur la page d'accueil de MySQL</h1>
    </head> 
        

    </body>
</html>
<?php endif; ?>
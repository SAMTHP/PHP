<?php

require 'config.php';

// Test de la présence des enregistrements
if(!empty($_POST['firstname']) && !empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['pwd']) && !empty($_POST['pwd_confirm'])){
    $firstname = $_POST['firstname'];
    $name = trim($_POST['name']);
    $login = trim($_POST['login']);
    $mail = trim($_POST['mail']);
    $pass = trim($_POST['pwd']);
    $pass_confirm = trim($_POST['pwd_confirm']);
}
/*
// Test de la présence du name
if(!empty($_POST['name'])){
    $name = $_POST['name'];
}

// Test de la présence du login
if(!empty($_POST['login'])){
    $login = $_POST['login'];
}

// Test de la présence du mail
if(!empty($_POST['mail'])){
    $mail = $_POST['mail'];
}

// Test de la présence du password
if(!empty($_POST['pwd'])){
    $pass = $_POST['pwd'];
}

// Test de la présence du password confirm
if(!empty($_POST['pwd_confirm'])){
    $pass_confirm = $_POST['pwd_confirm'];
}
*/


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Sign in</title>
    </head>
    
    <body>
        
        <header>
            <?php
                if(!empty($firstname) && !empty($name) && !empty($login) && !empty($mail) && !empty($pass) && !empty($pass_confirm) ){
                    echo "Compte créé !";
                    echo "<ul>
                         <li>Firstname : $firstname</li>
                         <li>Lastname : $name</li>
                         <li>Login : $login</li>
                         <li>Email : $mail</li>
                         <li>Password : $pass</li>
                     </ul>";
                }
                
                // Ici on peut faire l'insertion en base de donnée
            ?>
        </header>
        
        
        <div class="form">
            <h1>Formulaire de création de compte</h1>
            <form action="register.php" method="POST">
                <p>
                    <label for="firstname">Prénom :</label>
                    <input type="text" name="firstname" placeholder="firstname" required="true"/>
                </p>
                <p>
                    <label for="name">Nom :</label>
                    <input type="text" name="name" placeholder="lastname" required="true"/>
                </p>
                <p>
                    <label for="login">Login :</label>
                    <input type="text" name="login" placeholder="login" required="true"/>
                </p> 
                <p>
                    <label for="mail">Email :</label>
                    <input type="email" name="mail" placeholder="mail@live.fr" required="true"/>
                </p>
                <p>
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd" required="true"/>
                </p>
                <p>
                    <label for="pwd_confirm">Mot de passe de confirmation :</label>
                    <input type="password" name="pwd_confirm" required="true"/>
                </p>
                <p><input type="submit" value="Valider"></p>

            </form>
        </div>
    </body>
</html>
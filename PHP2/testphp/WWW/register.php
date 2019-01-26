<?php

require 'config.php';
$msg = "";
$flag = false;

// Test de la présence des enregistrements
if(isset($_POST['firstname']) && isset($_POST['name']) && isset($_POST['login']) && isset($_POST['mail'])){
    $firstname = $_POST['firstname'];
    $lastname = trim($_POST['name']);
    $login = trim($_POST['login']);
    $mail = trim($_POST['mail']);
}

if (isset($_POST['pwd']) && isset($_POST['pwd_confirm'])){
    $pass = trim($_POST['pwd']);
    $pass_confirm = trim($_POST['pwd_confirm']);
    if(!empty($pass) && !empty($pass_confirm)){
        if($pass == $pass_confirm){
            $pass = md5($pass);
            $flag = true;
        } else {
            $msg = " Vos mots de passes ne correspondent pas";
            $flag = false;
        }
    }
}

// Test de la présence du name
if(!empty($firstname)){
    $firstname = ucfirst($firstname);
    $flag = true;
} else {
    $flag = false;
    $msg = " Le champ prénom est requis et le caractère espace n'est pas valide";
}

// Test de la présence du login
if(!empty($lastname)){
    $lastname = ucfirst($lastname);
    $flag = true;
} else {
    $flag = false;
    $msg = " Le champ nom est requis et le caractère espace n'est pas valide";
}

// Test de la présence du mail
if(!empty($login)){
    $login = ucfirst($login);
    $flag = true;
} else {
    $flag = false;
    $msg = " Le champ login est requis et le caractère espace n'est pas valide";
}

// Test de la présence du password
if(!empty($mail)){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $flag = true;
    } else {
        $flag = false;
        $msg = "Votre adresse mail n'est pas valide";
    }
} else {
    $flag = false;
    $msg = "Le champ mail est requis et le caractère espace n'est pas valide";
}

if($flag){
    echo "Compte créé !";
        echo "<ul>
                  <li>Firstname : $firstname</li>
                  <li>Lastname : $lastname</li>
                  <li>Login : $login</li>
                  <li>Email : $mail</li>
                  <li>Password : $pass</li>
              </ul>";
    register($firstname,$lastname,$login,$pass,$mail);
} else {
    echo nl2br($msg);
}



?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Sign in</title>
    </head>
    
    <body>
        
        <!--<header>
            <?php/*
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
            */?>
        </header>-->
        
        
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

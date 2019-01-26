<?php
// Une base de donnée est une ensemble de tables, chacunes composées de champ (colonne), et d'enregistrements(row)
// Création des variables  qui vont permettre la conncection au seveur
$hote = "localhost";
$dbname = "testphp";
$dbuser = "testphp";
$dbpass = "OURiMOVyETrauYBh";

// Connection au serveur MySQL

    try {
        $dsn = "mysql:host=$hote;dbname=$dbname"; // Configuration du dsn
        $connect = new PDO($dsn,$dbuser,$dbpass); // Instanciation de l'objet PDO
        //echo "Connection établie au serveur.<br><br>";
        //getUsers($connect);  // Appel de la fonction getUser
    } catch (Exception $msg) {
        echo "Echec de connection au serveur MySQL avec pour cause ".$msg->getMessage();
        die();
    }

/*function showLogin($log,$pwd){
    $hote = "localhost";
    $dbname = "testphp";
    $dbuser = "testphp";
    $dbpass = "OURiMOVyETrauYBh";
    try {
        $dsn = "mysql:host=$hote;dbname=$dbname"; // Configuration du dsn
        $connect = new PDO($dsn,$dbuser,$dbpass); // Instanciation de l'objet PDO
        echo "Connection établie au serveur.<br><br>";
        signIn($connect,$log,$pwd);  // Appel de la fonction login
    } catch (Exception $msg) {
        echo "Echec de connection au serveur MySQL avec pour cause ".$msg->getMessage();
        die();
    }
}*/

// Récupération de tous les enregistrement dans la db test sur la table utilisateur => Statement : PDO::query
// Query comporte des dangers, c'est pour ça qu'il est mieux de commencer par la méthode prepare() et ensuite execute()
/*function getUsers($db){
    $sql = 'SELECT * FROM utilisateurs ORDER BY prenom';
    foreach ($db->query($sql) as $user){
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
}*/

// Récupération de tous les enregistrement dans la db test sur la table utilisateur => Statement : PDO::prepare $ PDO::execute
function getUsers($login,$pass){
    global $connect;
    $sql = 'SELECT mail FROM utilisateurs WHERE login = :login AND pass = :pass';
    $req = $connect->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute(array(':login' => $login, 'pass' => $pass)) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    while ($user = $req->fetch()){
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
    //$req->closeCursor(); // Permet de fermer la connection
}

// Fonction pour se connecter à la db
function signIn($log,$pwd){
    global $connect;
    
    $sql = 'SELECT * FROM utilisateurs WHERE login = :login AND pass = :pass';
    $req = $connect->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute(array(':login' => $log, ':pass' => $pwd)) or die($req->errorInfo()); //On execure la requête avec la fonction execute()
    $retour = $req->fetch();
   if($retour['id']){
        echo "OUI";
        return true;
    } else {
        echo "non";
        //return false;
    }
    //debug($retour);
}

// Fonction pour s'enregistrer
function register($firstname,$lastname,$login,$pass,$mail){
    global $connect;
    
    $sql = 'INSERT INTO utilisateurs(id,prenom,nom,login,pass,mail) VALUES(NULL,:prenom,:nom,:login,:pass,:mail)';
    $req = $connect->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $retour = $req->execute(array(':prenom' => $firstname,':nom' => $lastname,':login' => $login,':pass' => $pass,':mail' => $mail)) or die($req->errorInfo()); //On execure la requête avec la fonction execute()
    debug($retour);
}

/*function getUsers($db){
    echo 'SELECT id,pass FROM utilisateurs'.'<br>';
    $sql = 'SELECT id,pass FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    $tabUsers = array();
    $i = 0;
    while ($user = $req->fetch()){
        $tabUsers[$i++] = array($user['id'],md5($user['pass']));
    }
    $req->closeCursor(); // Permet de fermer la connection
    debug($tabUsers);
    
    $sql = 'UPDATE utilisateurs SET pass = :pwd WHERE id = :id';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    for($e = 0; $e < count($tabUsers); $e++){
        $req->execute(array(':pwd' => $tabUsers[$e][1],':id' => $tabUsers[$e][0])) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    }
    $req->closeCursor(); // Permet de fermer la connection
    
    echo 'SELECT * FROM utilisateurs'.'<br>';
    $sql = 'SELECT * FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo()));
    while ($user = $req->fetch()){
        debug($user);
    }
}*/

// INSERT INTO
/*function getUsers($db){
    echo 'INSERT INTO utilisateurs(id,prenom,nom,login,pass,mail) VALUES(NULL,:prenom,:nom,:login,:pass,:mail)'.'<br>';
    $sql = 'INSERT INTO utilisateurs(id,prenom,nom,login,pass,mail) VALUES(NULL,:prenom,:nom,:login,:pass,:mail) ';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute(array(':prenom' => 'Samthp',':nom' => 'Sam',':login' => 'samio',':pass' => md5(623598741),':mail' => 'sam@live.fr')) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()

    $req->closeCursor(); // Permet de fermer la connection
    
    echo 'SELECT * FROM utilisateurs'.'<br>';
    $sql = 'SELECT * FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo()));
    while ($user = $req->fetch()){
        debug($user);
    }
}*/

// DELETE
/*function getUsers($db){
    echo 'DELETE FROM utilisateurs WHERE id = :id'.'<br>';
    $sql = 'DELETE FROM utilisateurs WHERE id = :id';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute(array(':id'=>5)) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()

    $req->closeCursor(); // Permet de fermer la connection
    
    echo 'SELECT * FROM utilisateurs'.'<br>';
    $sql = 'SELECT * FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo()));
    while ($user = $req->fetch()){
        debug($user);
    }
}
*/
function debug($tab){
        echo "<pre>";
            print_r($tab);
        echo "</pre>";
}
/*
// Crypter un mot de passe
$pwd = "623598741";
// Méthode md5
$hash = md5($pwd);
// Méthode sha1
$hash1 = sha1($pwd);
// Méthode hash
$hash2 = hash("haval160,4", $pwd);

$pwd = "623598741";
*/
//$tp = array("md5" => $hash,"sha1" => $hash1,"haval" => $hash2);

//echo "<br> Mots de passes cryptés : <br>";
//debug($tp);
/*
if(md5($pwd) == $hash){
    echo "<br>Vérification du mot de passe ok<br>";
    echo '<br>md5($pwd) == $hash : <br>'. md5($pwd).' == '.$hash;
} else {
    echo "<br>Erreur : <br>";
    echo '<br>md5($pwd) != $hash : <br>'. md5($pwd).' != '.$hash;
}
 * 
 */
?>
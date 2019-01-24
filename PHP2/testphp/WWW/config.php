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
    echo "Connection établie au serveur.";
    getUsers($connect);  // Appel de la fonction getUser
} catch (Exception $msg) {
    echo "Echec de connection au serveur MySQL avec pour cause ".$msg->getMessage();
    die();
}

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
/*function getUsers($db){
    $sql = 'SELECT mail FROM utilisateurs WHERE login = :login';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute(array(':login' => "sam")) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    while ($user = $req->fetch()){
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }
    $req->closeCursor(); // Permet de fermer la connection
}
*/
function getUsers($db){
    echo 'SELECT id,prenom,nom FROM utilisateurs'.'<br>';
    $sql = 'SELECT id,prenom,nom FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    $tabUsers = array();
    $i = 0;
    while ($user = $req->fetch()){
        $tabUsers[$i++] = array($user['id'],ucfirst($user['prenom']),ucfirst($user['nom']));
    }
    $req->closeCursor(); // Permet de fermer la connection
    debug($tabUsers);
    
    echo 'UPDATE utilisateurs SET nom = :lastname, prenom = :firstname WHERE id = :id'.'<br>';
    $sql = 'UPDATE utilisateurs SET nom = :lastname, prenom = :firstname WHERE id = :id';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    for($e = 0; $e < count($tabUsers); $e++){
        $req->execute(array(':lastname' => $tabUsers[$e][2],':firstname' => $tabUsers[$e][1],':id' => $tabUsers[$e][0])) or die(print_r($req->errorInfo())); //On execure la requête avec la fonction execute()
    }
    $req->closeCursor(); // Permet de fermer la connection
    
    echo 'SELECT prenom,nom FROM utilisateurs'.'<br>';
    $sql = 'SELECT prenom,nom FROM utilisateurs';
    $req = $db->prepare($sql); // $db est l'argument qui récupère l'objet PDO, et permet de faire appel à la fonction prepare()
    $req->execute() or die(print_r($req->errorInfo()));
    while ($user = $req->fetch()){
        debug($user);
    }
}


function debug($tab){
        echo "<pre>";
            print_r($tab);
        echo "</pre>";
}

?>
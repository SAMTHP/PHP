<?php
// video : 11/17 - 1:19:40
session_start();
$as = "A";
$roi = "R";
$dos = "X";
$carte1 = $as; 
$carte2 = $roi; 
$carte3 = $as; 

// Test si on reçoit un nom de puis la page index
if (!empty($_POST['name'])){
    $name = $_POST['name'];
    // Test si nom est une valeur numérique
    if(is_numeric($name)){
        // Redirection vers l'acceuil, car le nom est numérique
        header("Location: http://localhost/Entrainement libre/JEU?erreur=1&name=$name");
    } elseif (empty(trim($name))) { // Redirection vers l'acceuil, car le nom contient un espace et est vide après l'espace
        header("Location: http://localhost/Entrainement libre/JEU?erreur=2");
    } else { // Stockage & initialisation des variables dans la super globale $_SESSION
        $_SESSION['name'] = $name;
        $cash = 500;
        $chance = 2;
        $tour = 0;
        $choice = 0;
        $win_cart = 0;
        $mise = 0;
        $_SESSION['win_cart'] = $win_cart;
        $_SESSION['cash'] = $cash;
        $_SESSION['chance'] = $chance;
        $_SESSION['tour'] = $tour;
        $_SESSION['choice'] = $choice;
        $_SESSION['mise'] = $mise;
    }
}

// Test si on reçoit une mise
if (!empty($_POST['mise'])){
    $mise = $_POST['mise'];
    if($mise > $_SESSION['cash']){
        echo "Mise non valide ";
    } else {
        $_SESSION['tour']++;
        $_SESSION['mise'] = $mise;
        //$_SESSION['cash'] -= $mise;
        //$cash = $_SESSION['cash'];
    }
}

if($_SESSION['tour'] == 3){
    $_SESSION['tour'] = 0;
}


// Mélange des cartes si on a fait une mise
if($_SESSION['tour'] == 0){
    $chance = 2;
    $tour = 0;
    $choice = 0;
    $win_cart = 0;
    $_SESSION['win_cart'] = $win_cart; //Mélange des cartes
    $_SESSION['chance'] = $chance;
    $_SESSION['choice'] = $choice;
    $_SESSION['tour'] = $tour;

}

// Calcul de la carte gagnante
if(!empty($_SESSION['win_cart'])){
    $win_cart =  $_SESSION['win_cart'];
} else {
    $win_cart = round((mt_rand(0.5, 3000000)/1000000), 0, PHP_ROUND_HALF_UP);
    $_SESSION['win_cart'] = $win_cart;
    $win_cart = 0;
}

// Test si $_SESSION n'est pas vide
if(!empty($_SESSION['name'])){
    $name =  $_SESSION['name'];
}

// Test des variables en session $cash & chance
if(!empty($_SESSION['cash']) && !empty($_SESSION['chance'])){
    $cash = $_SESSION['cash'];
    $chance = $_SESSION['chance'];
} 

// Test des variables en session $tour & $choice
if($_SESSION['tour'] == 0 && $_SESSION['choice'] == 0){
    $tour = $_SESSION['tour'];
    $choice = $_SESSION['choice'];
} else {
    $tour = $_SESSION['tour'];
    $choice = $_SESSION['choice'];
}

// Test si on reçoit une carte, donc un choix
if (!empty($_POST['carte'])){
    $_SESSION['tour'] = ++$tour;
    $choice = $_POST['carte'];
    if( $_SESSION['choice'] != $choice && $_SESSION['choice'] != 0){
        $chance--;
        $_SESSION['chance'] = $chance;
    }
    $_SESSION['choice'] = $choice;
}



// Test de $win_cart pour connaitre sa valeur
switch($win_cart){
    case 1;
    {
        $carte1 = $roi;
        $carte2 = $as;
        $carte3 = $as;
    }
    break;
    case 2;
    {
        $carte1 = $as;
        $carte2 = $roi;
        $carte3 = $as;
    }
    break;
    case 3;
    {
        $carte1 = $as;
        $carte2 = $as;
        $carte3 = $roi;
    }
    break;
    case 0;
    {
        $carte1 = $dos;
        $carte2 = $dos;
        $carte3 = $dos;
    }
    break;
}
/*
//Test du mt_rand()
$array = [];
echo "<br>";
// On peut utiliser floor() ou ceil() aussi
for ($i=0;$i<100;$i++){
    array_push($array, intval(round((mt_rand(0, 3000000)/1000000), 0, PHP_ROUND_HALF_UP)));
}
echo "<br>";
echo "Tableau : ";
print_r($array);
echo "<br>Nombre de 1 ressorti : ";
print_r(array_count_values($array));
*/

?>
 

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Bonneateau</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <header>
            <div class="title">
                <h1>Jeu du Bonneteau</h1>
            </div>
        </header>
        <nav>
            <div class="session">
                <pre>
                    <?php 
                    echo "Session<br>";
                    if(!empty($_SESSION)){
                        print_r($_SESSION);
                    }
                    ?>
                </pre>
            </div>
        </nav>
        <br><br>
        <div class="head_game">
            <div class="rules">
                
                <h1>Règles</h1>
                <p>
                    <strong>Principe du jeu :</strong>
                    <br><br>
                            Mélanger 3 cartes sur la vue de dos, dans les 3 cartes il y a 2 As et une figure.<br> 
                            Le but est donc de retrouver la figure après mélange virtuel.<br>  
                            Le joueur choisit sa carte, puis on retourne une des deux cartes qui n'a pas été choisie.<br> 
                            Enfin on propose au joueur une dernière chance de pouvoir changer son choix.  
                            <br><br> 
                            Si le joueur ne change pas de choix depuis le début et qu'il gagne, alors sa mise sera triplée.<br>  
                            Si il fait un changement, et qu'il gagne, alors sa mise sera doublée, sinon il aura perdu. 
                            <br><br> 
                            Pour gagner la partie, le joueur doit obtenir 10 000 points, si le joueur a 0 points,<br> 
                            alors le jeu est fini et le joueur a perdu.</p>
            </div>

            <div class="points">
                <div class="control_table">
                    <h2>Tableau de bord</h2>
                </div>
                <p><b>Nom du joueur :</b> <?= $name; ?></p>
                <p><b>Gain de départ :</b> <?= $cash; ?> </p>
                <p><b>Nombre de chance :</b> <?= $chance; ?> </p>
                <div class="mise_table">
                    <h3>Mise minimum : 100</h3>
                </div>
                <?php if($tour == 0): ?>
                    <div class="mise">
                        <form  action="jeu.php" method="post" accept-charset="utf-8">
                        <p><input type="text" name="mise" placeholder="Faire votre mise"/></p>
                        <p><input type="submit" value="Miser"></p>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="banner">
            <h1>Game</h1>
        </div>
        
        
        <form class="game" action="jeu.php" method="post" accept-charset="utf-8">
            <div class="board">
                <div class="cartes">
                    <div class="carte">
                        <p><?= $carte1; ?></p>
                    </div>
                    <div class="choice">
                        <?php if($tour != 0): ?>
                            <input type="radio" name="carte" value="1">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="cartes">
                    <div class="carte">
                        <p><?= $carte2; ?></p>
                    </div>
                    <div class="choice">
                        <?php if($tour != 0): ?>
                            <input type="radio" name="carte" value="2">
                        <?php endif; ?>
                    </div>    
                </div>
                <div class="cartes">
                    <div class="carte">
                        <p><?= $carte3; ?></p>
                    </div>
                    <div class="choice">
                        <?php if($tour != 0): ?>
                            <input type="radio" name="carte" value="3">
                        <?php endif; ?>
                    </div>     
                </div>
            </div>

            <div class="control">
                <div class="control_table">
                    <h2>Commandes</h2>
                </div>
                <?php
                    switch ($tour){
                        case 1:
                        echo '<p><input type="submit" value="Valider mon choix" ></p>';
                        echo '<p><input type="submit" value="Donner la réponse" disabled></p>';
                        break;
                        case 2:
                        echo '<p><input type="submit" value="Valider mon choix" disabled></p>';
                        echo '<p><input type="submit" value="Donner la réponse" ></p>';
                        break;
                    }
                ?>
            </div>
        </form>
        <footer>
            <p>Elaborate by SAMCODE</p>
        </footer>
        
    </body>
</html>
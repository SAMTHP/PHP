
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Bonneateau</title><link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body class="body_index">
        <header class="head_index">
            <h1>Jeu du Bonneteau</h1>
        </header>
        <div class="container">
            <div class="form">
                <form action="jeu.php" method="POST" accept-charset="utf-8">
                    <p>
                        <label>Votre nom : </label>
                        <input type="text" name="name" required="true"/> <!---->
                    </p>
                    <P>
                        <input type="submit" value="Démarrer le jeu">
                    </p>

                </form>
            </div>
            
        </div>
        <div class="erreur">
                <?php
                    // Test si la variable $_GET['erreur'] existe
                    if(!empty($_GET['erreur'])){
                        $erreur = $_GET['erreur'];
                        if($erreur == 1){
                            $msg = $_GET['name']." n'est pas un nom valide !";
                        } else {
                            $msg = "Merci de bien vouloir remplir le champ nom avec votre nom !";
                        }
                        echo '<h1>'.$msg.'</h1>';
                    }
                ?>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Bonneateau</title>
        
    </head>
    <body>
        <div class="container">
            <h1>Jeu du Bonneteau</h1>
            <form action="jeu.php" method="GET" accept-charset="utf-8">
                <p>
                    <label>Votre nom : </label>
                    <input type="text" name="nom" required="true">
                </p>
                <P>
                    <input type="submit" value="Démarrer le jeu">
                </p>

            </form>
            <h2>Règles</h2>
            <p>
                <strong>Jeu du bonneteau :</strong>
                <br><br>
                Nombre de joueur : 1<br> 
                Nombre de cartes : 3<br> 
                Nombre de chances : 2<br> 
                Gain de départ : 500 €
                <br><br>
                Montant gagnant : 10 000 €<br> 
                Fin de partie lorsque montant est égal à 0.
                <br><br>
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
    </body>
</html>
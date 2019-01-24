<?php
session_start();

if (isset($_GET['login']) && isset($_GET['pwd']) ){
    $login = $_GET['login'];
    $pass = $_GET['pwd'];
    
    echo "Le login : <b>$login</b>, et le mot de passe est : <b>$pass</b> ";
}
?>

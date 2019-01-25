<?php
session_start();
require_once 'config.php';

if (isset($_GET['login']) && isset($_GET['pwd']) ){
    $login = trim($_GET['login']);
    $pass = trim($_GET['pwd']);

    if(!empty($login) && !empty($pass)){
        $pass = md5($_GET['pwd']);
        $boolean = signIn($login,$pass);
        if($boolean){
            //echo $boolean;
            $url = "http://".$_SERVER['SERVER_NAME']."/?reponse=OK";
        } else {
            $url = "http://".$_SERVER['SERVER_NAME']."/?reponse=NON";
        }
    } else {
        $url = "http://".$_SERVER['SERVER_NAME']."/?reponse=NON";
    }
    header("Location: ".$url);
}
?>

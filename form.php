<?php
    if ($_POST == true) {
        $name = $_POST['user_name'];
        $email = $_POST['user_mail'];
        $message = $_POST['user_message'];
        $hat = '@';
        $pos = strpos($email, $hat);
        $name_exist = false;
        $email_exist = false;
        $message_exist = false;

        if (empty($name)){
            echo "<font color='red'>ERROR: Nom non valide !! </font>";
        } else {
            $name_exist = true;
        }
        if ($pos === false){
            echo "<font color='red'>ERROR: Email non valide !! </font>";
        } else {
            $email_exist = true;
        }
        if (strlen($message) < 3){
            echo "<font color='red'>ERROR: Minimum 3 caractères !! </font>";
        } else {
            $message_exist = true;
        }

        if ($name_exist == true && $email_exist == true && $message_exist == true){
            echo "
            <table>
                <thead>
                    <tr>
                        <th>NOM</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$message</td>
                    </tr>
                </tbody>
            </table>";
        }
    }
    static $car = 0;
    echo $car++;
?>

<div class="container">
    <form action="form.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="text" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" name="Valider"/>
        </div>
    </form>
</div> 


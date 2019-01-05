<?php
$hello = "Hello ";
$name = " Samir";
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>My first PHP page</h1>
        <?php
            $name = "Yasmine";
            $sentence = $hello . $name .".";
            echo $sentence;
        ?>
    </body>
</html>

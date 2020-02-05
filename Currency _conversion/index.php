<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usd = $_POST["usd"];
        $rate = 23000;
        $vnd = $usd*$rate;
        echo $usd." USD tuong duong ".$vnd. " VND";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Currency conversion</title>
    </head>
    <body>
        <form method="post">
            <input type="number" name="usd" placeholder="USD">
            <button type="submit" id="submit">Conversion</button>
        </form>

    </body>
</html>
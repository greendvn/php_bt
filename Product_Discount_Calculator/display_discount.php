
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>display discount</title>
    </head>
    <body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $productDescription = $_POST["productDescription"];
        $price = $_POST["listPrice"];
        $discountPercent = $_POST["discountPercent"];
        $discountAmount = $price * $discountPercent * 0.01;
        $discountPrice = $price - $discountAmount;
        echo $productDescription."<br/>";
        echo $price."<br/>";
        echo $discountPercent."<br/>";
        echo $discountAmount."<br/>";
        echo $discountPrice."<br/>";
    }
    ?>

    </body>
</html>

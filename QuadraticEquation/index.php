<?php
include "QuadraticEquatiion.php";
include "getValue.php";

$demo = new QuadraticEquatiion($a,$b,$c)

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equatiion</title>
    <style>
        form{
            width: 400px;
        }
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Giai phuong trinh bac 2</legend>
            <p>Nhap cac gia tri a,b,c cua phuong trinh ax2+bx+c=0</p>
            a = <input type="number" name="num1"><br/>
            b = <input type="number" name="num2"><br/>
            c = <input type="number" name="num3"><br/>
            <input type="submit" name="submit" value="submit">
        </fieldset>
        <br>
        <br>
        <?php echo $demo->result(); ?>


    </form>
</body>
</html>

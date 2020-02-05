
<?php

function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
    }
}
echo "<br/>";

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Currency conversion</title>
</head>
<body>
<form method="post">
    <input type="number" name="numberPrime" placeholder="number Prime">
    <button type="submit" id="submit">Get</button>
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numberPrime = $_POST["numberPrime"];
    echo $numberPrime." so nguyen to dau tien la : ";
    $N = 2;
    $count = 0;
    while($count <$numberPrime){
        if(isPrimeNumber($N)){
            echo ($N . " ");
            $count++;
        }
        $N++;
    }
}
?>
<?php
include_once "StackList.php";

$stackList = new StackList(20);

$decimalNumber = 39;
echo    'Decimal: '.$decimalNumber;
while ($decimalNumber > 0){
    $surplus = $decimalNumber%2;
    $stackList->push($surplus);
    $decimalNumber = ($decimalNumber-$surplus)/2;
}

echo ' to Binari: '.$stackList->toString();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

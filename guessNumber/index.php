<?php
session_start();
$arr = [];
for ($i = 0; $i < 100; $i++) {
    $arr[$i] = $i;
}
function guessnumber($arr)
{
    $low = 0;
    $high = count($arr);
    $_SESSION['guessNumber'] = (int)(($low + $high) / 2);
    return $arr[$_SESSION['guessNumber']];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["answer"];
    if ($answer == "higher") {
        $arr = array_slice($_SESSION['arr'], 0, $_SESSION['guessNumber']);

    } else if ($answer == "lower") {
        $arr = array_slice($_SESSION['arr'], $_SESSION['guessNumber']);
    }
    else {
        echo "correct";
        session_destroy();
    }
    var_dump($arr);
}
$_SESSION['arr'] =$arr;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doan so</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <label>Guess Number</label>
    <h2><?php echo guessNumber($_SESSION['arr']) ?></h2>
    <form method="post">
        <button type="submit" class="btn btn-primary" name="answer" value="lower" >Too Low</button>
        <button type="submit" class="btn btn-primary" name="answer" value="correct">Correct</button>
        <button type="submit" class="btn btn-primary" name="answer" value="higher">Too High</button>
    </form>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>

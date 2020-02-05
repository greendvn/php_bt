<?php
const PHONE_NUMBER_LENGTH = 10;

$arrMobi = [];
$arrVina = [];
$arrViettel = [];


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $phoneNumbers = $_POST["phoneNumbers"];
    $arrPhoneNumbers = explode(',',$phoneNumbers);
    foreach ($arrPhoneNumbers as $phoneNumber){
        $headNumberMobi = [89, 90, 93, 70, 79, 77, 76, 78];
        $headNumberVina = [91, 94, 88, 83, 84, 85, 81, 82];
        $headNumberViettel = [86, 96, 97, 98, 32, 33, 34, 35, 36, 37, 38, 39];
        if(strlen($phoneNumber)==PHONE_NUMBER_LENGTH) {
            if (in_array(substr($phoneNumber, 1, 2), $headNumberMobi)) {
                array_push($arrMobi, $phoneNumber);
            }
            else if (in_array(substr($phoneNumber, 1, 2), $headNumberVina)){
                array_push($arrVina, $phoneNumber);
            }
            else if (in_array(substr($phoneNumber, 1, 2), $headNumberViettel)){
                array_push($arrViettel, $phoneNumber);
            }
        }
    }

}
var_dump($arrMobi);
var_dump($arrVina);
var_dump($arrViettel);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Phone Numbers</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="phoneNumbers"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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

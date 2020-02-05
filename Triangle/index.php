<?php
include_once "class/Triangle.php";

$triangle = new Triangle();
$triangle->setName("triangle");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $side1= $_POST["side1"];
    $side2= $_POST["side2"];
    $side3= $_POST["side3"];
    $color = $_POST["color"];

    $triangle->setTriangle($side1,$side2,$side3);
    $triangle->setColor($color);


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triangle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post">
                <label><b>Insert Triangle</b></label>
                <div class="form-group">
                    <label >Side1</label>
                    <input type="number" class="form-control" name="side1">
                </div>
                <div class="form-group">
                    <label >Side2</label>
                    <input type="number" class="form-control" name="side2">
                </div>
                <div class="form-group">
                    <label >Side3</label>
                    <input type="number" class="form-control" name="side3">
                </div>
                <div class="form-group">
                    <label >Color select</label>
                    <select class="form-control" name = "color">
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                        <option value="black">Black</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div>
            <?php $triangle->toString() ?>
        </div>
    </div>
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

<?php
$a = NULL;
$b = NULL;
$c = NULL;
if($_SERVER["REQUEST_METHOD"]==="POST"){
    if(!empty($_POST["num1"]))
        $a = $_POST["num1"];
    if(!empty($_POST["num2"]))
        $b = $_POST["num2"];
    if(!empty($_POST["num3"]))
        $c = $_POST["num3"];

}
?>
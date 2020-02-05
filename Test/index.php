<?php
    include("class_lib.php");

    $dieu = new person("dieu");
    $long = new person("long");
    echo $dieu->getName();
    echo $long->getName();
    $dieu->setName("dieudieu");
    $long->setName("longlong");
    echo $dieu->getName();
    echo $long->getName();

?>
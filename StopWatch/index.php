<?php
include "StopWatch.php";

$time = new StopWatch();
$arr = [];
for ($i = 0;$i <100000;$i++)
    $arr[$i] = mt_rand(-100,100);
$time->start();
//sort($arr);
for($i = 0; $i < 100000; $i++) {
    for($j = $i; $j < 100000; $j++) {
        if ($arr[$j] < $arr[$i]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
$time->stop();
echo "thoi gian sap xep la: ".$time->getElapsedTime();
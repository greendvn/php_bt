<?php
    $numberUnit = [1=>"one",2=>"two", 3=> "three", 4=>"four",
    5=>"five", 6=>"six", 7=>"seven", 8=>"eight",9=>"nine"];
    $numberTensUnderTwenty = [0=>"ten", 1=>"eleven", 2=>"twelve",3=>"thirteen",4=>"fourteen",5=>"fifteen",
        6=>"sixteen",7=>"seventeen",8=>"eighteen",9=>"nineteen"];
    $numberTensOverTwenty = [2=>"twenty",3=>"thirty",4=>"fourty",5=>"fifty",
        6=>"sixty",7=>"seventy",8=>"eighty",9=>"ninety"];

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $searchNumber  = $_POST["number"];
        $flag = 0;
        if ($searchNumber == 0){
            echo "zero";
            $flag = 1;
        }

        if ($searchNumber>0 && $searchNumber<1000){
            foreach ($numberUnit as $number => $description){
                if (floor($searchNumber/100) == $number){
                    echo $description." hundred " ;
                    $flag = 1;
                    $searchNumber = $searchNumber % 100;
                    if ($searchNumber >0)
                        echo " and ";
                }
            }
        }
        if($searchNumber>=10&& $searchNumber <20)
            foreach ($numberTensUnderTwenty as $number => $description){
                if($searchNumber%10 ==$number) {
                    echo $description;
                    $flag = 1;
                }
            }
        if($searchNumber >=20 && $searchNumber <100 ){
            foreach ($numberTensOverTwenty as $number => $description){
                if (floor($searchNumber/10) == $number){
                    echo $description." ";
                    $flag = 1;
                    $searchNumber %= 10;
                }
            }
        }
        if ($searchNumber>=0 && $searchNumber < 10 ){
            foreach ($numberUnit as $number =>$description){
                if($searchNumber == $number){
                    echo $description;
                    $flag = 1;
                }
            }
        }
        if($flag ==0){
            echo "out of ability";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Number tor word</title>
        <style>
            input[type=number]{
                width: 300px;
                font-size: 16px;
                border: 1px solid black;
                padding: 10px 10px 10px 10px;
            }
            #submit{
                font-size: 16px;
                padding: 10px 10px 10px 10px;
            }

        </style>
    </head>
    <body>
        <form method="post">
            <input type="number" name="number" placeholder="nhap so can doc">
            <button type="submit" id="submit" value="doc">Đọc</button>
        </form>


    </body>
</html>

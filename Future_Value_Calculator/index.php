<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $inventmentAmount = $_POST["inventmentAmount"];
        $yearlInterestRate  = $_POST["yearlInterestRate"];
        $numberOfYear = $_POST["numberOfYear"];
        for ($i =1; $i<=$numberOfYear;$i++){
            $inventmentAmount = $inventmentAmount + ($inventmentAmount * $yearlInterestRate)/100;
        }
        echo "Future value: ".$inventmentAmount;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Future Value Calculator</title>
        <style>
            input[type=number]{
                width: 300px;
                font-size: 16px;
                border: 1px solid black;
                padding: 10px 10px 10px 10px;
                margin: 10px 0px;
            }
            #submit{
                font-size: 16px;
                padding: 10px 10px 10px 10px;
                margin: 10px 0px
            }

        </style>
    </head>
    <body>
        <form method="post">
            <input type="number" name="inventmentAmount" placeholder="inventment Amount"> <br/>
            <input type="number" name="yearlInterestRate" placeholder="yearl Interest Rate %"><br/>
            <input type="number" name="numberOfYear" placeholder="number Of Year"><br/>
            <button type="submit" id="submit">Calculate</button>
        </form>
    </body>
</html>

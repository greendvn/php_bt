<?php
function rectangle(){
    for( $i =0; $i < 3; $i++){
        for($j=0 ;$j <7;$j++)
            echo "* ";
        echo "<br/>";
    }
}

function triangle1(){
    for( $i =0; $i <= 5; $i++){
        for($j=0 ;$j <=$i;$j++)
            echo "* ";
        echo "<br/>";
    }
}

function triangle2(){
    for( $i = 6; $i > 0; $i--){
        for($j=0 ;$j <$i;$j++)
            echo "* ";
        echo "<br/>";
    }
}

function isoscelesTriangle (){
    for( $i = 0; $i <5; $i++){
        for($j =5; $j>$i;$j--){
            echo "&nbsp&nbsp";
        }
        for($j=0 ;$j <2*$i+1;$j++)
            echo "*";
        echo "<br/>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>display discount</title>
</head>
<body>
    <form method="post">
        <select name="geometry">
            <option value="rectangle">Hinh vuong</option>
            <option value="triangle_botton_left">Tam  giac vuong 1</option>
            <option value="triangle_top_right">Tam giac vuong 2</option>
            <option value="isosceles_triangle">Tam giac can</option>
            <option value="exit">Exit</option>
        </select>
        <button type="submit" id="submit">Draw</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $geometry = $_POST["geometry"];
            switch ($geometry){
                case "rectangle":
                    rectangle();
                    break;
                case "triangle_botton_left":
                    triangle1();
                    break;
                case "triangle_top_right":
                    triangle2();
                    break;
                case "isosceles_triangle":
                    isoscelesTriangle();
                    break;
            }
        }

    ?>




</body>
</html>


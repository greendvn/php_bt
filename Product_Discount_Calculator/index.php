
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Discount Calculator</title>
        <style>
            input{
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
        <form method="post" action="display_discount.php">
            <input type="text" name="productDescription" placeholder="Product Description"><br/>
            <input type="number" name="listPrice" placeholder="List Price"><br/>
            <input type="number" name="discountPercent" placeholder="Discount Percent"><br/>
            <button type="submit" id="submit">Caculate Discount</button>
        </form>

    </body>
</html>

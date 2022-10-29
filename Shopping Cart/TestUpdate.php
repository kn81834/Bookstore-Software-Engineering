<!DOCTYPE HTML> 

<html>
    <head>
        <title>CART TEST</title>
    </head>
    <body>
        <form method="POST" action="updateCart.php">
            ITEM_ID : <input type="text" name="Item_ID"><br><br>
            NAME : <input type="text" name="Name"><br><br>
            QUANTITY : <input type="text" name="Quantity"><br><br>
            PRICE : <input type="text" name="Price"><br><br>
            <input type="submit" name="actions" value="Add">
            <input type="submit" name="actions" value="EDIT">
            <input type="submit" name="actions" value="DELETE">
        </form>
    </body>

</html>
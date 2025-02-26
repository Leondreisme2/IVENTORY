<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iventory</title>
</head>
<body>
    
    <h1> IVENTORY </h1>

    <a href="index.php"> Add product </a>
        &nbsp; | &nbsp;
    <a href="view.php"> View Product </a>
    <p> </p>

    <form action="process.php" method="POST">
        <label> Product Name </labe> </br>
        <input type="text" name="pn" required> </p>


        <label> Price </labe> </br>
        <input type="number" name="pr" required> </p>


        <label> Quantity </labe> </br>
        <input type="number" name="qty" required> </p>

        <input type="submit" name="add_product"
        VALUE="ADD PODUCT">
        
    </form>


</body>
</html>
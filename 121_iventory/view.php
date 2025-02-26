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


<h2> Product List </h2>

    <table border="2px solid">
        <tr>
        <th> PRODUCT NAME </th>
        <th> PRICE </th>
        <th> QUANTITY </th>
        <th> ACTION 1 </th>
        <th> ACTION 2 </th>

        </tr>
        <?php
        include "conn.php";
        $get_data = mysqli_query($conn, "SELECT * FROM product");
        while($row = mysqli_fetch_array($get_data)){

        
        ?>

            <tr>
            <td> <?php echo $row['PN']?></td>
            <td> <?php echo $row['Price']?></td>
            <td> <?php echo $row['QTY']?></td>
            <td>UPDATE </td>
            <td>DELETE </td>
            </tr>

            <?php } ?>
    </table>

</body>
</html>
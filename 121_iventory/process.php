<?php
    include "conn.php";
    
    if(isset($_POST['add_product'])){

        $pn = $_POST['pn'];
        $pr = $_POST['pr'];
        $qty =$_POST['qty'];

       // echo $pn."</br>";
       //echo $pr."</br>";
       // echo $qty."</br>";

       $insert = mysqli_query($conn, "INSERT INTO product
       VALUES ('0','$pn','$pr','$qty')");
        if ($insert == true){
            ?>
            <script>   
                alert("Product added Successfully!");
                window.location.href="index.php";
            </script>
            <?php
        }else{
            ?>
            <script>   
                alert("Error Adding!");
                window.location.href="index.php";
            </script>
            <?php

        }
    }


?>
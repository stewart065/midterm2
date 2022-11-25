<?php

        require_once "dbcon.php";
 
    if($_GET){
        $orderp = $_GET['prod'];
        $orderc = $_GET['catn'];
        $orderpr = $_GET['price'];
        $orderqty = $_GET['qtys'];

        $sql = "INSERT INTO `order`( `product`, `category`, `price`, `qty`) VALUES ('$orderp','$orderc','$orderpr','$orderqty')";
        $result = $con->query($sql);

        if($result)
            header("Location: index.php");
        else
            echo "Failed";
    }
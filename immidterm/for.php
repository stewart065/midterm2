<?php
                require_once 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
        body{
            background-color: grey;
        }
        .we{
            position: relative;
            padding: 50px;
            left: -100px;

        }
        .wer{
            position: relative;
        }
        .aw{
            position: absolute;
            top: -159px;
            left: 1120px;
            
        }
        .lk{
            position: relative;
        }
        .rt{
            position: absolute;
            left: 1120px;
            top: -104px;
        }
        .gh{
            position: relative;
        }
        .jy{
            position: absolute;
            left: 1120px;
            top: -54px;
        }
   
</style>

<body>

            <div class="we">
                <form action="">
                            <div class="container">
                            <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Product name</th>
                                        <th scope="col">Category name</th>
                                        <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row"></th>
                                        <?php
                                        $sql = "SELECT * FROM `order` WHERE 1";
                                        $res = $con->query($sql);
                                        
                                        while($row = mysqli_fetch_object($res)){
                                            echo "<tr>";
                                            echo "<td>$row->id</td>";
                                            echo "<td col-3>$row->product</td>";
                                            echo "<td>$row->category</td>";
                                            echo "<td>$row->price</td>";
                                           
                                            echo "</tr>";
                                        
                                        }
                                    
                                    ?>
                                        </tr>
                                                                      
                            </table> 
                            <div class="wer">
                                <button type="button" class="btn btn-primary aw" >ADD CART</button> 
                            </div>
                            <div class="lk">
                                <button type="button" class="btn btn-primary rt" >ADD CART</button>
                            </div>   
                            <div class="gh">
                                <button type="button" class="btn btn-primary jy" >ADD CART</button>
                            </div>
                           
                </form>
                <button type="button" class="btn btn-primary " name="cart" >View Cart</button>
           </div>
           
                

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>           
</body>
</html>
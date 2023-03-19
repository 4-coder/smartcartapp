<?php include("header.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Maggi</h5>
                            <p class="card-text">Price: Rs.40</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                            <input type="hidden" name="Item_Name" value="Maggi">
                            <input type="hidden" name="Price" value="40">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/2.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Salt</h5>
                            <p class="card-text">Price: Rs.50</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                            <input type="hidden" name="Item_Name" value="Salt">
                            <input type="hidden" name="Price" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/3.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Marie Gold</h5>
                            <p class="card-text">Price: Rs.30</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                            <input type="hidden" name="Item_Name" value="Marie Gold">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/4.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Colgate</h5>
                            <p class="card-text">Price: Rs.60</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</a>
                            <input type="hidden" name="Item_Name" value="Colgate">
                            <input type="hidden" name="Price" value="60">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
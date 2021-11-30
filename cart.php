<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("prices", "product");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Товар видалено з корзини...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('php/header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>Моя корзина</h6>
                <hr>

                <?php

                $total = 0;
                $product_array = array();
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                    array_push($product_array,$row['product_name']);
                                }
                            }
                        }
                    }else{
                        echo "<h5>Корзина порожня</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>Інформація про покупку</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Ціна ($count товари)</h6>";
                            }else{
                                echo "<h6>Ціна (0 товарів)</h6>";
                            }
                        ?>
                        <h6>Сума за доставку </h6>
                        <hr>
                        <h6>Загальна сума</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">Безкоштовно</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

            <form action="cart_telegram.php" method="POST">
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ваш номер телефону</label>
      <input type="tel" name="user_phone"  class="form-control" id="inputEmail4" placeholder="+380 092 123 9034" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ваше і'мя та прізвище</label>
      <input type="name" name="user_name" class="form-control" id="inputPassword4" placeholder="Андрій Русланович" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Адресса отримання</label>
    <input type="text" name="user_address" class="form-control" id="inputAddress" placeholder="Адресса" required>
  </div>
 

  <button type="submit" style=" margin: 15px auto;" class="btn btn-primary">Замовити</button>
</form>
            
            

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

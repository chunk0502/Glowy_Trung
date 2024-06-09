<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<?php
session_start();
    include_once 'model/config.php';
    include_once 'model/category.php';
    include_once 'model/product.php';
?>
<body>
    <div class="main-content">
        <div class="row">
            <?php
                foreach($listProduct as $product ){
                        echo    '<div class="column">
                                    <a href="details-product.php?act='.$product['id'].'">
                                        <img class="editP"src="'.$product['img'].'" alt="">
                                    </a>
                                    <div class="product-info">
                                        <div class="product-name">
                                            <a href="">'.$product['name'].'</a>
                                        </div>
                                        <span>'.$product['price'].'</span>
                                    </div>
                                </div>';
                } 
                
                
            ?>     
        </div>
    </div>
    
</body>
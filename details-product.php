<?php
    include_once 'model/config.php';
    include_once 'model/category.php';
    include_once 'model/product.php';
    include 'layout/header.php';
?>

<body>
    <?php
        if(isset($_GET['act'])){
            if(isset($_GET['act'])&&($_GET['act']>0)){
                $id = $_GET['act'];
                $productDetail=getOneProduct($id);
            }
        

            echo    '<div class="product-detail">
                        <div class="detail-left">
                            <img src="'.$productDetail[0]['img'].'" alt="">
                        </div>
                        <div class="detail-right">
                            <h1>'.$productDetail[0]['name'].'</h1>
                            <h2>'.$productDetail[0]['price'].'</h2>
                            <h2>THÔNG TIN SẢN PHẨM</h2>
                            <h3>'.$productDetail[0]['textDetail'].'</h3>
                            <span>Tình trạng: Còn hàng</span>
                            <div class="">
                                <h3>
                                    Kích thước:
                                </h3>
                                    <input type="radio" name="size-product" value="M">M
                                    <input type="radio" name="size-product" value="L">L
                            </div>
                            <div class="soluong show">
                                <span>Số lượng:</span><br>
                                <button type="submit" class="addCart">
                                    THÊM VÀO GIỎ HÀNG
                                </button>
                            </div>
                        </div>
                    </div>';
                       
        }
            
    ?>
    
</body>


<?php include 'layout/footer.php'; ?>


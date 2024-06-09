<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\styles.css">
    <title>ADMIN Glowy</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['level'])&&($_SESSION['level']==1)){
        include 'model/config.php';
        include 'model/category.php';
        include 'model/product.php';
        include 'model/user.php';
        include 'adminHeader.php';
        

        if(isset($_GET['act'])){
            switch($_GET['act']){
                case 'category':
                    // Nhận yêu cầu và xử lí
                    // Lấy ds category
                    $kq=getAll_category();      
                    include "layout/category.php";
                    break;
                
                case 'addCategory':
                    // Nhận yêu cầu và xử lí
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $name=$_POST['name'];
                        addCategory($name); 
                    }
                    // Lấy ds category
                    $kq=getAll_category();      
                    include "layout/category.php";
                    break;
                
                case 'deleteCategory':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        deleteCategory($id);
                    }
                    $kq=getAll_category();
                    include "layout/category.php";
                    break; 

                case 'updateCategoryForm':
                    // Lấy 1 RECORD đúng với 1 id truyền vào
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $kqOne = getOneCategory($id);
                        // Cần danh sách category
                        $kq=getAll_category(); 
                        include "layout/updateCategoryForm.php";
                        break;
                    }
                    if(isset($_POST['id'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        updateCategory($id,$name);
                        // Cần danh sách category
                        $kq=getAll_category(); 
                        include "layout/category.php";
                        break;
                    } 

                case 'product':
                    // Nhận yêu cầu và xử lí
                    $listCategory=getAll_category();
                    // Lấy ds product
                    $kq=getAll_product();      
                    include "layout/product.php";
                    break;

                case 'productAdd':
                    if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                        $id_category=$_POST['id_category'];
                        $name=$_POST['name'];
                        $price=$_POST['price'];

                        $target_dir = "upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img=$target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                        }
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        
                        insert_product($id_category,$name,$price,$img);
                    }
                    // Load danh sach category
                    $listCategory=getAll_category();
                    // Load danh sach prodcut
                    $kq=getAll_product(); 
                    include "layout/product.php";
                    break;
                    
                case 'deleteProduct':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        deleteProduct($id);
                    }
                    $kq=getAll_product();
                    include "layout/product.php";
                    break;     
                

                case 'updateProductForm':
                    // Load danh sach category
                    $listCategory=getAll_category();
                    //Sản phẩm chi tiết theo getId
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $productDetail=getOneProduct($_GET['id']);
                    }
                    // Load sản phẩm
                    $kq=getAll_product(); 
                    include "layout/updateProductForm.php";
                    break;

                case 'product_update':
                    // Load danh sach category
                    $listCategory=getAll_category();
                    //Cập nhập sản phẩm
                    if(isset($_POST['update'])&&($_POST['update'])){
                        $id_category=$_POST['id_category'];
                        $name=$_POST['name'];
                        $price=$_POST['price'];
                        $id=$_POST['id'];
                        if($_FILES["img"]["name"]!=""){
                            $target_dir = "upload/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            $img=$target_file;
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                            }
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);    
                        }
                        else{
                            $img="";
                        }
                        updateProduct($id_category,$name,$img,$price,$id);
                    }
                    // Load sản phẩm
                    $kq=getAll_product(); 
                    include "layout/product.php";
                    break;

                case 'account':
                    include "layout/account.php";
                    break;

                case 'order':
                    include "layout/order.php";
                    break; 
                
                case 'logout':
                    if(isset($_SESSION['level'])) unset($_SESSION['level']);
                    header('location:login.php');
                
                default:
                    include "./layout/category.php";
                    break;    
            }
        }
        else{
            include "./layout/category.php";
        }
    }else{
        header('location:login.php');
    }
?> 
</body>
</html>

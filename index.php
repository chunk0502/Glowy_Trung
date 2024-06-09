<?php
    
    include_once 'model/config.php';
    include_once 'model/category.php';
    include_once 'model/product.php';
    include 'layout\header.php';

    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'Croptop':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $listProduct=getAll_productIndex($id,""); 
                include 'layout\pageProduct.php';
                break;
            
            case 'T-Shirt':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $listProduct=getAll_productIndex($id,"");     
                include 'layout\pageProduct.php';
                break;
            case 'Dress':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $listProduct=getAll_productIndex($id,"");     
                include 'layout\pageProduct.php';
                break;
            case 'Jacket':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                $listProduct=getAll_productIndex($id,"");     
                include 'layout\pageProduct.php';
                break;
            
            default:
                include 'layout\home.php';
                break;    
        }
    }

    if(!isset($_GET['act']))
    include 'layout\home.php';
?>
<?php include 'layout\footer.php'; ?>
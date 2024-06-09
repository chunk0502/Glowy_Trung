<?php
    function updateProduct($id_category,$name,$img,$price,$id){
        $conn = connectDatabase();
        if($img==""){
            $sql = "UPDATE product SET name='".$name."',price='".$price."',id_category='".$id_category."' WHERE id=".$id;
        }
        else{
            $sql = "UPDATE product SET name='".$name."',price='".$price."',id_category='".$id_category."',img='".$img."' WHERE id=".$id;
        }
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function getOneProduct($id){
        $conn = connectDatabase();
        $stmt = $conn->prepare("SELECT * FROM product WHERE ID=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
   

    function insert_product($id_category,$name,$price,$img){
        $conn = connectDatabase();
        $sql = "INSERT INTO product (id_category, name, price,img) VALUES ('$id_category', '$name', '$price','$img')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function deleteProduct($id){
        $conn = connectDatabase();
        $sql = "DELETE FROM product WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getAll_product(){
        $conn = connectDatabase();
        $stmt = $conn->prepare("SELECT * FROM product");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    function getAll_productIndex($listCategory=0,$keyword=""){
        $conn = connectDatabase();
        $sql = "SELECT * FROM product WHERE 1";
        if($listCategory>0) $sql.=" AND id_category=".$listCategory;
        if($keyword!="") $sql.=" AND name like '%".$keyword."%'";
        $sql.=" order by id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>
<?php
    function addCategory($name){
        $conn = connectDatabase();
        $sql = "INSERT INTO category (name) VALUES ('".$name."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function updateCategory($id,$name){
        $conn = connectDatabase();
        $sql = "UPDATE category SET name='".$name."' WHERE id=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function getOneCategory($id){
        $conn = connectDatabase();
        $stmt = $conn->prepare("SELECT * FROM category WHERE ID=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
    
    function deleteCategory($id){
        $conn = connectDatabase();
        $sql = "DELETE FROM category WHERE id=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function getAll_category(){
        $conn = connectDatabase();
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>
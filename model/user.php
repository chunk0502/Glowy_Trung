<?php

    function addUser($fullname,$phone,$email,$password){
        $conn = connectDatabase();
        $sql = "INSERT INTO user(username,phone,email,password) VALUES('$fullname','$phone','$email','$password')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }


    function checkUser($email,$password){ 
        $conn = connectDatabase();      
        $stmt = $conn->prepare("SELECT * FROM user WHERE email='".$email."' AND password='".$password."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['level'];
        else return 0;
    }
?>
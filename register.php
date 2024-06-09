<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản | Glowy</title>
    <link rel="stylesheet" href="assets/css/box-Register.css">
</head>
<body>
 


<?php
    include 'model/config.php';
    include 'model/user.php';
    session_start();
?>

<?php

    if((isset($_POST['register']))&&($_POST['register'])){
        $lastname = $_POST['lastName'];
        $firstname = $_POST['firstName'];
        $fullname = "$lastname"." "."$firstname";
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        addUser($fullname,$phone,$email,$password);

    }
?>

<?php include('layout/header.php');?>
<div class="new-collection box-register">
    <div class="breadcurmb">
        <a href="index.php">
            <span >Trang chủ</span>
        </a>
        <span><i class="ri-arrow-right-s-line"></i></span>
        <span>Đăng ký tài khoản</span>
    </div>  

    <div class="page-register">
        <div class="text-center">
            <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
            <div class="registerBySocial">
                <a><i class="ri-facebook-circle-fill"></i></a>
                <a><i class="ri-google-fill"></i></a>
            </div>
            <div class="line-break">
			    <span>hoặc</span>
		    </div>
        </div>

        <form action="register.php" method="post">
            <div class="row-lastfirstName">
                <fieldset class="form-group row-lastName">
	                <label>HỌ
                        <span class="required">*</span>
                    </label>
	                <input placeholder="Nhập Họ" type="text" class="form-control-lastfirstName" name="lastName">
                </fieldset>
            
                <fieldset class="form-group row-firstName">
                    <label>TÊN
                        <span class="required">*</span>
                    </label>
	                <input placeholder="Nhập Tên" type="text" class="form-control-lastfirstName" name="firstName">
                </fieldset>
            </div>

            <fieldset class="form-group">
	            <label>SỐ ĐIỆN THOẠI
                    <span class="required">*</span>
                </label>
	            <input placeholder="Nhập Số điện thoại" type="tel" class="form-control" name="phone">
            </fieldset>

            <fieldset class="form-group">
	            <label>EMAIL
                    <span class="required">*</span>
                </label>
	            <input placeholder="Nhập Địa chỉ Email" type="email" class="form-control" name="email">
            </fieldset>

            <fieldset class="form-group">
			    <label>MẬT KHẨU<br>
                    <span class="required">*</span>
                </label>
			    <input placeholder="Nhập Mật khẩu" type="password" class="form-control" name="password">
		    </fieldset>
            <input type="submit" name="register" class="btn-register"></input>
            <a href="login.php" class="btn-register-login">ĐĂNG NHẬP</a>
        </form>
    </div>
    

</div>

<?php include('layout/footer.php');?>





</body>
</html>



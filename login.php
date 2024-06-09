<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản | Glowy</title>
    <link rel="stylesheet" href="assets/css/box-login.css">
</head>
<body>

<?php
    session_start();
    include 'model/config.php';
    include 'model/user.php';
    if((isset($_POST['login']))&&($_POST['login'])){        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $level=checkUser($email,$password);
        $_SESSION['level']=$level;
        if($level==1) header("location:admin.php");
        else{
            if($level==0) header("location:index.php");
            $txt_erro ='Email hoặc mật khẩu không tồn tại ';
        }
        }

    ?>
<?php include('layout/header.php');?>
<div class="new-collection box-login">
    <div class="breadcurmb">
        <a href="index.php">
            <span >Trang chủ</span>
        </a>
        <span><i class="ri-arrow-right-s-line"></i></span>
        <span>Đăng nhập tài khoản</span>
    </div>  

    <div class="page-login">
        <div class="text-center">
            <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
            <div class="loginBySocial">
                <a><i class="ri-facebook-circle-fill"></i></a>
                <a><i class="ri-google-fill"></i></a>
            </div>
            <div class="line-break">
			    <span>hoặc</span>
		    </div>
        </div>

        <form action="" method="post">
            <fieldset class="form-group">
	            <label>EMAIL
                    <span class="required">*</span>
                </label>
	            <input placeholder="Nhập Địa chỉ Email" type="text" class="form-control" name="email">
            </fieldset>
            <br>
            <fieldset class="form-group">
			    <label>MẬT KHẨU<br>
                    <span class="required">*</span>
                </label>
			    <input placeholder="Nhập Mật khẩu" type="password" class="form-control" name="password">
		    </fieldset>
            <input type="submit" name="login" class="btn-login"></input><br>
            <?php
                if(isset($txt_erro)&&($txt_erro!="")){
                    echo "<font color='red'>".$txt_erro."</font>";
                }
            ?>
            <div class="text-login text-center">
				<p>
					Bạn chưa có tài khoản. Đăng ký <a href="register.php" title="Đăng ký">tại đây.</a>
				</p>
			</div>
        </form>
    </div>
</div>
<?php include('layout/footer.php');?>
</body>
</html>



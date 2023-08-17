<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["btnDnhap"])){
            $email = $_REQUEST["mail"];
            $pwd = $_REQUEST["pass"];
            if($email == $_SESSION["email"] && $pwd==$_SESSION["matkhau"]){
                echo "Đăng nhập thành công"."<br>";
                $_SESSION["login"] = true;
                echo "<a href='index.php'> vào đây</a> để về trang chủ nếu hệ thống không tự chuyển";
                echo header("refresh:4; url = 'index.php'");
            }
            else{
                echo "<script>alert('Sai thông tin đăng nhập!')</script>";
                echo header("refresh:4; url = 'index.php'");
            }
        }else{
            echo "<script>alert('Bạn không có quyền truy cập!')</script>";
            echo header("refresh:4; url = 'index.php'");
        }
    ?>
</body>
</html>
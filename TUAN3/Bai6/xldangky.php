
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
        if(isset($_REQUEST["btnDKy"]))
        {
            echo "Email: ".$_REQUEST["mail"]."<br>";
            echo "Họ Tên: ".$_REQUEST["ten"]."<br>";
            echo "Địa Chỉ: ".$_REQUEST["dchi"]."<br>";
            echo "Điện Thoại: ".$_REQUEST["dthoai"]."<br>";
            echo "Giới Tính: ".$_REQUEST["gtinh"]."<br>";
            if(count($_REQUEST["sthich"])>0){
                echo "Sở Thích: ";
                foreach ($_REQUEST["sthich"] as $value){
                    echo $value." ";
                }
            }
            $_SESSION["user"] = true;
            $_SESSION["email"] = $_REQUEST["mail"];
            $_SESSION["hoten"] = $_REQUEST["ten"];
            $_SESSION["matkhau"] = $_REQUEST["pass"];
            echo "<br>Chúc mừng bạn đã đăng ký thành công";
            echo "click <a href='index.php'>vào đây</a> để trở về trang chủ nếu hệ thống không tự động chuyển";
            echo header("refresh:4; url = 'index.php'");
        }
        else{
            echo "<script>alert('Bạn không có quyền truy cập!')</script>";
            echo header("refresh:0; url = 'index.php'");
        }
    ?>
</body>
</html>
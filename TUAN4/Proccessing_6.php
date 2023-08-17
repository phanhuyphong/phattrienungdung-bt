<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuàn 4 - Bài 6</title>
</head>
<body>
    <?php
            if( isset($_REQUEST["btnSumbit"]) ){
                $user = $_REQUEST["username"];
                $pwd = $_REQUEST["pwd"];
                if($pwd != '123456'){
                    $_SESSION["username"] = "admin";
                    echo "Đăng nhập không thành công.<a href='Bai_6.php'>Đăng nhập lại</a>";
                }else {
                    echo "<b> Đăng nhập thành công </b>";
                }
            } else {
                echo header("refresh:0,url='Bai_6.php'");
            }
    ?>
</body>
</html>
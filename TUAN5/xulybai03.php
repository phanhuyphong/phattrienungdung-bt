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
        if(isset($_REQUEST["Submit"])){
            $user = $_REQUEST["username"];
            $password = $_REQUEST["pass"];
            if($password != '123456'){
                $_SESSION["username"] = 'admin';
                echo header("refresh:3; url='Bai03.php'")."Đăng nhập sai! Nhập lại";
            }else{
                echo "Đăng nhập thành công";
            }
            
        }else{
            echo header("refresh: 3; url='Bai03.php'");
        }
    ?>
</body>
</html>
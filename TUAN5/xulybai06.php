<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 6</title>
</head>
<body>
    <?php
        $partter = "/([A-Za-z]{1})/";
        if(isset($_REQUEST["submit"])){
            $email = $_REQUEST["email"];
            $pass = $_REQUEST["pass"];
            $re_pass = $_REQUEST["re-pass"];
            //kiểm định dạng
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo header("refresh:3; url='Bai06.php'")."<script>alert('email không hợp lệ')</script>";
            }
            elseif(strlen($pass) < 8 && preg_match($partter,$pass)){
                echo header("refresh:3; url='Bai06.php'")."<script>alert('Mật khẩu không hợp lệ')</script>";

            }elseif($pass != $re_pass){
                echo header("refresh:3; url='Bai06.php'")."<script>alert('Mật khẩu không giống')</script>";
            }
            else{
                echo "<h1>Đăng kí thành công</h1>";
                $myfile = fopen('dangky.txt','w');
                $email = $_REQUEST["email"];
                $pass = $_REQUEST["pass"];
                $txt = "'$email \n $pass'";
                fwrite($myfile,$txt);
                fclose($myfile);
                
            }
        }
    ?>
</body>
</html>
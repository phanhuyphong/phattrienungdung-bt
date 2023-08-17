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
        if(isset($_REQUEST["tbnXem"])){
            $hinh = $_REQUEST["anh"];
            $kichthuoc = $_REQUEST["kthuoc"];
        }
        else{
            echo header("refresh:0; url = index.php");
        }
    ?>
    <img src="<?php echo $hinh ?>"width="<?php echo $kichthuoc ?>" alt="">
</body>
</html>
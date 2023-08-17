<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    <table style="margin:auto; width: 800px; border: 1px solid black ;" >
        <tr>
            <td style="width:30%; vertical-align:top;">
                    <a href="index.php">Trang chủ</a><br>
                    <?php
                        if(isset($_SESSION["login"])){
                            echo "<a href='index.php?tthai=dangxuat'>Đăng xuất</a>";
                        }
                        elseif(isset($_SESSION["user"])){
                            echo "<a href='index.php?tthai=dangnhap'>Đăng nhập</a>";
                        }
                        else{
                            echo "<a href='index.php?tthai=dangky'>Đăng ký</a>";
                        }
                    ?>
            </td>
            <td style="width: 70%;border: 1px solid black; vertical-align:top">
                <?php
                    if(isset($_REQUEST["tthai"])){
                        $tthai = $_REQUEST["tthai"];
                        switch($tthai){
                            case 'dangky': include "dangky.php"; break;
                            case 'xldangky': include "xldangky.php"; break;
                            case 'dangnhap': include "dangnhap.php"; break;
                            case 'xldangnhap': include "xldangnhap.php"; break;
                            case 'dangxuat': include "dangxuat.php"; break;
                        default: echo "Wellcom to PHP class!";
                        }  
                    }else{
                        echo "Wellcom to PHP class!";
                    }
                ?>        
        </td>
        </tr>
</table>
</body>
</html>
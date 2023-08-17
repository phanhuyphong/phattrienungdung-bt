<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 2</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["sothu1"]) && isset($_REQUEST["sothu2"])){
            $sothu1 = $_REQUEST["sothu1"];
            $sothu2 = $_REQUEST["sothu2"];
            $pheptinh = $_REQUEST["pheptinh"];
            if($pheptinh == "Cộng"){
                $tong = $sothu1+$sothu2;
                $ketqua = $tong;
         }
            elseif($pheptinh == "Trừ"){
            $hieu = $sothu1-$sothu2;
            $ketqua = $hieu;
         }
            elseif($pheptinh == "Nhân"){
            $tich = $sothu1*$sothu2;
            $ketqua = $tich;
        }
            elseif($pheptinh == "Chia" && $sothu2 > 0){
            $thuong = $sothu1/$sothu2;
            $ketqua = $thuong;
        }
    }
    ?>
    <center>
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form action="" method="get">
        <table>
            <tr>
                <td>Chọn phép tính: <?php if(isset($pheptinh)) echo $pheptinh ?> </td>
            </tr>
            <tr>
                <td>
                    Số thứ 1:
                </td>
                <td><input type="text" value="<?php if(isset($sothu1)) echo $sothu1 ?>"></td>
            </tr>
            <tr>
                <td>Số thứ 2:</td>
                <td><input type="text" value="<?php if(isset($sothu2)) echo $sothu2 ?>"></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="text" disabled="disabled" value="<?php if(isset($ketqua)) echo $ketqua ?>"></td>
            </tr>
            <tr>
                <td>
                    <p><a href="index.php">Quay lại trang trước</a></p>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>
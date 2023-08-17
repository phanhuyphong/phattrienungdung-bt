<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 6</title>
    <style>
        .style6{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: smaller;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST["hocki1"])&& isset($_POST["hocki2"])){
        $hk1 = $_POST["hocki1"];
        $hk2 = $_POST["hocki2"];
        $dtb = ($hk1+$hk2*2)/3;
        if($dtb >= 5){
           $kq= "Được lên lớp";
         }elseif($dtb < 5){
           $kq= "Ở lại lớp";
        }
        if($dtb >=8){
            $xl = "Giỏi";
        }
        elseif($dtb > 6.5 && $dtb < 8 ){
            $xl = "Khá";
        }
        elseif($dtb > 5 && $dtb < 6.5 ){
            $xl = "Trung bình";
        }
        else{
            $xl = "Yếu";
        }
    }
    ?>
    <center>
        <form action="" name="" method="post">
            
            <table bgcolor="#DB95B8">
                <tr><td colspan="2" bgcolor="#CC3366" align="center" class="style6">
                    <h2>KẾT QUẢ HỌC TẬP</h2>
                </td></tr>
                <tr>
                    <td>Điểm HK1</td>
                    <td><input type="text" name="hocki1" value=<?php if(isset($hk1)) echo $hk1 ?>></td>
                </tr>
                <tr>
                    <td>Điểm HK2</td>
                    <td><input type="text" name="hocki2" value=<?php if(isset($hk2)) echo $hk2 ?>></td>
                </tr>
                <tr>
                    <td>Điểm trung bình</td>
                    <td><input type="number" name="diemtb" disabled="disabled" value=<?php if(isset($dtb)) echo $dtb ?>></td>
                </tr>
                <tr>
                    <td>Kết quả</td>
                    <td><input type="text" name="ketqua" disabled="disabled" value="<?php if(isset($kq)) echo $kq ?>"></td>
                </tr>
                <tr>
                    <td>Xếp loại học lực</td>
                    <td><input type="text" name="xeploai" disabled="disabled" value="<?php if(isset($xl)) echo $xl ?>"></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                        <input type="submit" name="tbnTinh" value="Xem kết quả">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
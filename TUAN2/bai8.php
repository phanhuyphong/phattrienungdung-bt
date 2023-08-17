<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 6</title>
</head>
<body>
    <?php
    if(isset($_POST["giovao"])&& isset($_POST["giora"])){
        $gv = $_POST["giovao"];
        $gr = $_POST["giora"];
        //trong giờ hợp lệ
        if($gv >= 10 && $gv <24 && $gr > 10 && $gr <= 24){
            if($gv < $gr){
                //th1: ca bắt đầu từ 10 - 17
                if($gv <= 17 && $gr <= 17)
                $tt = ($gr - $gv)* 20000;
                elseif($gv >= 17 && $gr <= 17)
                $tt = ($gr - $gv)* 45000;
                else
                {
                    $tt_1 = (17 - $gv) * 20000;
                    $tt_2 = ($gr - 17) * 45000;
                    $tt = $tt_1 + $tt_2;
                }
            }
            elseif($gv > $gr)
                $kq = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc";
        }
        //ngoài giờ hợp lệ
        elseif($gv<10 || $gr < 10 || $gv >24 || $gr > 24){
            $kq = "Đây là giờ nghỉ";
        }
    }
    ?>
    <center>
        <form action="" name="" method="post">
            <table bgcolor="#009fAA">
                <tr><td colspan="2" bgcolor="#006f77" align="center">
                    <h2>TÍNH TIỀN KARAOKE</h2>
                </td></tr>
                <tr>
                    <td>GIỜ VÀO</td>
                    <td><input type="text" name="giovao" value=<?php if(isset($gv)) echo $gv ?>></td>
                </tr>
                <tr>
                    <td>GIỜ RA</td>
                    <td><input type="text" name="giora" value=<?php if(isset($gr)) echo $gr ?>></td>
                </tr>
                <tr>
                    <td>TIỀN THANH TOÁN</td>
                    <td><input type="text" name="tinhtien" disabled="disabled" value="<?php if(isset($tt)) echo $tt ?>"></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                        <input type="submit" name="tbnTinh" value="TÍNH TIỀN">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="text" name ="" disabled="disabled" value="<?php if(isset($kq)) echo $kq ?>" style="width:260px;color:red; text-align: center;"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
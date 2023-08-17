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
    if(isset($_POST["diemtoan"])&& isset($_POST["diemly"]) && isset($_POST["diemhoa"])){
        $dt = $_POST["diemtoan"];
        $dl = $_POST["diemly"];
        $dh = $_POST["diemhoa"];
        $dtong = $dt + $dl + $dh;
        $dchuan = 20;
        if($dtong >= $dchuan && $dt > 0 && $dl > 0 && $dh > 0){
            $kq = "Đậu";
        }else
            $kq = "Rớt";
    }
    ?>
    <center>
        <form action="" name="" method="post">
            <table bgcolor="#DB95B8">
                <tr><td colspan="2" bgcolor="#CC3366" align="center">
                    <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
                </td></tr>
                <tr>
                    <td>Điểm toán</td>
                    <td><input type="text" name="diemtoan" value=<?php if(isset($dt)) echo $dt ?>></td>
                </tr>
                <tr>
                    <td>Điểm Lý</td>
                    <td><input type="text" name="diemly" value=<?php if(isset($dl)) echo $dl ?>></td>
                </tr>
                <tr>
                <tr>
                    <td>Điểm Hóa</td>
                    <td><input type="text" name="diemhoa" value=<?php if(isset($dh)) echo $dh ?>></td>
                </tr>
                <tr>
                    <td>Điểm chuẩn</td>
                    <td><input type="text" name="diemchuan" disabled="disabled" style="color:red;" value=<?php if(isset($dchuan)) echo $dchuan ?>></td>
                </tr>
                <tr>
                <tr>
                    <td>Điểm tổng</td>
                    <td><input type="number" name="diemtong" disabled="disabled" value=<?php if(isset($dtong)) echo $dtong ?>></td>
                </tr>
                <tr>
                    <td>Kết quả thi</td>
                    <td><input type="text" name="ketqua" disabled="disabled" value="<?php if(isset($kq)) echo $kq ?>"></td>
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
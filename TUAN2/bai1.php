<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 1</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["chieudai"]) && isset($_REQUEST["chieurong"])){
        $cd = $_REQUEST["chieudai"];
        $cr = $_REQUEST["chieurong"];
        $dt = $cd*$cr;
    }
    ?>
    <center>
    
        <form name="Shcn" action="#" method="get">
            <table bgcolor="#FFBCA">
                <tr><td colspan="2" bgcolor="#FFCC66">
                    <h2>Diện tích hình chữ nhật</h2>
                </td></tr>
                <tr>
                    <td>Chiều dài</td>
                    <td><input type="number" name="chieudai" value=<?php if(isset($cd)) echo $cd ?>></td>
                </tr>
                <tr>
                    <td>Chiều rộng</td>
                    <td><input type="number" name="chieurong" value=<?php if(isset($cr)) echo $cr ?>></td>
                </tr>
                <tr>
                    <td>Diện tích</td>
                    <td><input type="number" name="dientich" disabled="disabled" value=<?php if(isset($dt)) echo $dt ?>></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnTinh" value="Tinh">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
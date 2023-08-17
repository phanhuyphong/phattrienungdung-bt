<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 5</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["soX"])&& isset($_REQUEST["soY"])){
        $sX= $_REQUEST["soX"];
        $sY= $_REQUEST["soY"];
        $n = -($sY)/$sX;
    }
    ?>
    <center>
        <form action="" name="" method="get">
            <table bgcolor="#FFBCA">
                <tr><td colspan="2" bgcolor="#FFCC66" align="center">
                    <h2>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2>
                </td></tr>
                <tr>
                    <td>Phương trình</td>
                    <td><input type="number" name="soX" value="<?php if(isset($sX)) echo $sX ?>" style="width: 90px;">x + </td>
                    <td><input type="number" name="soY" value="<?php if(isset($sY)) echo $sY ?>" style="width: 50px;" > = 0</td>
                </tr>
                <tr>
                    <td>Nghiệm: </td>
                    <td><input type="text" name="nghiem" disabled="disabled" value="<?php if(isset($n)) echo "x = ".$n ?>"></td>
                </tr>
                <tr>
                   <td colspan="2" align="center">
                    <input type="submit" value="Giải phương trình" >
                   </td> 
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
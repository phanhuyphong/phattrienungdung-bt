<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 2</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["bankinh"])){
        $bk = $_REQUEST["bankinh"];
        
        $dt = $bk * $bk * 3.14;
        $cv = $bk * 2 * 3.14;
    }
    ?>
    
    <center>
        
        <form name="" action="#" method="get">
        <table bgcolor="#FFBCA">
                <tr><td colspan="2" bgcolor="#FFCC66" align="center">
                <h2>Diện tích và Chu vi hình tròn</h2>
                </td></tr>
                <tr>
                    <td>Bán kính</td>
                    <td><input type="number" name="bankinh" value=<?php if(isset($bk)) echo $bk ?>></td>
                </tr>
                <tr>
                    <td>Diện tích</td>
                    <td><input type="number" name="dientich" disabled="disabled" value=<?php if(isset($dt)) echo $dt ?>></td>
                </tr>
                <tr>
                    <td>Chu vi</td>
                    <td><input type="number" name="chuvi" disabled="disabled" value=<?php if(isset($cv)) echo $cv ?>></td>
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
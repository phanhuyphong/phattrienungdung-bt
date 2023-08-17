<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 3</title>
</head>
<body>
    <?php
    if(isset($_REQUEST["canh1"]) && isset($_REQUEST["canh2"]) && isset($_REQUEST["canh3"])){
        $c1 = $_REQUEST["canh1"];
        $c2 = $_REQUEST["canh2"];
        $c3 = $_REQUEST["canh3"];
        
        if(($c1 + $c2 > $c3) && ($c1 + $c3 > $c2) && ($c2 + $c3 > $c1)&&($c1 >0)&&($c2 >0) &&($c3 >0)){
            if(($c1==$c2)&&($c2==$c3)){
               $loai = "Tam giác đều";
            }
            elseif(($c1 == $c2) ||($c1 == $c3) || ($c2 == $c3)&& (pow($c1,2)==pow($c2,2)+pow($c3,2)) || (pow($c2,2)== pow($c3,2)+pow($c1,2))|| (pow($c3,2)==pow($c1,2)+pow($c2,2))){
                $loai = "Tam giác vuông cân";
            }
            elseif(($c1 == $c2) ||($c1 == $c3) || ($c2 == $c3)){
                $loai ="Tam giác cân";
            }
            elseif ((pow($c1,2)==pow($c2,2)+pow($c3,2)) || (pow($c2,2)== pow($c3,2)+pow($c1,2))|| (pow($c3,2)==pow($c1,2)+pow($c2,2))){
                $loai = "Tam giác vuông";
            }
            else 
            $loai = "Tam giác thường";
        }
        else{
            $loai = "Không là tam giác";
        }
    }
    ?>
    <center>
        <form name="" action="bai3.php" method="get">
            <table bgcolor="#FFBCA">
                <tr><td colspan="2" bgcolor="#FFCC66" align="center">
                    <h2>Nhận dạng tam giác</h2>
                </td></tr>
                <tr>
                    <td>Cạnh 1</td>
                    <td><input type="number" name="canh1" value=<?php if(isset($c1)) echo $c1 ?>></td>
                </tr>
                <tr>
                    <td>Cạnh 2</td>
                    <td><input type="numer" name="canh2" value=<?php if(isset($c2)) echo $c2 ?>></td>
                </tr>
                <tr>
                    <td>Cạnh 3</td>
                    <td><input type="number" name="canh3"value=<?php if(isset($c3)) echo $c3 ?>></td>
                </tr>
                <tr>
                    <td>Loại tam giác</td>
                    <td><input type="text" name="loai" disabled="disabled" value="<?php echo $loai ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" name="btnTinh" value="Nhận dạng">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
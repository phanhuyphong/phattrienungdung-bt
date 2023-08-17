<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 2 - Bài 4</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["canhA"]) && isset($_REQUEST["canhB"])){
            $ca = $_REQUEST["canhA"];
            $cb = $_REQUEST["canhB"];
            $ch = sqrt(pow($ca,2)+pow($cb,2));
        }
    ?>
    <center>
        <form name="canhH" action="#" method="get">
        <table bgcolor="#FFBCA">
                <tr><td colspan="2" bgcolor="#FFCC66" align="center">
                    <h2>CẠNH HUYỀN TAM GIÁC VUÔNG</h2>
                </td></tr>
                <tr>
                    <td>Cạnh A</td>
                    <td><input type="number" name="canhA" value=<?php if(isset($ca)) echo $ca ?>></td>
                </tr>
                <tr>
                    <td>Cạnh B</td>
                    <td><input type="number" name="canhB" value=<?php if(isset($cb)) echo $cb ?>></td>
                </tr>
                <tr>
                    <td>Cạnh huyền</td>
                    <td>
                        <input type="number" name="canhhuyen" disabled="disabled" value=<?php if(isset($ch)) echo $ch ?>>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="tbnTinh" value="Tính">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
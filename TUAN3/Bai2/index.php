<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 3 - Bài 2</title>
    <script>
        function calucation(){
            var p = document.getElementById("result").value;
            var q = eval(p);
            document.getElementById("result").value = q;

        }
        function display(value){
            document.getElementById("result").value += value;
        }
    </script>
</head>
<body>
    <?php
        $so1 = $_REQUEST["sothu1"];
        $so2 = $_REQUEST["sothu2"];
        
    ?>
    <center>
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form action="ketqua.php" name="" method="get">
            <table>
                <tr>
                    <td>Cho phép tính: </td>
                    <td><input type="radio" name="pheptinh" value="Cộng">Cộng</td>
                    <td><input type="radio" name="pheptinh" value="Trừ">Trừ</td>
                    <td><input type="radio" name="pheptinh" value="Nhân">Nhân</td>
                    <td><input type="radio" name="pheptinh" value="Chia">Chia</td>
                </tr>
                <table>
                <tr>
                    <td>Số thứ nhất: </td>
                    <td><input type="text" name="sothu1" value=""></td>
                </tr>
                <tr>
                    <td>Số thứ hai: </td>
                    <td><input type="text" name="sothu2" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Tính" name="tbnTinh">
                    </td>
                </tr>
                </table>
            </table>
        </form>
    </center>
</body>
</html>

<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 6</title>
</head>
<body>
<center>
        <form action="Proccessing_6.php" method="post">
            <table>
                <tr>
                    <td>Đăng nhập:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td>
                        <input type="password" name="pwd" id="pwd">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Đăng nhập" name="btnSumbit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
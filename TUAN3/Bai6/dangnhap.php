<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="tthai" value="xldangnhap">
        <table>
            <tr>
                <td colspan="2" style="text-align:center; color: blue">ĐĂNG NHẬP</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="emali" name="mail"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnDnhap" value="Đăng nhập">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
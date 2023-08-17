<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 3</title>
</head>
<body>
    <center>
        <h2>Câu 3: Tạo form nhập liệu</h2>
        <form action="xulybai03.php" name="taoForm">
        <table>
            <tr>
                <td>
                    Username:
                </td>
                <td>
                    <input type="text" name="username" value="" required>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="pass" value="" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="Submit" value="Submit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 9</title>

</head>
<body>
<center>
        <form action="Proccessing_9.php" method="post">
            <table>
                <h1>Nhập họ và tên sinh viên</h1>
                <tr>
                    <td>Họ và tên: </td>
                    <td>
                        <input type="text" name="Name">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh: </td>
                    <td>
                        <input type="date" name="Bday">
                    </td>
                </tr>
                <tr>
                    <td>Lớp: </td>
                    <td>
                        <input type="text" name="Class">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td>
                        <input type="text" name="Address">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Sumbit" name="btnSumbit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
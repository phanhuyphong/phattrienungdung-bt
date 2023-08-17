<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
    <form action="index.php" method="post">
        <input type="hidden" name="tthai" value="xldangky">
        <table>
            <tr>
                <td colspan="2" style="text-align:center; color: blue">
                    THÔNG TIN ĐĂNG KÝ
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="mail" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td>Nhập lại password</td>
                <td><input type="password" name="repass" required></td>
            </tr>
            <tr>
                <td style="color:red">Thông tin cá nhân</td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="ten" required></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="dchi" required></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="tel" name="dthoai" required></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    Nam<input type="radio" name="gtinh" value="nam" checked>
                    Nữ <input type="radio" name="gtinh" value="nu">
                </td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td><input type="checkbox" name="sthich[]" value="Xanh">Xanh
            <input type="checkbox" name="sthich[]" value="Đỏ">Đỏ
        <input type="checkbox" name="sthich[]" value="Vàng">Vàng</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btnDKy" value="Đăng ký">
            <input type="reset" name="reset" value="Nhập lại"></td>
            </tr>
        </table>
    </form>
</body>
</html>
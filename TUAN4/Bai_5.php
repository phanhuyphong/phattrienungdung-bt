<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 5</title>
</head>
<body>
    <?php

        $cookie_Name = "Nguyên";
        $cookie_Value = "Lê Phước Nguyên";

        $expire_Time = time() + 3600;

        setcookie($cookie_Name, $cookie_Value, $expire_Time);

        if (isset($_COOKIE[$cookie_Name])) {
            echo "<b> Tên sinh viên: </b>".$cookie_Name."<br>";
            echo "<b> Tên đầy đủ sinh viên: </b>".$cookie_Value;
        } else {
            echo "Cookie không tồn tại";
        }
        ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 5</title>
</head>
<body>
    <?php
do{
    $x = rand(1,100);
    $y = rand(1,100);
}while($x<=$y);
    echo "Số ngẫu nhiên của x là: ".$x."<br>";
    echo "Số ngẫu nhiên của y là: ".$y."<br>";
    ?>
</body>
</html>
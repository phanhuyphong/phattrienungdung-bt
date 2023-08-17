<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 3</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 8;
    $tong = $a+$b;
    $hieu = $a-$b;
    $tich = $a*$b;
    $thuong = $a/$b;
    $du = $a%$b;
    echo "a + b =".$tong."<br>";
    echo "a - b =".$hieu."<br>";
    echo "a * b =".$tich."<br>";
    if($b==0){
        echo "Không chia được";
    }
    else{
        echo "a / b =".$thuong."<br>";
        echo "a % b =".$du."<br>";
    }
    ?>
</body>
</html>
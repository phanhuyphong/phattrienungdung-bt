<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 6</title>
</head>
<body>
    <?php
        $a = rand(1,100);
        $b = rand(1,100);
        function UCLN($a,$b){
            if($b==0)
                return $a;
            return UCLN ($b, $a%$b);
        }
        function BCNN($a,$b){
            return $a*$b/UCLN($a,$b); 
        }
        echo "UCLN của $a và $b là: ".UCLN($a,$b)."<br>";
        echo "BCNN của $a và $b là: ".BCNN($a,$b)."<br>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 7</title>
</head>
<body>
    <?php
    for($i = 1; $i<100; $i++){
        if($i%2==0){
            echo "<b> $i </b>";
        }
        else{
            echo " $i ";
        }
    }

    ?>
</body>
</html>
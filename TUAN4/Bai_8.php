<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 8</title>
</head>
<body>
    
<?php
    function count_visits() {
        $file = 'Dem.txt';

        $count = 0;
        if (file_exists($file)) {
            $count = (int) file_get_contents($file);
        }

        $count++;
        file_put_contents($file, $count);

        return $count;
    }

    $count = count_visits();
    echo "Số lần truy cập: $count";
    ?>


</body>
</html>
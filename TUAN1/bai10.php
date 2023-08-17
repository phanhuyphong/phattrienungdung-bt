<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 10</title>
</head>
<body>
    <select>
        <?php
        $ngay = getdate();
        $nam = $ngay["year"];
        for($i=1900; $i<=$nam; $i++){
            echo "<option>$i</option>";
        }
        ?>
    </select>
    <select>
        <?php
        $ngay = getdate();
        $nam = $ngay["year"];
        for($i=$nam; $i>=1900; $i--){
            echo "<option>$i</option>";
        }
        ?>
    </select>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 9</title>
</head>
<body>
    <?php
        $myfile = fopen("sinhvien.txt", "w");
        $Name = $_REQUEST["Name"];
        $Bday = $_REQUEST["Bday"];
        $Class = $_REQUEST["Class"];
        $Address = $_REQUEST["Address"];
        $txt = "'$Name \n $Bday \n $Class \n $Address '";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>
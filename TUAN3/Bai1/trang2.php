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
        $FistName = $_REQUEST["fFistName"];
        $LastName = $_REQUEST["fLastName"];
    ?>
    <center>
        <form action="" name="" method="GET">
            <h1>Trang 2.PHP</h1>
            <table>
                <tr>
                    <td> Your Fist name: <?php echo $FistName."<br>" ?></td>
                </tr>
                <tr>
                    <td> Your Last name:<?php echo $LastName."<br>" ?></td>
                </tr>
            </table>
        </form>
    </center>
    
</body>
</html>
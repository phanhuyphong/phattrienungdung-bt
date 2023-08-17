<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Tuần 1 - Bài 8</title>
    <style>
        th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
       <tr>
        <th>i</th>
        <th>i<sup>2</sup></th>
       </tr>
       <?php
    for($i=0;$i<10;$i++){
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>".pow($i,2)."</td>";
        echo "</tr>";
    }
    ?>
    </table>
   
</body>
</html>
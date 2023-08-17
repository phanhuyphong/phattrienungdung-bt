<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 9</title>
    <style>
        th, td{
            border: 1px solid;
        } 
    </style>
</head>
<body>
<table>
       <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung</th>
       </tr>
       <?php
    for($i=0;$i<100;$i++){
        echo "<tr>";
        echo "<td>STT $i</td>";
        echo "<td>Tên sách $i</td>";
        echo "<td>Nội dung $i</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
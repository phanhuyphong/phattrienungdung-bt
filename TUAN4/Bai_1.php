<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tuần 4 - Bài 1</title>
</head>
<body>

	<center>

        <table border=1>
            <tr>
                <td style="color: #00afb9 !important;">Định dạng </td>
                <td style="color: #00afb9 !important;">Hiển thị</td>
            </tr>

        <?php
            echo "<tr><td>d/m/y</td><td>".date("d/m/y")."</td></tr>";
            echo "<tr><td>d/m/Y</td><td>".date("d/m/Y")."</td></tr>";
            echo "<tr><td>d/M/Y</td><td>".date("d/M/Y")."</td></tr>";
            echo "<tr><td>D/M/Y</td><td>".date("D/M/Y")."</td></tr>";
            echo "<tr><td>1/M/Y</td><td>".date("1/M/Y")."</td></tr>";
        ?>
        </table>
    
    </center>
	
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai04t</title>
</head>

<body>
	<?php
		$txtN = $_REQUEST['txtN'];
    ?>
	<center>
    	<form action="ketqua.php" method="get">
        	<table>
            	<tr>
                	<td>Nhập n: </td>
                    <td><input typet="text" name="txtN" /></td>
                </tr>
                <tr>
                	<td>Kết quả: </td>
                    <td><input typet="text" name="kq" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td colspan="2" align="center">
                    	<input type="submit" value="Tính"/>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
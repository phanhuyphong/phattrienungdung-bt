<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai05</title>
</head>

<body>
	<?php
    	if(isset($_REQUEST['txtN'])){
			$txtN = $_REQUEST['txtN'];
			if(!is_numeric($txtN)||$txtN<0){
				header("refresh: 0; url='bai05.php'");
			}else{
				$gt = 1;
				for($i=2; $i<=$txtN; $i++){
					$gt*=$i;
				}
			}
		}
    ?>
    <center>
    	<form action="" method="get">
        	<table>
            	<tr>
                	<td>Nhập n: </td>
                    <td><input typet="text" name="txtN" value="<?php if(isset($txtN)) echo $txtN ?>"/></td>
                </tr>
                <tr>
                	<td>Kết quả: </td>
                    <td><input typet="text" name="gt" disabled="disabled" value="<?php if(isset($gt)) echo $gt ?>"/></td>
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
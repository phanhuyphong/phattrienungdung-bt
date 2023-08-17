<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tuần 3 - Bài 8</title>
</head>

<body>
    	<form name="anh" action="bai8b.php" method="post">
            Chọn hình ảnh
        	<select name="anh" id="">
                <?php
                    foreach(glob("imge/*.*") as $filename){
                        echo "<option value='$filename'>".substr($filename,6)."</option>";
                    }
                ?>
            </select>
            <br>
            Chọn kích thước
            <input type="radio" name="kthuoc" value="200">200
            <input type="radio" name="kthuoc" value="300">300
            <input type="radio" name="kthuoc" value="400">400
            <br>
            <input type="submit" name="tbnXem" value="Xem ảnh">
        </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 3</title>
</head>
<body>
    <center>

        <form action="#" name="pic" method="post">
        <label for="" style="color: #f72585"><h1>Chọn hình ảnh</h1></label>
            <select name="pic">
            <?php
                foreach(glob("image/*.*") as $filename){
                    echo "<option value='$filename'>".substr($filename,6)."</option>";
                }
            ?>
            </select>
            <input type="submit" name="sumbit" value="Xem ảnh">
        </form>

    </center>

    <br>

    <?php
        if(isset($_REQUEST["sumbit"])){
        $Pic = $_REQUEST["pic"];
        echo "<img src='$Pic' width='500px'/>";
    }
    ?>
</body>
</html>
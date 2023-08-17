<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 5 - Bài 4</title>
</head>
<body>
    <center>
        <h2>Câu 4: Tạo trang Upload hình ảnh</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="myFile">
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
    <?php
        include "xulybai04.php";
        $p = new Bai04();
        if(isset($_REQUEST["submit"])){
            $file = $_FILES['myFile'];
            $result = $p->upload($file);
            if($result){
                echo "<script>alert('Upload successfully!')</script>";
            }
        }
    ?>
</body>
</html>
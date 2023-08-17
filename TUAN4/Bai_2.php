<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Tuần 4- Bài 2</title>
</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
</body>
</html>

<?php
    include "Proccessing_2.php";
    $p = new Week_4();

    if(isset($_REQUEST['btnSubmit'])){
        $file = $_FILES['myFile'];
        $result = $p->upload($file);
        if($result){
            echo "<script> alert('Upload successfully!') </script>";
        }
    }
?>
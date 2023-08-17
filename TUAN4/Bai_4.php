<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tuần 4 - Bài 4</title>
</head>
<body>
	<center>
    
        <form name = "picture" action = "#"  method = "post">

            <label for="" style="color: #f72585" ><h1>Chọn thư mục</h1> </label>
        
            <select name="picture" id="pic">
            
                <?php
                
                    $result = scandir("image");
                    $files = array_diff($result , array('.' , '..'));
                    if(count($files) > 0) {
                        foreach($files as $file) {
                            if ( isset($_REQUEST["submit"])) {
                                if( $file == $_REQUEST["picture"] ) {
                                    echo "<option value='$file' selected>".$file."</option>";
                                } else {
                                    echo "<option value='$file'>".$file."</option>";
                                }
                            } else {
                                echo "<option value='$file'>".$file."</option>";
                            }
                        }
                    }
                
                ?>

            </select>

            <input type="submit" name="submit" value="Xem ảnh">

        </form>
    
    </center>
    
    <br>

	<?php
        if ( isset($_REQUEST["submit"]) ) {

            foreach(glob("image/".$_REQUEST["picture"]."/*.*") as $filename) {
                echo "<img src=' $filename ' width='500px'>"."";
            }
			
        }

    ?>
</body>
</html>
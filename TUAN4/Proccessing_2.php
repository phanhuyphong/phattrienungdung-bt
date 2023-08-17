<?php

    class Week_4 {
        function upload($file) {
            $allowtypes = array( 'image/jpg' , 'image/png' , 'image/jpeg' , 'image/gif' );
            if(!in_array($file["type"],$allowtypes)){
                echo "<script>alert('This file is not image format!')</script>";
                return false;
            }

            $maxsize = 10*1024*1024;
            $size = $file["size"];
            if( $size > $maxsize ) {
                echo "<script>alert('This file is too large to upload!')</script>";
                return false;
            }

            $name = date("YmdHis").strstr($file["name"],".");
            $dir = "image/upload/".$name;
            $result = move_uploaded_file($file["tmp_name"], $dir);
            if (!$result) {
                echo "<script>alert('Cannot upload file!')</script>";
            } else {
                echo "<script>alert('Upload seccessfully!')</script>";
            }
            return $result;
        }
    }

?>
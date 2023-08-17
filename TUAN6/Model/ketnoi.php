<?php
    class clsketnoi{
        //hàm kết nối csdl
        function ketnoiDB(& $conn){
            $servername = "localhost";
            $username = "usertest";
            $password = "123456";
            $dbname = "qlbh";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            //set utf-8
            mysqli_set_charset($conn,"utf8");
            //kiêm tra kết nối thành công
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            //echo "Connected successfully<br>";
        }
        //đóng kết nối
        function dongketnoi($conn){
            mysqli_close($conn);
        }
    }
?>
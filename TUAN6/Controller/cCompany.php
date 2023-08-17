<?php
    // include model Company
    include_once("Model/mCompany.php");
    class controlCompany{
        function getAllCompany(){
            //tạo đối tượng đại diện cho modelCompany
            $p = new modelCompany();
            //gọi hàm truy vấn tất cả Company
            $tblCompany = $p->SelectAllCompany();
            //trả dữ liệu để dùng trong View
            return $tblCompany;
        }
    }
?>
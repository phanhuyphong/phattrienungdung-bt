<?php
    //include controller Company
    include_once("Controller/cCompany.php");
    $p = new controlCompany();
    //gọi hàm lấy toàn bộ dữ liệu
    $tblCompany = $p->getAllCompany();
    if($tblCompany){
        //kiểm tra kêt quả
        if(mysqli_num_rows($tblCompany) > 0){
            //duyệt từng dòng
            while($row = mysqli_fetch_assoc($tblCompany)){
                //hiển thị kết quả nhận được
                echo "<a href='index.php?Comp=".$row["CompID"]."'> <br>".$row["CompName"]."</a>";
                }
            }else{
                echo "0 result";
            }
        }else{
            echo "Error";
        }
    
?>
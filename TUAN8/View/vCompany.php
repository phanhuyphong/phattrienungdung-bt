<?php
    //include controller Company
    include_once "Controlled/cCompany.php";
   class viewCompany{
    function viewAllCompany(){
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
    }
    function adminViewAllCompany(){
        $p = new controlCompany();
        $tblCompany = $p->getAllCompany();
        if($tblCompany){
            if(mysqli_num_rows($tblCompany) > 0){
                echo "<h2>Quản lý đơn hàng</h2>";
                echo "<table border='1px solid' style='margin: auto; width=100%'>";
                echo "<tr>
                <td>Company ID</td>
                <td>Company Name</td>
                <td>Company Address</td>
                <td>Company Email</td>
                <td>Action</td>
                </tr>";
                while($row = mysqli_fetch_assoc($tblCompany)){
                    //hiển thị kết quả nhận được
                    echo "<tr>";
                    echo "<td>".$row["CompID"]."</td>";
                    echo "<td>".$row["CompName"]."</td>";
                    echo "<td>".$row["CompAddress"]."</td>";
                    echo "<td>".$row["CompEmail"]."</td>";
                    echo "<td>Sửa | Xóa</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            }
        }
    }
}
?>
<?php
include_once("ketnoi.php");
class modelCompany
{
    function SelectAllCompany()
    {
        $p = new clsketnoi();
        //gọi hàm ketnoiDB; thực hiện kết nối đến csdl và kiểm tra kết nối được không
        if ($p->ketnoiDB($conn)) {
            //lệnh truy vấn toàn bộ dữ liệu
            $string = "SELECT * FROM Company";
            // thực thi lệnh truy vấn, kết quả trả về là một table chứa toàn bộ dữ liệu company
            $table = mysqli_query($conn, $string);
            //đóng kết nối
            $p->dongketnoi($conn);
            //trả dữ liệu thực thi được (để controller nhận và thực thi)
            return $table;
        } else {
            return false;
        }
    }
}
?>
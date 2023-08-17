<?php
    include_once("ketnoi.php");
    class modeProduct{
        //hàm lấy tất cả sản phẩm
        function SelectAllProduct(){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM product";
                $table = mysqli_query($conn,$string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;   
            }
        }
        //hàm lấy tất cả sản phẩm theo công ty
        function SelectAllProductByCompany($comp){
            $p= new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM product where CompID =".$comp;
                $table = mysqli_query($conn, $string); 
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
        //hàm xuất dannh sách trên 1 trang
        function SelectAllProductPage($limit,$count){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                //truy vấn dữ liệu lấy danh sách sản phẩm từ vị trí limit đến count
                $string = "SELECT * FROM product order by ProdID desc limit $limit, $count";
                $table = mysqli_query($conn,$string);
                $p ->dongketnoi($conn);
                return $table;
            }else{
                return false;
            }
        }
    }
?>
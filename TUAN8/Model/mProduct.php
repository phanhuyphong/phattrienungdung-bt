<?php
    include_once "ketnoi.php";
    class modelProduct{
        function SelectAllProduct(){
            $p = new clsKetNoi();
            if($p->ketnoiDB($conn)){
                $query = "SELECT * FROM product";
                $tblProd = mysqli_query($conn, $query);
                return $tblProd;
            }else{
                return false;
            }
        }
        function SelectAllProductByCompany($comp){
            $p = new clsKetNoi();
            if($p->ketnoiDB($conn)){
                $query = "SELECT * FROM product where CompID= ".$comp;
                $tblProdByComp = mysqli_query($conn,$query);
                $p->dongKetNoiDB($conn);
                return $tblProdByComp;
            }else{
                return false;
            }

        }
        function SelectAllProductPage($limit, $count){
            $p = new clsKetNoi();
            if($p->ketnoiDB($conn)){
                //truyn vấn dữ liệu 
                $query = "SELECT * FROM product ORDER BY ProdID desc limit $limit,$count";
                $tblProdPage = mysqli_query($conn, $query);
                $p->dongKetNoiDB($conn);
                return $tblProdPage;
            }else{
                return false;
            }
        }
        function SelectAllProductBySearch($search){
            $p = new clsKetNoi();
            if($p->ketnoiDB($conn)){
                $query = "SELECT * FROM Product WHERE ProdName LIKE '%'.$search.'%'ORDER BY ProdID desc" ;
                $tblProdSearch = mysqli_query($conn, $query);
                $p->dongKetNoiDB($conn);
                return $tblProdSearch;
            }
            else{
                return false;
            }
        }
    }
?>
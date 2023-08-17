<?php
    include_once("Model/mProduct.php");
    class controlProduct{
        //lấy toàn bộ sản phẩm
        function getAllProduct(){
            $p = new modeProduct();
            $tblProduct = $p->SelectAllProduct();
            return $tblProduct;
        }
        function getAllProductByCompany($comp){
            $p = new modeProduct();
            $tblProduct = $p->SelectAllProductByCompany($comp);
            return $tblProduct;
        }
        function countProduct(){
            $p = new modeProduct();
            $tblProduct = $p->SelectAllProduct();
            return mysqli_num_rows($tblProduct);
        }
        function getAllProductPage($page, $count){
            $p = new modeProduct();
            $tblProduct = $p->SelectAllProductPage(($page-1)* $count,$count);
            return $tblProduct;
        }
        
    }
?>
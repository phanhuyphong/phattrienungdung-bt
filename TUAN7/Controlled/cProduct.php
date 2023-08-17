<?php
    include_once "Model/mProduct.php";
    class controlProduct{
        function getAllProduct(){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProduct();
            return $tblProduct;
        }
        function countProduct(){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProduct();
            return mysqli_num_rows($tblProduct);
        }
        function getAllProductByCompany($comp){
            $p = new modelProduct();
            $tblProductByComp = $p->SelectAllProductByCompany($comp);
            return $tblProductByComp;
        }
        function getAllProductPage($page, $count){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProductPage(($page-1)*$count,$count);
            return $tblProduct;
        }
        function getAllProductBySearch($search){
            $p = new modelProduct();
            $tblProductBySearch = $p->SelectAllProductBySearch($search);
            return $tblProductBySearch;
        }
    }
?>
<?php
    include "ketnoi.php";
    class modelCompany{
        function SelectAllCompany(){
            $p = new clsKetNoi();
            if($p->ketnoiDB($conn)){
                $query = "SELECT * FROM company";
                $tblComp = mysqli_query($conn, $query);
                return $tblComp;
            }else{
                return false;
            }
        }
    }
?>
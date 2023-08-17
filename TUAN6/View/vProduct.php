<?php
    include_once("Controller/cProduct.php");
    $p = new controlProduct();
    if(isset($_REQUEST["Comp"])){
        $cty = $_REQUEST["Comp"];
        $tblProduct = $p->getAllProductByCompany($cty);
    }else{
        //gọi hàm getAllProduct
        if(isset($_REQUEST["Comp"])){
            $cty = $_REQUEST["Comp"];
            //gọi hàm getAllProductByCompany
            $tblProduct = $p->getAllProductByCompany($cty);
        }else{
            //gọi hàm getAllProduct
            // $tblProduct = $p->getAllProduct();
            $page = $_REQUEST["page"];
            $count = $p->countProduct();
            $proderpage = 8;
            $tblProduct = $p->getAllProductPage($page,$proderpage);
        }
    }
    if($tblProduct){
        //kiểm tra kết quả trả về khi có dữ liệu
        if(mysqli_num_rows($tblProduct) > 0){
            //tạo biến đếm để kiểm tra hiển thị dữ liệu
            $dem = 0;
            //tạo table hiển thị dữ liệu
            echo "<table style='width:100%'>";
            //duyệt từng dòng
            while($row = mysqli_fetch_assoc($tblProduct)){
                if($dem==0){
                    echo "<tr>";
                }
                echo "<td style='width:25%; height: 100px'>";
                echo "<image width=100px height=150px src='image/'".$row['ProdImage']."'></image>";
                echo "<br>" .$row["ProdName"]."<br>".$row["ProdPrice"];echo "</td>";
                $dem++;
                if($dem%4==0){
                    echo "</tr>";
                    $dem = 0;
                }
            }
            echo "</table>";
        }else{
            echo "0 result";
        }
        // else{
        //     echo "Không có giá trị";
        // }
    }
?>
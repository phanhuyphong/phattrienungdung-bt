<?php
include_once "Controlled/cProduct.php";
class viewProduc
{
    function viewAllProducBySearch($search)
    {
        $p = new controlProduct();
        $tblProductBySearch = $p->getAllProductBySearch($search);
        return $tblProductBySearch;
    }
    function viewAllProductByCompany()
    {
        $p = new controlProduct();
        $dem = 0;
        // $tblProduct = $p->getAllProduct();
        if (isset($_REQUEST["Comp"])) {
            $cty = $_REQUEST["Comp"];
            $tblProduct = $p->getAllProductByCompany($cty);
        } else {
            $tblProduct = $p->getAllProduct();
        }
        if ($tblProduct) {
            if (mysqli_num_rows($tblProduct) > 0) {
                // Hiển thị dữ liệu
                echo "<table>";
                echo "<tr>";
                while ($row = mysqli_fetch_assoc($tblProduct)) {
                    echo "<td style='width:25%; height: 100px'>";
                    echo ("<img src='image/" . $row["ProdImage"] . "'alt='" . $row["ProdName"] . "' width='150px' height ='95px'/><br>");
                    echo ("<b>" . $row["ProdName"] . "</b>");
                    echo ("<br><i>" . $row["ProdPrice"] . "</i>");
                    echo "</td>";
                    $dem++;
                    if ($dem == 5) {
                        echo ("</tr>");
                        echo ("<tr>");
                        $dem = 0;
                    }
                }
                echo "</table>";
            } else {
                echo "Không tìm thấy dữ liệu";
            }
        }
    }
    function viewAllProduct()
    {
        $p = new controlProduct();
        $dem = 0;
        // $tblProduct = $p->getAllProduct();
        if (isset($_REQUEST["Comp"])) {
            $cty = $_REQUEST["Comp"];
            $tblProduct = $p->getAllProductByCompany($cty);
        } else {
            $tblProduct = $p->getAllProduct();
        }
        if ($tblProduct) {
            if (mysqli_num_rows($tblProduct) > 0) {
                // Hiển thị dữ liệu
                echo "<table>";
                echo "<tr>";
                while ($row = mysqli_fetch_assoc($tblProduct)) {
                    echo "<td style='width:25%; height: 100px'>";
                    echo ("<img src='image/" . $row["ProdImage"] . "'alt='" . $row["ProdName"] . "' width='150px' height ='95px'/><br>");
                    echo ("<b>" . $row["ProdName"] . "</b>");
                    echo ("<br><i>" . $row["ProdPrice"] . "</i>");
                    echo "</td>";
                    $dem++;
                    if ($dem == 5) {
                        echo ("</tr>");
                        echo ("<tr>");
                        $dem = 0;
                    }
                }
                echo "</table>";
            } else {
                echo "Không tìm thấy dữ liệu";
            }
        }
    }
    function adminAllProduct()
    {
        $p = new controlProduct();
        $tblProduct = $p->getAllProduct();
        if ($tblProduct) {
            if (mysqli_num_rows($tblProduct) > 0) {
                echo "<h2>Quản lý đơn hàng</h2>";
                echo "<table border='1px solid' style='margin: auto; width=100%'>";
                echo "<tr>
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Product Pice</td>
                <td>Product Image</td>
                <td>Product Description</td>
                <td>Company ID</td>
                <td>Action</td>
                </tr>";
                while ($row = mysqli_fetch_assoc($tblProduct)) {
                    //hiển thị kết quả nhận được
                    echo "<tr>";
                    echo "<td>" . $row["ProdID"] . "</td>";
                    echo "<td>" . $row["ProdName"] . "</td>";
                    echo "<td>" . $row["ProdPrice"] . "</td>";
                    echo "<td>" . "<img src='image/" . $row["ProdImage"] . "'alt='" . $row["ProdName"] . "' width='150px' height ='95px'/><br>" . "</td>";
                    echo "<td>" . $row["ProdDescription"] . "</td>";
                    echo "<td>" . $row["CompID"] . "</td>";
                    echo "<td>Sửa | Xóa</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
        }
    }
}

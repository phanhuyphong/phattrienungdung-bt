<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table border="1px solid" style="margin: auto; text-align: center; width: 960px;">
        <tr class="normal">
            <td colspan="2">Banner</td>
        </tr>
        <tr class="normal">
            <td colspan="2" style="text-align: left;">
               <a style="text-decoration: none;" href="index.php">Trang chủ</a> |<a style="text-decoration: none;" href="admin.php">Quản lý</a> 
            </td>
        </tr>
        <tr class="_normal">
            <td id="left" style="width: 20%; text-align:left;">
                <p><a href="admin.php?aComp">Quản lý công ty</a></p>
                <p><a href="admin.php?aProd">Quản lý sản phẩm</a></p>
            </td>
            <td id="main">
                <?php
                
                    if(isset($_REQUEST["aComp"])){
                        //hiển thị danh sách công ty
                        include_once "View/vCompany.php";
                        $p = new viewCompany();
                        $p->adminViewAllCompany();

                    }elseif(isset($_REQUEST["aProd"])){
                        //hiển thị danh sách sản phẩm
                        include_once "View/vProduct.php";
                        $p = new viewProduc();
                        $p ->adminAllProduct();
                    }else{
                        echo "Wellcom to admin";
                    }
                ?>
            </td>
        </tr>
        <tr class="normal">
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>
</html>
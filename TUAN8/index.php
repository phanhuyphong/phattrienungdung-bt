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
    <table border="1px solid" style="margin: auto; text-align: center; width: 960px">
        <tr class="normal">
            <td colspan="2">Banner</td>
        </tr>
        <tr class="normal">
            <td colspan="2">
                <div style="text-align:left"> <a style="text-decoration: none;" href="index.php">Trang chủ</a> |<a style="text-decoration: none;" href="admin.php">Quản lý</a>
            </div>
            <div id="menu-right" style="text-align: right;">
                    <form action="#" method="get">
                        <input type="text" name="txtSearch" value="">
                        <input type="submit" name="btnSubmit" value="Tìm kiếm">
                    </form>
                </div>
            </td>
        </tr>
        <tr id="left" class="_normal">
            <td id="left" style="width: 200px">
                <?php
                    include_once "View/vCompany.php";
                    $p = new viewCompany();
                    $tblViewComp = $p->viewAllCompany();
                ?>
            </td>
            <td id="main">
                <?php
                include_once "View/vProduct.php";
                $p = new viewProduc();
                if (isset($_REQUEST["Comp"])) {
                    $p->viewAllProductByCompany($_REQUEST["Comp"]);
                }else {
                    $p->viewAllProduct();
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
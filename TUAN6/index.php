<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid" style="margin: auto; text-align: center; width: 960px">
        <tr class="normal">
            <td colspan="2">Banner</td>
        </tr>
        <tr class="normal">
            <td colspan="2">Top menu</td>
        </tr>
        <tr class="_normal">
            <td id="left" style="width: 200px">
                <?php
                    include_once("View/vCompany.php");
                ?>
            </td>
            <td id="main">
                <?php
                    include_once("View/vProduct.php")
                ?>
            </td>
        </tr>
        <tr class="normal">
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>
</html>
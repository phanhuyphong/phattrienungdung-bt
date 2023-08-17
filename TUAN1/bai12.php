<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 1 - Bài 12</title>
</head>
<body>
    <?php
    $phantu = 5;
    $arr = array();

    function nhapmang($phantu, & $array){
        for($i=0; $i<$phantu; $i++){
            $array[$i] = rand(50 ,200);
        }
    }
    function xuatmang($phantu, $array){
        for($i=0; $i<$phantu;$i++){
            echo " $array[$i] ";
        }
    }
    function xuatmangnguoc($phantu, $array){
        for($i=$phantu-1; $i>=0;$i--){
            echo " $array[$i] ";
        }
    }
    function demchan($phantu, $array){
        $dem = 0;
        for($i=0;$i<$phantu;$i++){
            if($array[$i]%2==0){
                $dem++;
            }
        }
        return $dem;
    }
    function tongle($phantu, $array){
        $tong =0;
        for($i=0; $i<$phantu;$i++){
            if($array[$i]%2!=0){
                $tong +=$array[$i];
            }
        }
        return $tong;
    }
    
    //tạo mảng
    echo "Các giá trị của mảng: ";
    nhapmang($phantu, $arr)."<br>";
    //
    xuatmang($phantu, $arr)."<br>";
    //Đếm các số chẵn
    echo "<br>Có ".demchan($phantu, $arr)." số chẳn trong mảng"."<br>";
    //Tổng lẻ
    echo "Tổng các số lẻ: ".tongle($phantu,$arr)."<br>";

    echo "Giá trị nhỏ nhất trong mảng: "."<b>".min($arr)."</b>"."<br>";
    echo "Giá trị lớn nhất trong mảng: "."<b>".max($arr)."</b>"."<br>";
    //mảng ngược
    echo "Các giá trị của mảng ngược: ";
    xuatmangnguoc($phantu, $arr);
   
    ?>
</body>
</html>
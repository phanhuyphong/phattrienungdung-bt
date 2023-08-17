<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuần 4 - Bài 7</title>

</head>
<body>
    <?php
        $myfile = fopen("filetext.txt", "w") or die("Unable to open file!");
        $txt = "
        Why is my verse so barren of new pride,\n
        So far from variation or quick change?\n
        Why with the time do I not glance aside\n
        To new-found methods, and to compounds strange?\n
        Why write I still all one, ever the same,\n
        And keep invention in a noted weed,\n
        That every word doth almost tell my name,\n
        Showing their birth, and where they did proceed?\n
        O! know sweet love I always write of you,\n
        And you and love are still my argument; \n
        So all my best is dressing old words new,\n
        Spending again what is already spent:\n
        For as the sun is daily new and old,\n
        So is my love still telling what is told.\n
        ";
        fwrite($myfile, $txt);
        $txt = "<b>Faculty of IT\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        
    ?>
    <?php
    $read = file('filetext.txt');
    foreach ($read as $line) {
        echo $line ."<br>";
    }

?>
</body>
</html>
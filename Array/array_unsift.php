<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tims = ['rida','nakisa','murad','kinou'];
    array_unshift($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
    ?>
</body>
</html>
digunakan untuk memasukkan value ke sebuah array tetapi disimpan di paling awal / ujung kiri.
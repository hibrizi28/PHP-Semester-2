<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tims = ['edi','riko','ajax','ahmad'];
    array_pop($tims);
    foreach ($tims as $value) {
        echo $value.'<br>';
    }
    ?>
</body>
</html>

Fungsi dari array pop adalah untuk menghapus isi array paling akhir.
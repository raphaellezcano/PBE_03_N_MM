<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo_notas</title>
</head>
<body>
    <h1>calculo_notas</h1>
    <?php
    echo "<pre>" ;print_r($REQUEST);echo"</pre>";
    $Nome=$_POST["Nome"];
    $RA=$_POST["RA"];
    $av1=$_POST["AV1"];
    $av2=$_POST["AV2"];
    $media=($av1+$av2)/2;
    echo "<h1>$Nome, sua média é:<br><h1>$media</h1>"
    ?>
    
</body>
</html>
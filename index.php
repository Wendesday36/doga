<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $tomb1 = array("Nagy Tibor",'Szabó Ákos','Kovács Géza','Hofi Géza');

    $tomb2 = array(
    'Nagykan',
    'Kőszeg',
    'Tata',
    'Gárdony'
    
    );
    $tomb3 = array(
        200,
        199,
        200,
        10
        
    );
     
    echo"<table><tr><th>Név</th><th>Város</th><th>Busz Sorszáma</th></tr>";
       for ($i = 0;$i < count($tomb1);$i++){
       print_r(("<tr><td>$tomb1[$i]</td><td>$tomb2[$i]</td><td>$tomb3[$i]</td></tr>"));
           /*  echo "<br>"; */
       }
        
        echo"</table>";
    ?>
</body>
</html>
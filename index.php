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
     

        echo"<tr><th>Név</th><th>Város</th><th>Busz Sorszáma</th></tr>";
        while ($sor = $phpTomb->fetch_assoc()){
            
           
            echo "<tr><td>$tomb[1]</td>";
            echo "<td><img src = \"forras/$sor[$oszlop2]\" alt=\"kártya képe\"></td></tr>";
           /*  echo "<br>"; */
           
        }
        echo"</table>";
    ?>
</body>
</html>
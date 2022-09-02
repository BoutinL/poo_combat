<?php    
    require("./classes/combattant.class.php");  
    require("./classes/spécialisation/archer.class.php");
    require("./classes/spécialisation/épéiste.class.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation de combats</title>
</head>
<body>
    <h1>Simulation de combats</h1>
    <h2>Combat: un coup chacun</h2>
    <?php
        $archer = new Archer;
        $epeiste = new Epeiste;

        while ($archer -> pv > 0 && $epeiste -> pv > 0) {
            // Attaque archer
            $archer -> defendre($epeiste);
            echo "Archer : ".$archer -> pv." pv restant. <br>";
            // Attaque épeiste
            $epeiste -> defendre($archer);
            echo "Epeiste : ".$epeiste -> pv." pv restant. <br><br>";
        }
        // Qui est le gagnant
        if ($archer -> pv<0) {
            echo "Archer a gagné, il lui reste ".$archer -> pv." PV.";
        }
        else{
            echo"Epéiste a gagné, il lui reste ".$epeiste -> pv." PV.";
        }
    ?>
    <h2>Combat: trois coups chacun</h2>
    <?php

    ?>
</body>
</html>
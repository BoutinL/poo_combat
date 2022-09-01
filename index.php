<?php    
    require("./classes/combattant.class.php");  
    require("./classes/spécialisation/arché.class.php");
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
    <?php
        $arche=new Arche;
        $epeiste=new Epeiste;

        while ($arche -> pv > 0 && $epeiste -> pv > 0){
            $arche->defendre($epeiste);
            echo "Arché pv: ".$arche->pv."<br>";
            $epeiste->defendre($arche);
            echo "Epeiste pv: ".$epeiste->pv."<br>";
        }
        if ($arche->pv<0) {
            echo "Arché a gagné, il lui reste ".$arche->pv." PV.";
        }
        else{
            echo"Epéiste a gagné, il lui reste ".$epeiste->pv." PV.";
        }
    ?>
</body>
</html>
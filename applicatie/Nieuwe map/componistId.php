<?php

$melding = 'Gegevens worden nog niet verwerkt';

if(isset ($_POST["opslaan"])){
    $componistId = $_POST["componistId"];
    $naam = $_POST["naam"];
    $geboortedatum = $_POST["geboortedatum"];
    $schoolId = $_POST["schoolId"];

    if(empty($schoolId)) {
        $schoolId = null;
    }

    $meldingen = valideercomponist($componistId, $naam, $geboortedatum, $schoolId, $db);

    if(count($meldingen) == 0 ){
        
    }
}


function valideercomponist($componistId, $naam, $geboortedatum, $schoolId, $db){
    $meldingen = [];

    if (!is_numeric($componistId)){
        $meldingen["componistId"] = "Opgegeven componistId is niet numeric";
    }

    if(empty($naam)){
        $meldingen["naam"] = "";
    }

    if(empty($geboortedatum)){
        $meldingen["geboortedatum"] = "";
    }

    if(!is_numeric($schoolId)){
        $meldingen["schoolId"] = "";
    }

    return $meldingen;
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componinst - nieuw</title>
    <link href="css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?= $melding ?>
</body>
</html>
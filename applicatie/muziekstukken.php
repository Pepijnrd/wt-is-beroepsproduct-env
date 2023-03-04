<?php
    require_once 'db_connectie.php';

    $db = maakVerbinding();

    $genre = $_GET['genre'];

    function maakGenreDropDown($genre){
        $html = '<select name=\'genre\'>';
// een query
        $sql = 'select * from genre';
        $data = $db ->query($sql);
// reesultaten van de query uit db halen
// foreach door der resultaten
        while($row = $data->fetch()){

        $html = '<option value=\'' . $genre . '\'>option</option>';

        }
        $html .= '</select>';
        return $html;
    }

    function muziek($data){
        $html = "<table>";
        while($row = $data->fetch()){
            var_dump($row);
            $html .= "<tr>" . 
            "<th>" .
            $row['stuknr'] .
            $row['omschrijving'] .
            $row['genrenaam'] . 
            $row['componistId'] .
            "</th>" .
            "</tr>";
        }
        $html .= "</table>"; 
        return $html;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muziekstukken</title>
</head>
<body>
    <?= muziek($data) ?>
        <form action="GET" >
            <?= maakGenreDropDown($genre); ?>
        </form>

</body>
</html>            
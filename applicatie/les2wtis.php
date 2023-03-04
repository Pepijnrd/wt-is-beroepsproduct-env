<?php
$weekdagen = [ 
     0 => "zondag",
     1 => "maandag",
     2 => "dinsdag",
     3 => "woensdag",
     4 => "donderdag",
     5 => "vrijdag",
     6 => "zaterdag"
];



 $vandaag = date_create('now');

 $datumFormatted = $vandaag->format('d-m-y');
 $weekday = $vandaag->format('w');

//  $staatVanWeekend = "";
//  if ($weekdag == 0 || $weekdag == 6){
//     $staatVanWeekend = 'jaaa, het is weekend!';
//  }
//  if ($weekdag == 1 || $weekdag == 2){
//     $staatVanWeekend = 'nog lang niet';
//  }
//  if ($weekdag == 3 || $weekdag == 4){
//     $staatVanWeekend = 'nog eventjes';
//  }
//  if ($weekdag == 5){
//     $staatVanWeekend = 'Bijna!!';
//  }

 
 switch ($weekday) {
    case 0:
        $staatVanWeekend = 'jaaa, het is weekend!';
        break;
    case 1:
        $staatVanWeekend = 'nog lang niet';
        break;
    case 2:
        $staatVanWeekend = 'nog lang niet';
        break;
    case 3:
        $staatVanWeekend = 'nog eventjes';
        break;
    case 4:
        $staatVanWeekend = 'nog eventjes';
        break;
    case 5:
        $staatVanWeekend = 'bijna';
        break;
    case 6:
        $staatVanWeekend = 'jaaa, het is weekend!';
        break;
    default:
        break;
 }
 
?>

<html>
<head>

</head>
<body>
    <h1>Is het al weekend?</h1>
    <p>vandaag is <?=$datumFormatted?></p>
    <p>Dag van de week: <?=$weekday , $staatVanWeekend?></p>
</body>

</html>
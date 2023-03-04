<?php
    $etenEnDrinken = [ 
        'eten' =>[
              'Shoarma' => '6.95',
              'Appels' => '10.95',
              'Tabouleh' => '8.95',
              'Hamburger' => '5.50'
        ], 
        'drinken' =>[
              'Cola'=>'2.00',
              'Ayran'=>'2.30',
              'Fernandes'=>'2.50',
              'Bier'=>'5.50'
        ],
        'toetjes' => [
          'dame blanche' => 4.5,
          'koffie met sterke drank en slagroom' => 3.25,
          'tiramisu' => 5.5
        
        ]
    ];

    
   
   function maakMenuLijst($lijst, $gewensteSoort){
      $etenFormatted = "";
      foreach ($lijst as $soort => $items) 
      {
          if ($soort == $gewensteSoort || $gewensteSoort == 'alle') {
            $etenFormatted .= "<h2>$soort</h2>";

            $etenFormatted .= maakLijst();
            
          }
      }
      return $etenFormatted;
   }

   function maakLijst($items){
      $etenFormatted .= "<ul>";
      foreach ($items as $naam => $prijs) {
        $prijsFormatted = number_format($prijs, 2, ',', '.');
          $etenFormatted .= "<li>$naam &euro;$prijsFormatted</li>";
      }  
      $etenFormatted .= "</ul>";
      return $etenFormatted;
   }
   
   function maakKop($tekst, $niveau){

   }

   if( isset($_SET["sorteren"]) && $_GET["sorteren"] == "ja"){
    arsort($etenEnDrinken['eten']);
    arsort($etenEnDrinken['drinken']);
    arsort($etenEnDrinken['toetjes']);
   }
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <title>Restaurantmenu</title>
    <style>
      td:first-child {
        width: 8em;
      }
      td:nth-child(2) {
        font-style: italic;
        text-align: right;
        width: 4em;
      }
    </style>
  </head>
  <body>
    <h1>Menu</h1>
    <section>
    <?php= $etenFormatted ?>
    </section>
  </body>
</html>


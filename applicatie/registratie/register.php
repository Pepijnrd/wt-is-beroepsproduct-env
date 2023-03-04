<?php
    $username = "";
    $firstname = "";
    $lastname = "";
    $email = "";
    $pass = "";
    $pass_repeat = "";


    if(isset($_POST["username"])){
        $username = $_POST["username"];
        if(check($username) == "fout"){
            printf("Username mag geen cijfer bevatten.");
        } else {
            printf("Username is geaccepteerd.");
        }
    }

    if(isset($_POST["pass"]) && isset($_POST["pass_repeat"])){
        $pass = $_POST["pass"];
        $pass_repeat = $_POST["pass_repeat"];

        if ($pass == $pass_repeat && $pass != ""){
            printf("Wachtwoord geaccepteerd.");
        } else{
            printf("Wachtwoorden komen niet overeen");            
        }
    }



    function check($username){
     $woordgesplit = str_split($username);
     $accepteer = "goed";
     foreach($woordgesplit as $inhoud){
       if(is_numeric($inhoud)){
        $accepteer = "fout";
       }
     }
  return $accepteer;
}


?>
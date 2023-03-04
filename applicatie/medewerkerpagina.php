<?php 

    session_start();

    $loggedin = false;
    if(isset($_POST["username"]) && isset($_POST["password"])){// als username en password een waarde hebben gekregen dan is de if true.
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "pepijn" && $password == "123"){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $loggedin = true;
            

    }else{
        $username = "";
        $password = "";
    }
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <link rel="stylesheet"  href="stylingberoepsproduct.css">
    <meta charset="utf-8">
    <style>
   
    </style>
    <title>medewerker</title>
</head>

<body>
    <header class="hoofdbalk">
        <h1><a class="homelogo" href="home.html">GELRE</a></h1>
        <div class="kopjes">
            <a class="vluchten" href="vluchten.html">Vluchten</a>

            <a class="info" href="info.html">Info</a>
            <a class="medewerker" href="medewerkerpagina.html">Medewerkers</a>
        </div>
    </header>
        <fieldset class="medewerklogin">
            <?php
                if(!$loggedin){
                echo "Inloggen";
                $username = "";
                $password = "";
            ?>
        <form method="post" action="medewerkerpagina.php">
            <ul>
                <li>
                    <label for="naam">Naam</label>
                    <input type="text" name="username" required>
                </li>
                <li>
                    <label for="wachtwoord">Wachtwoord</label>
                    <input type="password" name="password" required>
                </li>
                <li>
                    <input type="submit" value="Inloggen">
                </li>
            </ul>   
        </form>
        <?php
                }else{
                echo "U bent ingelogged";
            ?>
            <br>
            <a href="medewerkerinterface.php">medewerkerpagina</a>
            <?php
                }
            ?>
    </fieldset>
</body>
</html>
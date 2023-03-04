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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p>
        <?php 
            if ($loggedin) {
                echo "je bent ingelogged " . $username;
            } else{
                echo "je bent niet ingelogged";
                $username = "";
                $password = "";
            }
        ?>
    </p>
    <?php 
    if(!$loggedin){
            
    ?>
    <form method="post" action="les4wtis.php">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="login">
    </form>
    <?php
    }
    ?>
    <a href="les4wtis.php">Log uit</a>
</body>
</html>


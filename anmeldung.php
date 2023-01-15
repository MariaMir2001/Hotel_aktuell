<?php

session_start();



//Formular keine leeren Felder
$errors = [];
$errors["mail"] = false;
$errors["username"] = false;
$errors["agree"] = false;
$errors["password"] = false; 


if ($_SERVER["REQUEST_METHOD"] == "POST") { //Fehlermeldungen, falls Felder leer sind
   
    if (empty($_POST["mail"])) {
        $errors["mail"] = true;
    }

    
    if (empty($_POST["username"])) {
        $errors["username"] = true;
    }

    if (empty($_POST["password"])) {
        $errors["password"] = true;
    }

    if (!isset($_POST["agree"])) { 
        $errors["agree"] = true;
    }
}


//Login:
if ($_SERVER["REQUEST_METHOD"] == "POST" ) { 

    require_once('mysql.php'); 
    $tab = []; 

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    
    $sql = $mysql->prepare("SELECT id, username, password, email, admin, inaktiv FROM `users` WHERE `username` = ? ");
    $sql->bind_param("s", $username); //bind parameter = 
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($tab["id"], $tab["username"], $tab["password"], $tab["email"], $tab["admin"], $tab["inaktiv"]);
    $sql->fetch();
    $sql->close();
    $mysql->close();
   

    $id = $tab["id"];
    $admin = $tab["admin"]; //fängt den boolean wert des admins ab 
    $inaktiv = $tab["inaktiv"];

    $username = $tab["username"];

    if ($tab["inaktiv"] == 1){
        echo "Dieser User wurde gesperrt. Bitte kontaktieren Sie den Admin";
    }

   

    if ($tab["username"] == $username && password_verify($password, $tab["password"]) && $tab["inaktiv"] == 0) {


        echo "erfolgreich eingeloggt"; 

         //session für user starten

        if (
            $tab["admin"] == 0  )   
         {
            $_SESSION["name"] =$username;
            $_SESSION["admin"] = 0; 
        
            echo "Session für einen User gestartet";
            header("Location: startseite.php");
    
          }

          //session für admin starten
          if (
            $tab["admin"] == 1  )    
         {
            $_SESSION["name"] = $username;
            $_SESSION["admin"] = 1; 
            echo "Session für einen Admin gestartet"; 
            header("Location: startseite.php");
            
    
          }

        }

}

//adaptiert die navbar an den user
//include ("adapt_nav.php"); 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <title>Anmeldung</title>
</head>


</div>
 
    <!--- <- lEITET dich auf diese Seite weiter--->
<body> 
<?php
include ("adapt_nav.php"); 
?>
         
      
     
<title>Anmeldung</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Anmeldung</h1>
            </div>
        </div>
       
    
        <form method="post">

        

            <!--- Email - Adresse  !--->
            <div class="form-floating mb-3">
                <input type="email" class="form-control <?php if ($errors['mail']) echo 'is-invalid'; ?>" name="mail" id="mail" placeholder="MaxM@gmx.com" >
                <label for="mail">E-Mail</label>
            </div>

            <!--- Username !--->
            <div class="form-floating mb-3">
                <input type="text" class="form-control <?php if ($errors['username']) echo 'is-invalid'; ?> " name="username" id="username" placeholder="Username" > <!--- Damit es rot wird, wenn der Username leer ist --->
               
                <label for="username">Username</label>

            </div>
            <!--- Passwort 1 --->

            <div class="form-floating mb-3">
                <input type="password" name="password" id="password" class="form-control"><?php if ($errors['password']) echo 'is-invalid'; ?>
                                                                      
                <label for="password">Passwort</label>
            </div>


            <!--- AGB Button--->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input <?php if ($errors['agree']) echo 'is-invalid'; ?>" name="agree" id="agree">
                <label class="form-check-label" for="agree">Hiermit bestätige ich die AGB's gelesen und verstanden zu haben.</label>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
   

   
    </div>


</body>

</html>
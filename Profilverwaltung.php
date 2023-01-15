<?php
session_start(); 

//Errorarray, falls Daten falsch eingegeben wurden
$errors = []; 
$errors["password"] = false; 
$errors["password2"] = false;
$errors["inaktiv"] = false; 

    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pw1 = $_POST["password"];
    $pw2 = $_POST["password2"];
    $error = "Die Passwörter stimmen nicht überein";   
}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href = "hilfeseite.css">
    <title>Profilverwaltung</title>
</head>
<body>

<?php
include ("adapt_nav.php"); 
?>
           
      

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Profilverwaltung</h1>
            </div>
        </div>
        <form method="post">

        <?php

        //wenn ein Admin eingeloggt ist
      if(isset($_SESSION) && $_SESSION["admin"] == 1){

      require_once("mysql.php");

      //Alte Daten: 
      $tab = []; //leeres Array, um die Daten der sql abfrage zu speichern
      $sql = $mysql->prepare ("SELECT vorname, nachname, id,username, email, inaktiv FROM users where id = 1"); 
       $sql->execute();
       $sql->store_result();
       $sql->bind_result($tab["fname"], $tab["lname"], $tab["id"],$tab["username"],$tab["useremail"],$tab["inaktiv"]); 
       $sql->fetch();
    
    

            //Wenn Form gepostet, dann Daten verändern
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                //Userdaten verändern.

                //change firstname
                if(!empty($_POST["fn"])){
                    $fname = $_POST["fn"];
                }
                else{
                    $fname = $tab["fname"]; 
                }

                //change lastname
                if(!empty($_POST["ln"])){
                    $lname = $_POST["ln"];
                }
                else{
                    $lname = $tab["lname"]; 
                }



              
                //change username
                if (!empty($_POST["username"])){
                   $username = $_POST["username"]; 
                 }
                 else{
                     $username = $tab["username"]; 
                 }
                 
                 //change password
         
                 //Password 1 und 2 beide eingesetzt und übereinstimmend- 
                 if (!empty($_POST["password"]) && !empty($_POST["password2"]) && $_POST["password"] == $_POST["password2"]){
                 
                     $password = $_POST["password"]; 
                   }
                   else{
         //wenn kein passwort eingesetzt wird, dann wird ein gehashtes pw gehasht. Ich kann diese funktion einfach auf eine andere Website verlagern. 
                       $password = $tab["password"]; 
                   }
         
                 
                  //E-Mail change
         
                  if (!empty($_POST["email"])){
                     $email = $_POST["email"]; 
                   }
                   else{
                       $email = $tab["useremail"]; 
                   }
         
                   //inaktivität change
         
                   if (!empty($_POST["inaktiv"])){
                     $inaktiv = $_POST["inaktiv"]; 
                   }
                   else {
                     $inaktiv = $tab["inaktiv"]; 
                   }
                   
               
           
                   $hash = password_hash($password, PASSWORD_BCRYPT);
                  
                   $stmt = $mysql->prepare("UPDATE users SET vorname = '$fname' , nachname = '$lname' , username='$username', email = '$email', inaktiv = '$inaktiv' , password = '$hash' WHERE id=1 ");
         
                
         
                   $stmt->execute();
                   $sql->close();
                   $mysql->close(); 
                  
                   echo "Dein Account wurde geupdatet";
             } 
                    } 
                
                 
                 //ende if statement
             
            
              ?>
          <!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width= , initial-scale=1.0">
                 <title>Login</title>
             </head>
             <body>
                      
             <form method="post">

         <!--- PROFILBEARBEITUNG FORMULAR !--->  


         <!--- Vorname !--->
             <div class="form-floating mb-3">
             <h6>Vorname</h6>
             <h5 class = "form-control" ><?PHP if(isset($_SESSION) && isset($_SESSION["admin"]) ){  echo $tab["fname"];   } ?></h5>
                <input type="text" class="form-control" name="fn" id="fn" placeholder="Max">
               
            </div>

            <!--- Nachname !--->
            <div class="form-floating mb-3">
                <h6>Nachname</h6>
                <h5 class = "form-control" ><?PHP if(isset($_SESSION) && isset($_SESSION["admin"]) ){  echo $tab["lname"];   } ?></h5>
                <input type="text" class="form-control" name="ln" id="ln" placeholder="Mustermann">
                
            </div>

         
         <!--- Email - Adresse   noch überarbeiten, dass man Name des zu bearbeitenden Users sieht.!--->
         <div class="form-floating mb-3">   <br>
         <h6>E-Mail</h6>
         <h5 class = "form-control" ><?PHP if(isset($_SESSION) && isset($_SESSION["admin"]) ){  echo $tab["useremail"];   } ?></h5>
         
             <input type="email" class="form-control " name="email" id="email" placeholder="MaxM@gmx.com" >
            
         </div>
         

         <!--- Username !--->
         <div class="form-floating mb-3">
         <h6>Username</h6>
         <h5 class = "form-control" ><?PHP if(isset($_SESSION) && isset($_SESSION["admin"]) ){  echo $tab["username"];   } ?></h5>
         
             <input type="text" class="form-control " name="username" id="username" placeholder="Username" > <!--- Damit es rot wird, wenn der Username leer ist --->
         
         </div>
         <!--- Passwort 1 --->
         
         <div class="form-floating mb-3">
             <p>Passwort</p>
                         <input type="password" name="password" id="password" class="form-control ">  <?php if ($errors['password']) echo 'is-invalid';
                                    if (isset($pw1)) {
         
                                     if (isset($pw2)) {
                                     if ($pw1 != $pw2) {
                                     echo '<span style= color:red;">' . $error . '</span>';
                                      }
                                     }
                                     }
                                    ?> 
                     
                     </div>
         
        
                     <!--- Passwort 2 !--->
                   
                     <div class="form-floating mb-3">
                     <p>Passwort erneut eingeben</p>
                         <input type="password" class="form-control <?php if ($errors['password2']) echo 'is-invalid'; ?>" name="password2" id="password2">
                         
                     </div>
         
         
                        
         
         <!--- AGB Button--->
         <div class="form-check mb-3">
             <input type="checkbox" class="form-check-input" name="agree" id="agree">
             <label class="form-check-label" for="agree">Hiermit bestätige ich, dass ich die Daten bearbeiten möchte</label>
         </div>
         <button class="btn btn-primary" type="submit">Submit</button>
         </form>
         
         </form>
         
         
            
            
         
         
         </body>
         
         </html>
         
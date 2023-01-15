<?php

session_start(); 

require_once ('mysql.php'); //to retrieve connection details
 // include ("adapt_nav.php");  

/*
$sql = "SELECT * FROM users";
$result = $mysql->query($sql);
echo "<pre>" . print_r($result->fetch_array(), true) . "</pre>";
*/

//Man kann die Userverwaltung nur durchführen, 


$sql =
"SELECT * FROM users";
$result = $mysql->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
     <!-- Ich habe nicht GoogleFonts sonder Fontawessome verwendet, weil ich da mehrere passende Bilder finden konnte. -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
<title>FAQ</title>


</head>

<body> 
    
    <h1>User verwalten</h1>

    <h2>Liste aller Userinnen anzeigen</h2>

    <?php 
 


if (isset($_SESSION) && $_SESSION["admin"] == 1){ ?>
 

    <form method="POST">


    
<select class = "form-select" name="dropdown">

   <?php 

$tmp="";

     while ($row = $result->fetch_array()) { 
 //_assoc works, _object not
 if ($row['admin'] == 0 ){

echo "<option>" . $row['username'] . "</option> ";
echo "<br>" ;


if($row['username']==$_POST['dropdown']){
    $tmp=$row;
}
}
     }




?>  
</select>



<button class="btn btn-primary" name="select" type="select">Select</button>

<?php


 //wenn ein User vom ADMIN ausgesucht wurde 

if(isset($_POST["select"])){

    if (isset($_SESSION) && $_SESSION["admin"] == 1)
  
$_SESSION["uw"] = $tmp["id"]; 
 
echo "<br> Username: "; 
echo $tmp['username'];


?> <a href= "Profilverwaltung.php">Bearbeiten</a> 

<?php 


}


} ?>


     
</form>

    

   
    
</body>

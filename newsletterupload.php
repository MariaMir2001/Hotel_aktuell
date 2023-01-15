<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
     <!-- Ich habe nicht GoogleFonts sonder Fontawessome verwendet, weil ich da mehrere passende Bilder finden konnte. -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Zimmerauswahl</title>

   
    
</head>
<body>

    
<?php 
include "adapt_nav.php" ;


require_once("mysql.php");
$mysql = new mysqli($host, $user, $passwort,$name);
$timestamp=date(DATE_RFC822);


/*$stmt = $mysql->prepare("INSERT INTO news (bildpfad,article,date) VALUES (?, ?,?)");
          $stmt->bind_param ("sss",$_POST["image"], $_POST["Beitrag"],$timestamp);*/

          
          if (isset($_POST["submit"])) {
            if (isset($_POST["Beitrag"]) && !empty($_POST["Beitrag"])) {
            $article = $_POST["Beitrag"];
            }
        
        }
 


?> 
    
</body>
</html>

<pre><?php

var_dump($_POST);
echo '<strong>$_FILES:</strong><br />';
var_dump($_FILES);

if (!empty($_FILES['image'])) {
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, __DIR__ . '//bilder/'. uniqid('', true) .'.jpg');
    move_uploaded_file($tmpName, __DIR__ . '/bilder/newslettertest.jpg');

    $pic= '//bilder/'. uniqid('', true).'.jpg'; ;
 
    require_once("mysql.php");
    
$timestamp=time();
$datum = date("d.m.Y",$timestamp);
var_dump($datum);

$mysql = new mysqli($host, $user, $passwort,$name);
    $stmt=$mysql->prepare("INSERT INTO news (article,bildpfad, date) VALUES (?,?,?)");


    $stmt->bind_param("sss",$_POST["Beitrag"],$pic,$datum);
    $stmt->execute();

    @chmod(__DIR__ . '/newslettertest.jpg', 0777);
   
    @chmod(__DIR__ . '//bilder/'. uniqid('', true) .'.jpg',0777);
    
    var_dump("Es wurde eine Datei übertragen.");
}

?></pre>

<form action="newsletterupload.php" method="POST" enctype="multipart/form-data">
   <button class="btn btn-primary">Beitrag verfassen</button>
    <input type="text" name="Beitrag" /><br />
    <input type="file" name="image" />
    <input type="submit" value="Abschicken!"    class="form-control"/>
</form>



<!-- 
    <pre><?php

var_dump($_POST);
echo '<strong>$_FILES:</strong><br />';
var_dump($_FILES);


if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

    if ($_FILES['image']['type'] !== 'image/jpeg') {
        die();
    }

    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, __DIR__ . '/' . $_FILES['image']['name']);
    @chmod(__DIR__ . '/' . $_FILES['image']['name'], 0777);
    var_dump("Es wurde eine Datei übertragen.");
}

$sql = "INSERT into news(article,bildpfad) VALUES('$article','$tmpname')";
 
if(mysqli_query($mysql,$sql)){

echo "File Sucessfully uploaded";
}
else{
    echo "Error";
}

?>
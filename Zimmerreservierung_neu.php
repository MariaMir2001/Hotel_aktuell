

<?php

session_start(); 



if ($_SERVER["REQUEST_METHOD"] == "POST"){ // wenn das Formular abgegeben wurde. 
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
  


 if(!empty($date1) || !empty($date2)){
    if($date1>$date2){
     $error_date2="Abreisedatum ist ungültig. Bitte wählen Sie ein anderes Abreisedatum";

    }
   

  }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <title>Zimmerreservierung</title>
</head>

<body>
<form  method="post">
<?php
include ("adapt_nav.php"); 

require_once("mysql.php");
$mysql = new mysqli($host, $user, $passwort,$name);


$stmt="SELECT id FROM users";
$result=$mysql->query($stmt);
$tmp="";

if(isset($_SESSION["name"])){
  $tmp_session= $_SESSION["name"];
$stmt3="SELECT id, username FROM users WHERE username = '$tmp_session' ";

$result3=$mysql->query($stmt3);

//echo "<pre>" . print_r($result3->fetch_array(), true) . "</pre>";

$id="0";
while($row=$result3->fetch_array()){
  $id= $row["id"];
  
}


}

/*while($row=$result->fetch_array()){
  


$tmp=$row["id"];
  
}*/


echo "Datei befindet sich nicht Db";

if(isset($submit)){
  echo "Datei befindet sich in post";
$stmt2=$mysql->prepare("INSERT INTO reservierung (vorname, nachname, username, ankunft, abfahrt, user_id) VALUES (?,?,?,?,?,?)");
$stmt2->bind_param ("sssssi",$_POST["fn"], $_POST["ln"],$_POST["username"], $_POST["date1"], $_POST["date2"],$id);
$stmt2->execute();
$stmt2->close();
echo "Datei befindet sich in Db";
}


?>
   


    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Zimmerreservierung</h1>


                <form class="row g-3 needs-validation" novalidate>

                <!--- VORNAME --->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" name="fn" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
                     
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label"  >Last name</label>
    <input type="text" class="form-control" name="ln" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text"  id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>



                <!---Anreise --->

                

                    <label for="date1">Anreise </label>

                    <input type="date" class="form-control" min="<?php $date = date('y-m-d'); echo '20'.$date;?>"
                        name="date1" id="date1">


                

                    <!---Abreise --->
                    <label for="date2">Abreise</label>

                    <input type="date" class="form-control" <?php // if(!isset($_POST['date1'])) echo "disabled"?>
                        min="<?php if(isset($date)) $date2= date('Y-m-d', strtotime( $date . " +1 days")); echo $date2;?>"
                        name="date2" id="date2">
                    <span style="color:red;"><?php if(isset($error_date2)){echo $error_date2; }?></span>
                    <!--- Frühstück: ja/nein --->

                    <div>
                        <p>Frühstück:</p>

                        <input type="radio" id="breakfast1" name="breakfast" value="Ja">
                        <label for="breakfast1">Ja</label><br>

                        <input type="radio" id="breakfast2" name="breakfast" value="Nein">
                        <label for="breakfast2">Nein</label><br>

                    </div>
                    <div>

                        <p>Parkplatz:</p>
                        <input type="radio" id="parkplatz1" name="parkplatz" value="Ja">
                        <label for="parkplatz1">Ja</label><br>

                        <input type="radio" id="parkplatz2" name="parkplatz" value="Nein">
                        <label for="parkplatz2">Nein</label><br>

                    </div>


                    <div>
                        <p>Haustier:</p>

                        <input type="radio" id="haustier1" name="haustier" value="Ja">
                        <label for="haustier1">Ja</label><br>

                        <input type="radio" id="haustier2" name="haustier" value="Nein">
                        <label for="haustier2">Nein</label><br>


                    </div>
                    <br>
                    <div>
                        <p>Falls ja, welche/s Haustier/e ?</p>

                        <textarea name="message" style="width:200px; height:50px;"></textarea>
                    </div>

                    <button class="btn btn-primary" name="submit" type="submit">
                        <break>Submit</break>
                    </button>




                </form>




                <br>




</body>

</html>
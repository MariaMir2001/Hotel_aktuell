<?php
session_start(); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservierung</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <!-- Ich habe nicht GoogleFonts sonder Fontawessome verwendet, weil ich da mehrere passende Bilder finden konnte. -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c53b064115.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
include ("adapt_nav.php"); 
?>
   



    <h1>Reservierung</h1>
    <p>Hotel Esterhazy bietet Ihnen verschiedene Möglichkeiten zur Reservierung an.</p>
  
<?php
    if (isset($_SESSION["name"])) {
        if(isset($_SESSION["password"])){
       
      echo "Du befindest dich in der Session vom User.";
        }
    }

    if (isset($_SESSION["nameadmin"])) {
        if(isset($_SESSION["password"])){
       
      echo "Du befindest dich in der Session vom Admin.";
        }
    }
      ?>

    <div class="container">
        <div class="row seitenAbschnitt text-center align-items-center" id="reservierung">
            <div class="col-sm-3">
                <i class="fa-solid fa-mug-saucer fa-6x"></i>
                <h4>...mit Frühstück</h4>
                <a data-toggle="collapse" href="#details" role="button" aria-expanded="false"
                    aria-controls="collapseExample">Mehr erfahren...</a>

            </div>
            <div class="col-sm-3">
                <i class="fa-solid fa-ban fa-6x"></i>
                <h4>...ohne Frühstück</h4>
                <a data-toggle="collapse" href="#detailsGrafikbearbeitung" role="button" aria-expanded="false"
                    aria-controls="collapseExample">Mehr erfahren...</a>

            </div>
            <div class="col-sm-3">
                <i class="fa-solid fa-square-parking fa-6x"></i>
                <h4>...mit Parkplatz</h4>
                <a data-toggle="collapse" href="#detailsWebdesign" role="button" aria-expanded="false"
                    aria-controls="collapseExample">Mehr erfahren...</a>

            </div>
            <div class="col-sm-3">
                <i class="fa-regular fa-circle-xmark fa-6x"></i>
                <h4>...ohne Parkplatz</h4>
                <a data-toggle="collapse" href="#detailsGrafikbearbeitung" role="button" aria-expanded="false"
                    aria-controls="collapseExample">Mehr erfahren...</a>

            </div>


            
            <form   action="Zimmerreservierung_neu.php" > <!--- hier wird method = "post" nicht hingeschrieben, weil die nächste Seite sonst
            Werte erwartet und dann bekommt man Fehlermeldungen" ---> 
         <input type="submit"  value="Neue Zimmerreservierung"> 
            </form>

              
            <form method="post"  action="Reservierung_einsehen.php" >
         <input type="submit"  value="Alte Reservierungen einsehen"> 
            </form>

        </div>
    </div>

</body>

</html>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Bootstrap-Snippets</title>
  </head>
  <body>
    
  </body>
  </html>
  
  <!--Navigation mit Einklappfunktion bei kleinerem Fenster-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="topMenu">
    <a class="navbar-brand" href="#">Hotel Esterhazy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="startseite.php">Startseite</a>
            </li>
         
            <li class="nav-item">
                <a class="nav-link" href="reservierung.php">Reservierung</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stammdaten.php">Stammdaten verwalten</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="Registrierung_versuch.php">News</a>
            </li>



            <?php

            include("dropdown.php");
       
            
    ?>



        </ul>
    </div>
</nav>
<?php
session_start();

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
    <title>Startseite</title>

</head>

<body>

<?php
include ("adapt_nav.php"); 
?>
     
          

<!--Carousel-->
        </ul>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Hotel3.jpg" class="d-block w-100" alt="infinity-pool">
            <div class="carousel-caption d-none d-md-block">
                <h1>Hotel Esterhazy</h1>
                <p>Erleben Sie eine wunderschöne Zeit im Hotel Esterhazy.</p>
                <p><a class="btn btn-light" href="reservierung.php" role="button">zur Reservierung</a></p>
            </div>

          </div>
          <div class="carousel-item">
            <img src="infinity-pool-flachau-02-gross.jpg" class="d-block w-100" alt="hotel">
            <div class="carousel-caption d-none d-md-block">
            <h1>Entspannung</h1>
            <p>In unserem Infinity Pool vergessen Sie Ihre Sorgen.</p>
            <p><a class="btn btn-light" href="reservierung.php" role="button">zur Reservierung</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="1600x900-Royal-Penthouse-Suite-Imperial-Living-Room-lake-view-Med-1170x600.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1>Ruhe</h1>
            <p>Unsere luxuriösen Suiten bieten nicht nur den höchsten Komfort, sondern auch eine prächtige Aussicht.</p>
            <p><a class="btn btn-light" href="reservierung.php" role="button">zur Reservierung</a></p>  
        </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <!-- Text --->

      <!-- Brauch ich eig. eh nicht, vllt lösche ich das noch raus  -->
  <div class="container marketing">

<div class="row">
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"  src ="Hotelzimmer_demo.jpg" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>


    <h2 class="fw-normal">Zimmer</h2>
    <p>Sehen sie sich hier unsere Hotelzimmer an.</p>
    <p><a class="btn btn-secondary" href="Zimmerauswahl.php">View details &raquo;</a></p>
  </div> <!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

    <h2 class="fw-normal">Natur</h2>
    <p>Sehen Sie sich hier die Landschaft an, die unser Hotel umgibt </p>
    <p><a class="btn btn-secondary" href="Natur.php">View details &raquo;</a></p>
  </div> <!-- /.col-lg-4 -->
  
  <div class="col-lg-4">
    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

    <h2 class="fw-normal">Q&A</h2>
    <p>Hier finden Sie die Antworten zu häufig gestellten Fragen</p>
    <p><a class="btn btn-secondary" href="faq.php">View details &raquo;</a></p>
  </div> <!-- /.col-lg-4 -->
</div> <!-- /.row -->




<!-- Willkommen -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Herzlich Willkommen</h2>
    <p class="lead">Unser Team heißt Sie herzlich willkommen und begegnet Ihnen
      mit Gastfreundschaft und authentischem Service im "Hotel Esterhazy". Wir sind seit 1970 ein Familienbetrieb und es ist uns eine Ehre, dass Sie sich
      für Hotel Esterhazy entschieden haben. Unsere Mitarbeiter sind freundlich und kompetent und stehen Ihnen bei jeglichen Fragestellungen und Wünschen 
      zur Seite.
      Unsere Hotels zeichnen sich durch eine angenehme Athmosphäre und der Nähe zur Natur aus. 
   Ob Familienurlaub, Geschäftsreise oder Abenteuerurlaub.  Bei uns sind Sie richtig! 
  </p></p>
  </div>
  <div class="col-md-5">

    <img src="Hotelpersonal.jpg" alt = "Hotelpersonal" style= "width: 500px; height: 500px top-padding: 100px; bottom-padding: 100px "; >
   
  </div>
</div>





<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order">
    <h2 class="featurette-heading fw-normal lh-1">Ein besonderer Ort zum Wohlfühlen </h2>
    <p class="lead">Unsere Hotels befinden sich an einigen der aufregendsten Reiseziele der Welt
      und bieten durchdachte Annehmlichkeiten, moderne Gästezimmer und innovative Restaurants
     und Bars. Außerdem befinden sich in der Nähe unseres Hotels die schönsten Wanderwege. Die Nähe zur Natur bietet unseren Kunden ein einzigartiges Aufenthaltserlebnis.
    Darüber hinaus können Sie Ihre Zeit in einen unserer Spas verbringen, wo unser Personal sich um Sie kümmern wird. Wir tun unser bestes, um Ihren 
  Aufenthalt so erholsam wie möglich zu gestalten</p></br>
 </p>
  </div>
  <div class="col-md-5 order-md-1">

    <img src = "Landschaft.jpg" alt = "Alpenlandschaft" style="width: 500px; height: 400px;" >


  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Kulinarik mit Stil</h2> <br>
    <p class="lead">Weltweit renommierte Restaurants</br>
      Erleben Sie internationale Küche auf höchstem Niveau und entspannen Sie dabei in stilvoll-historischem Ambiente.</br>
    Unsere Chefs bieten traditionell österreichische Gerichte sowie Speisen aus aller Welt, an. Statten Sie uns einen Besuch ab in unseren 5 Sterne Restaurants.
  Wir bieten Ihnen Gerichte aus internationaler Küche hier.</p>
  </div>
  <div class="col-md-5">
   <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> 
   -->
   <img src = "Kulinarik.jpg" alt = "Kulinarik" style="width: 500px; height: 400px; " >

  </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


  
    
    <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 1970–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      
  </body>
</html>
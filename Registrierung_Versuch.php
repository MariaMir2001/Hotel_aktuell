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
    <title>Startseite</title>

</head>

<body>

<?php
include ("adapt_nav.php"); 
?>




 <!-- Text --->
 <h1> News Beiträge</h1>



 <img src= >
  <div class="row">
          <div class="col">
            <ul class="list-group">
            <?php
            
            require_once("mysql.php");
            $mysql = new mysqli($host, $user, $passwort,$name);
            $sql="SELECT * FROM news ";
            $stmt=$mysql->query($sql);
            ?>
            <table border="1">
<th>Bild</th>
<th>Beitrag</th>
<th>Datum </th>


<?php     

while($display=$stmt->fetch_array()){
  echo "<tr>";
echo "<td>" . $display["bildpfad"] . "</td>";
echo "<td>" . $display["article"] . "</td>";
echo "<td>" . $display["date"] . "</td>";

echo "</tr>"; 
}

           
            ?>
            <?php
             /*if (file_exists('./bilder')) {
                $files = scandir('./bilder');

                for ($i = 2; isset($files[$i]); $i++) {
                  echo '<li class="list-group-item">' . $files[$i] .'</li>';
                }

                if (count($files) == 2) {
                  var_dump($files);
                      echo '<li class="list-group-item">No files...</li>';
                  }
              }*/
            ?>
            </ul>
          </div>
      </div>


<!-- Willkommen -->

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">Esterhazy Artist's Collection</h2>
    <p class="lead">
      <br>Datum: 28.11.2022<br>
    Weiblich, visuell stark und international ist die 14. Edition der Sacher Artists‘ Collection. Das 
unverwechselbare Holzkistchen der wohl berühmtesten Torte der Welt wurde von der 
international renommierten Künstlerin Sarah Morris gestaltet. Der Verkaufserlös der auf 
1.000 Stück limitierten Sacher Artists‘ Collection geht zu 100 % an den Verein BONsurprise.
Bei der Präsentation der Sacher Artists‘ Collection betont Sacher Co-Eigentümerin Alexandra 
Winkler: „In der Sacher Artists‘ Collection sind drei Leidenschaften vereint: die Original 
Sacher-Torte, unsere Verantwortung gegenüber der Gesellschaft, insbesondere gegenüber 
Menschen mit besonderen Herausforderungen und unsere Verbindung zur Kunst“. 
Die Sacher Artists‘ Collection ist seit der ersten Edition im Jahr 2009 ein Erfolg. Der gesamte 
Verkaufserlös kommt jedes Jahr einer anderen karitativen Einrichtung zugute – diesmal dem 
Verein BONsurprise.
  </p></p>
  </div>
  <div class="col-md-5">

    <img src="Natur3.jpg" alt = "Hotelpersonal" style= "width: 500px; height: 500px top-padding: 100px; bottom-padding: 100px "; >
   
  </div>
</div>



<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order">
    <h2 class="featurette-heading fw-normal lh-1">Wiener Kaffeehaus im Esterhazy Hotel</h2>
    <p class="lead">
    <br>Datum: 28.11.2022<br>
        Weiblich, visuell stark und international ist die 14. Edition der Sacher Artists‘ Collection. Das 
    unverwechselbare Holzkistchen der wohl berühmtesten Torte der Welt wurde von der 
    international renommierten Künstlerin Sarah Morris gestaltet. Der Verkaufserlös der auf 
    1.000 Stück limitierten Sacher Artists‘ Collection geht zu 100 % an den Verein BONsurprise.
    Bei der Präsentation der Sacher Artists‘ Collection betont Sacher Co-Eigentümerin Alexandra 
    Winkler: „In der Sacher Artists‘ Collection sind drei Leidenschaften vereint: die Original 
    Sacher-Torte, unsere Verantwortung gegenüber der Gesellschaft, insbesondere gegenüber 
    Menschen mit besonderen Herausforderungen und unsere Verbindung zur Kunst“. 
    Die Sacher Artists‘ Collection ist seit der ersten Edition im Jahr 2009 ein Erfolg. Der gesamte 
    Verkaufserlös kommt jedes Jahr einer anderen karitativen Einrichtung zugute – diesmal dem 
    Verein BONsurprise.
    </p></br>
 </p>
  </div>
  <div class="col-md-5 order-md-1">

    <img src = "beispiel.jpg" alt = "Alpenlandschaft" style="width: 500px; height: 400px;" >


  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1">War of Roses aus der Serie Sound Graph</h2> <br>
    <p class="lead">
    <br>Datum: 28.11.2022<br>
          Weiblich, visuell stark und international ist die 14. Edition der Sacher Artists‘ Collection. Das 
      unverwechselbare Holzkistchen der wohl berühmtesten Torte der Welt wurde von der 
      international renommierten Künstlerin Sarah Morris gestaltet. Der Verkaufserlös der auf 
      1.000 Stück limitierten Sacher Artists‘ Collection geht zu 100 % an den Verein BONsurprise.
      Bei der Präsentation der Sacher Artists‘ Collection betont Sacher Co-Eigentümerin Alexandra 
      Winkler: „In der Sacher Artists‘ Collection sind drei Leidenschaften vereint: die Original 
      Sacher-Torte, unsere Verantwortung gegenüber der Gesellschaft, insbesondere gegenüber 
      Menschen mit besonderen Herausforderungen und unsere Verbindung zur Kunst“. 
      Die Sacher Artists‘ Collection ist seit der ersten Edition im Jahr 2009 ein Erfolg. Der gesamte 
      Verkaufserlös kommt jedes Jahr einer anderen karitativen Einrichtung zugute – diesmal dem 
      Verein BONsurprise.</p>
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

  
</body>
</html>
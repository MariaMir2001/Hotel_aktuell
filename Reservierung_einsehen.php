<?php
/* Muss man das mit einem Array machen ??
echo "<h4> Liste aller Reservierungen </h4>";
$myArray = Array("09.09.2020    12.09.2020  Max Mustermann", "12.11.2020    12.12.2020  Max Mustermann", "12.03.2021    13.03.2021  Max Mustermann", "12.03.2021    13.03.2021  Max Mustermann"); 

echo '<pre>';
print_r($myArray);
echo '</pre>'; 

echo '<hr>'; 
echo '<h4> my Array 2 example </h4>';

$mySecondArray = Array(""); 
*/session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

   
</head>
<body>

<?php
include "adapt_nav.php"; 
?>

Hier sehen Sie Ihre Reservierungen:

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vorname</th>
      <th scope="col">Nachname</th>
      <th scope="col">Username</th>
      <th scope="col">Ankunft</th>
      <th scope="col">Abfahrt</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Max</td>
      <td>Mustermann</td>
      <td>User</td>
      <td>01.01.2021</td>
      <td>01.02.2021</td>

    </tr>
   
    <tr>
      <th scope="row">1</th>
      <td>Max</td>
      <td>Mustermann</td>
      <td>User</td>
      <td>03.04.2021</td>
      <td>05.05.2021</td>

    </tr>


    <tr>
      <th scope="row">1</th>
      <td>Max</td>
      <td>Mustermann</td>
      <td>User</td>
      <td>28.05.2022</td>
      <td>31.06.2022</td>

    </tr>


  </tbody>
</table>




</body>
</html>
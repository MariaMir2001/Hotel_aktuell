
  <?php   
   if ($_SERVER["REQUEST_METHOD"] == "POST" 
   && isset($_POST["out"]) 
   &&  isset($_POST["out"])=== true ){


?>
<form>
<form method="POST"> 
 <?php 
 if(!isset($_SESSION)){
  session_start();
 }

 if(isset($_SESSION)){

  
  session_unset();
 session_destroy();
 header("Location: anmeldung.php"); 
 die(); }

 
    }?>

  </form>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <title>Dropdown</title>
</head>
<body>
  


  <form action = "startseite.php" method = "POST" >
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Logout
          </a>
          <ul class="dropdown-menu">
          
            <li><a class="dropdown-item" ></a> 
            <button type = "submit" name = "out" id = "logout" value = "true"  href="startseite.php">Abmelden</a></li>
          </form>
          
          </ul>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>


</body>
</html>

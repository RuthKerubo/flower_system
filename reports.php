<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Flora- Growing for the future</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <style>
      body {
          font-family: montserrat, arial, verdana;
          background-color : #e7b2e3
      }
    
    </style>
  
  <!-- Custom styles for this template -->
  <link href="assets/css/css/grayscale1.min.css" rel="stylesheet">


  
</head>

<body id="page-top">



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" >
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">Flora</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i> 
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Flowers
              </a>
            <div class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink" style="border:none;">
                <a class="dropdown-item text-white" href="progress.php">lily</a>
                <a class="dropdown-item text-white" href="white.php">white rose</a>
                <a class="dropdown-item text-white" href="dhalia.php">dhalia</a>
            </div>
          </li>
          
          <li>
          <a class="nav-link js-scroll-trigger" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="reportsphp">Reports</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<footer class="py-5 bg-dark">
<div>
 <?php

$hn = 'localhost';
$db = 'flower_system';
$un = 'root';
$pw = 'qwertyuiop';
$conn = new mysqli($hn, $un, $pw, $db);

if  ($conn->connect_error) die($conn->connect_error);

$sql = "SELECT id ,bed ,growth ,height ,depth ,water ,bug  FROM system_1";
$result = $conn->query($sql);
if (!$result) echo "Errorrrrrrr!!!!!!";
$rows = $result->num_rows;
echo "<table class='table table-striped table-dark text-white'><thead><tr><th>#</th><th>Bed</th><th>Growth</th><th>Height</th><th>Depth</th><th>Water</th><th>Bug</th></tr></thead><tbody>";
for ($j = 0; $j < $rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array();
    echo "<tr><td>".$row["id"]."</td><td>".$row["bed"]."</td><td> ".$row["growth"]." </td><td>".$row["height"]."</td><td>".$row["depth"]."</td><td>".$row["water"]."</td><td>".$row["bug"]."</td></tr>";	
}
echo "</tbody></table>";
$conn->close();
?> 
</div>
</footer>
</body>
</html>
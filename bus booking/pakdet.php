<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<!-- fontasome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--  -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    body{
      background: rgb(174,216,238);
background: radial-gradient(circle, rgba(174,216,238,1) 7%, rgba(160,241,121,1) 35%, rgba(227,233,148,1) 100%);
    }
</style>
</head>
<body>

<h1 style='text-transform: uppercase;'><center> package info</center></h1>
<ul class="nav justify-content-center nav-underline">
  <li class="nav-item ">
    <a class="nav-link" aria-current="page" href="subdetail.php">subscriber details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="custdet.php">customer details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pakdet.php">package details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminlog.html"><i class="fa-solid fa-power-off"></i></a>
  </li>
</ul>

<?php
include('config.php');
$query='SELECT * FROM `packagebill`';
$result=mysqli_query($mysqli,$query);
$numrow=mysqli_num_rows($result);

if ($numrow>0) {
  echo'<div class="text-center">';
  echo'<br>';
  echo'<div class="row">';
  echo'<div class="col">';
  echo'</div>';  

  echo'<div class="col" data-aos="zoom-in-down" data-aos-duration="1500">';
  echo '<table class="container-fluid table table-warning">';
    echo'<thead class="table-dark">';
    echo '<tr>';
echo'<th scope="col">ID</th>';
echo'<th scope="col">NAME</th>';
echo'<th scope="col">AGE</th>';
echo'<th scope="col">EMAIL</th>';
echo'<th scope="col">DATE</th>';
echo'<th scope="col">PH NO</th>';
echo'<th scope="col">CITY</th>';
echo'<th scope="col">PLAN</th>';
echo'<th scope="col">ADDRESS</th>';
echo'<th scope="col">BOOKED CLASS</th>';
echo'<th scope="col">GENDER</th>';
echo'<th scope="col">AMOUNT</th>';

echo '<tr>';
echo'</thead>';
   
   
while( $row=mysqli_fetch_assoc($result)) {
  echo'<tbody>';
  echo '<tr>';
  echo '<td scope="row">'.$row['id'].'</td>';
  echo '<td>'.$row['name'].'</td>';
  echo '<td>'.$row['age'].'</td>';
  echo '<td>'.$row['email'].'</td>';
  echo '<td>'.$row['date'].'</td>';
  echo '<td>'.$row['phno'].'</td>';
  echo '<td>'.$row['package'].'</td>';
  echo '<td>'.$row['ndays'].'</td>';
  echo '<td>'.$row['address'].'</td>';
  echo '<td>'.$row['bustype'].'</td>';
  echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['totamt'].'</td>';
  echo '</tr>';
  echo'</tbody>';
}

echo '</table>';
echo'</div>'; 

echo'<div class="col">';
  echo'</div>'; 
}
else{
    echo'<br>
    <div class="container">
    <h1> NOT FOUND RECORDS</h1>
    <div>';
}

?>

<script>
  AOS.init();
</script>

</body>
</html>


<!-- <div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div> -->
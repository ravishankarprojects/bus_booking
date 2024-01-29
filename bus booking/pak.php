<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    <style>
       body {
        background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
/* background-repeat: no-repeat;
    background-size: cover; */
}
    </style>
</head>
<body>
    
<div>
        <center>
        <br><br><br><br><br>
        <h1>successfully booked your package!!</h1>
        <div class="spinner-grow text-warning" role="status">
  <span class="visually-hidden">Loading...</span>
</div><h4>please wait,get your Ticket...</h4>
<div class="text-center">
<img src="images/busgif.gif" heigth="20px" width="200px"/>
</div>
        </center>
    </div>


<?php
include('config.php');
if (isset($_POST['bookpak'])) {
    $name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$date=$_POST['date'];
$phno=$_POST['phno'];
$packagecity=$_POST['city'];
$plandays=$_POST['plan'];
$count=$_POST['countac'];
$address=$_POST['address'];
$bustype=$_POST['bustype'];
$gender=$_POST['Gender'];
$bill=$_POST['bill'];

$result=mysqli_query($mysqli,"INSERT INTO packagebill values('','$name','$age','$email','$date'
,'$phno','$packagecity','$plandays','$count','$address','$bustype','$gender','$bill')");
    if ($result) {
        echo '<script type="text/javascript">';
echo ' alert("successfully booked")';  
echo'
window.onload=function(){
  setInterval(()=>{
    window.location.href = "ticket2.html";
  },4000)
}';
echo '</script>';
    }
    else{
       echo '<script type="text/javascript">';
echo ' alert("invalid")';  //not showing an alert box.
echo '</script>';
    }
}
?>

</body>
</html>



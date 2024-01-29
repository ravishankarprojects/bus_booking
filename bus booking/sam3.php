<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Seat Booking</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- <style>
        body {
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
        }
    </style> -->
</head>
<body>
    <div>
        <!-- <center>
            <br><br><br><br><br>
            <h1>Successfully Booked!!</h1>
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <h4>Please wait, get your ticket</h4>
            <div class="text-center">
                <img src="images/busgif.gif" height="20px" width="200px"/>
            </div>
        </center> -->
    </div>

    <?php
include('config.php');

if (isset($_POST['bookbus'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $phno = $_POST['phno'];
    $cityfrom = $_POST['cityfrom'];
    $cityto = $_POST['cityto'];
    $address = $_POST['address'];
    $gender = $_POST['Gender'];
    $bustype = $_POST['bustype'];
    $seats = $_POST['seats'];
    $amount = $_POST['amount'];
    $atime = $_POST['atime'];
    $dtime = $_POST['dtime'];

    // Check if the seat is already booked
    $seatCheckQuery = mysqli_query($mysqli, "SELECT * FROM bill WHERE seats = '$seats' AND is_booked = 1");
    $numRows = mysqli_num_rows($seatCheckQuery);

    if ($numRows > 0) {
        // Seat is already booked, show an alert
        echo '<script type="text/javascript">';
        echo ' alert("Seat is already booked. Please choose another seat.")'; 
        echo '</script>';
    } else {
        // Seat is available, proceed with the booking
        $result = mysqli_query($mysqli, "INSERT INTO bill VALUES('', '$name', '$age', '$email', '$date', '$phno',
        '$cityfrom', '$cityto', '$address', '$gender', '$bustype', '$seats', '$amount', '$atime', '$dtime', 1) ");

        if ($result) {
            // Booking successful, redirect to ticket.html after 4 seconds
            echo '<script type="text/javascript">';
            echo ' alert("Successfully booked")'; 
            echo ' window.onload=function(){ setInterval(() => { window.location.href = "ticket.html"; }, 4000) }'; 
            echo '</script>';
        } else {
            // Error in booking
            echo '<script type="text/javascript">';
            echo ' alert("Error in booking. Please try again.")';
            echo '</script>';
        }
    }
}
?>

</body>
</html>

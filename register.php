<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registration is successful</title>
</head>
<body>
  <div class="nav">
    <a href="index.php">Register</a>
    <a href="list.php">List of Donor</a>
    <a href="search.php">Search a donor by blood group</a>
  </div>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blood_donation";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $name = $_POST['name'];
    $bgroup = $_POST['bgroup'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO donor_list (name, blood_group, email, phone, address) VALUES ('$name', '$bgroup', '$email', '$phone', '$address')";
    if (mysqli_query($conn, $sql)) {
      echo '<p class="center1" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: large; font-weight: bold;"> Your registration is successful! </p>';
    } else {
      echo 'failed';
    }
    mysqli_close($conn);
  ?> 

</body>
</html>
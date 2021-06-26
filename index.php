<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Register for Blood Donation</title>
</head>
<body>
  <div class="nav">
    <a href="index.php" style="margin-left:0px">Register</a>
    <a href="list.php">List of Donor</a>
    <a href="search.php">Search a donor by blood group</a>
  </div>
  <div class="center1">
    <h1 style="font-family: verdana">Donate Blood</h1>
  </div>
  <div class="center1">
    <h2 style="font-family: verdana">Donating blood can save other's life.</h2>
    <i class="fa fa-heart" style="font-size:45px; color:red"></i>
  </div>
  <div class="center1">
    <form action="register.php" method="post">
      <label for="name">
        Name
      </label>
      <br>
      <input type="text" name="name" required autocomplete="off">
      <br>

      <label for="bgroup">Blood Group</label>
      <br>
      <input list="blood-group" name="bgroup" required autocomplete="off">
      <datalist id="blood-group">
        <option value="A+">
        <option value="O+">
        <option value="B+">
        <option value="AB+">
        <option value="A-">
        <option value="O-">
        <option value="B-">
        <option value="AB-">
      </datalist>
      <br>

      <label for="email" autocomplete="off"> Email </label>
      <br>
      <input type="email" name="email" required autocomplete="off">
      <br>

      <label for="Phone"> Phone </label>
      <br>
      <input type="text" name="phone" required autocomplete="off">
      <br>

      <label for="Address"> Address </label>
      <br>
      <input type="text" name="address" required autocomplete="off">
      <br>
      <br>
      <button class="center1">Register!</button>
    </form>

    
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Register for Blood Donation</title>
</head>
<body>
  <div class="nav">
    <a href="index.php">Register</a>
    <a href="list.php">List of Donor</a>
    <a href="search.php">Search a donor by blood group</a>
  </div>
  
  <div class="center1">
    <form action="search_list.php" method="POST">
      <label for="search_bgroup">Enter the blood group you want to search:</label>
      <br>
      <br>
      <input list="blood-group" name="search_bgroup" required autocomplete="off">
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
      <br>
      <button>Search</button>
    </form>
  </div>
  
</body>
</html>
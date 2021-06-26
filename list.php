<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Register for Blood Donation</title>

  <style>
    table {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      border-collapse: collapse;
      width: 100%; 
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
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
    
    $sql = "SELECT * FROM donor_list";
    $id = 0;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
      echo "
        <table>
          <tr>
            <th> SL No. </th>
            <th>Name</th>
            <th>Blood Group</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
          </tr>
        ";
      while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['Name'];
        $bgroup = $row['blood_group'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        ++$id;
        echo "<tr>
          <td> $id </td>
          <td> $name </td>
          <td> $bgroup</td>
          <td> $email</td>
          <td> $phone</td>
          <td> $address </td>
        </tr>";
      }
      echo "</table>";
    } else {
      echo "
        <div class='center1'> <h1> Sorry, There are no such person! :(</h1></div>
      ";
    }
  ?>
</body>
</html>
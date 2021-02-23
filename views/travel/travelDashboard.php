<?php
if (isset($_REQUEST['message'])) {
  $message = $_REQUEST['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Dashboard</title>
  <script defer src="./assets/js/utils.js"></script>
</head>

<body>
  <?= isset($message) ? "<p class='message'>$message</p>" : "" ?>
  <table class="table">
    <tr>
      <th>Name</th>
      <th>Last Name</th>
      <th>City</th>
      <th>Buttons</th>
    </tr>
    <?php
    if (isset($travels)) {
      foreach ($travels as $travel) {
        echo "<tr>";
        echo "<td>$travel[0]</td>";
        echo "<td>$travel[1]</td>";
        echo "<td><a href='index.php?controller=travel&action=getCityTravels&id=$travel[4]'>$travel[2]</a></td>";
        echo "<td><a  href='index.php?controller=travel&action=getTravel&id=$travel[3]' class='button'>Show</a><a  href='index.php?controller=travel&action=deleteTravel&id=$travel[3]' class='button'>Delete</a></td>";
        echo "</tr>";
      }
    } else {
      error("A problem with database ocurred");
    }
    ?>
  </table>
  <a href="index.php?controller=travel&action=newTravel">New Travel</a>
  <a href="index.php">Back</a>
</body>

</html>
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
  <title>City Travels</title>
  <script defer src="./assets/js/utils.js"></script>
</head>

<body>
  <?= isset($message) ? "<p class='message'>$message</p>" : "" ?>
  <table class="table">
    <tr>
      <th>City</th>
      <th>Name</th>
      <th>Last Name</th>
    </tr>
    <?php
    if (isset($cityTravels)) {
      foreach ($cityTravels as $travel) {
        echo "<tr>";
        echo "<td>$travel[2]</td>";
        echo "<td>$travel[0]</td>";
        echo "<td>$travel[1]</td>";
        echo "</tr>";
      }
    } else {
      error("A problem with database ocurred");
    }
    ?>
  </table>
  <a href="index.php?controller=travel&action=getAllTravels">Back</a>
</body>

</html>
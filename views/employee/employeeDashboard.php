<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script defer src="./assets/js/utils.js"></script>
</head>

<body>
  <table class="table">
    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>street Address</th>
      <th>City</th>
      <th>Age</th>
      <th>State</th>
      <th>PC</th>
      <th>Phone Number</th>
      <th>Show info</th>
    </tr>
    <?php
    if (isset($employees)) {
      foreach ($employees as $employee) {
        echo "<tr>";
        echo "<td>$employee[1]</td>";
        echo "<td>$employee[3]</td>";
        echo "<td>$employee[6]</td>";
        echo "<td>$employee[7]</td>";
        echo "<td>$employee[5]</td>";
        echo "<td>$employee[8]</td>";
        echo "<td>$employee[9]</td>";
        echo "<td>$employee[10]</td>";
        echo "<td><a  href='index.php?controller=employee&action=getEmployee&id=$employee[0]' class='button'>Show</a></td>";
        echo "</tr>";
      }
    } else {
      error("A problem with database ocurred");
    }
    ?>
  </table>
</body>

</html>
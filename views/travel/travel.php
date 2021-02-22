<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($travel) ? 'Travel' : "New Travel" ?></title>
</head>

<body>
  <form action="index.php" method="get">
    <h4 class="form__title"><?= isset($travel) ? 'Travel' : "New Travel" ?></h4>
    <input type="hidden" name="controller" value="travel">
    <input type="hidden" name="action" value="<?= isset($travel) ? 'updateTravel' : 'createTravel' ?>">
    <?= isset($travel) ? "<input type='hidden' name='id' value='$travel[id]'>" : '' ?>

    <select name="user_id" id="user_id" required>
      <?php
      foreach ($employees as $employee) {
        if (isset($travel)) {
          if ($employee[0] == $travel['user_id']) {
            echo "<option value='$employee[0]' selected >$employee[1] $employee[2]</option>";
          } else {
            echo "<option value='$employee[0]'>$employee[1] $employee[2]</option>";
          }
        } else {
          echo "<option value='$employee[0]'>$employee[1] $employee[2]</option>";
        }
      }
      if (!isset($travel)) {
        echo "<option value='default' selected disabled>Choose an Employee</option>";
      }
      ?>
    </select>
    <select name="city_id" id="city_id" required>
      <?php
      foreach ($cities as $city) {
        if (isset($travel)) {
          if ($city[0] == $travel['city_id']) {
            echo "<option value='$city[0]' selected  >$city[1] </option>";
          } else {
            echo "<option value='$city[0]'>$city[1] </option>";
          }
        } else {
          echo "<option value='$city[0]'>$city[1] </option>";
        }
      }
      if (!isset($travel)) {
        echo "<option value='default' selected disabled>Choose a City</option>";
      }
      ?>
    </select>

    <input type="submit" class="submit" value="Submit">
    <a href="index.php?controller=travel&action=getAllTravels" class="button">Back</a>

  </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script defer src="../assets/js/utils.js"></script>
</head>
<body>
    <table class="table">
        <th>
            <td>Name</td>
            <td>E-mail</td>
            <td>Age</td>
            <td>street Address</td>
            <td>City</td>
            <td>State</td>
            <td>PC</td>
            <td>Phone Number</td>
            <td>Show info</td>
        </th>
        <?php
            if (isset($employees)) {
                foreach($employees as $employee){
                    echo "<tr>";
                    echo "<td>$employee['name']</td>"
                    echo "<td>$employee['email']</td>"
                    echo "<td>$employee['age']</td>"
                    echo "<td>$employee['streetAddress']</td>"
                    echo "<td>$employee['city']</td>"
                    echo "<td>$employee['state']</td>"
                    echo "<td>$employee['PC']</td>"
                    echo "<td>$employee['phoneNumber']</td>"
                    echo "<button class='show-info__button'>Show</button>"
                    echo "</tr>"
                }
            }
        ?>
    </table>
</body>
</html>
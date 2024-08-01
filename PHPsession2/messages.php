<?php

require("connect.php");

// Execute the query
$sql = "SELECT * FROM contact";
$result = mysqli_query($link, $sql);

// Fetch all rows and store them in an array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

print '<pre>';
print_r($rows);
print '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Display all messages here -->

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Messages</th>
        </tr>
        <?php
        // Loop through the stored data
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['firstName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['lastName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['messages']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

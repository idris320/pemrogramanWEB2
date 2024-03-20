<!DOCTYPE html>
<html>
<head>
    <title>Table Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;            
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
echo "<h2>Table Perkalian m idris ependi</h2>";
echo "<table>";
echo "<tr><th>*</th>";
for ($i = 10; $i <= 20; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 10; $i <= 20; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 10; $j <= 20; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

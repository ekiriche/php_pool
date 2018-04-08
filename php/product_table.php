<html>
<head>
    <title>Table</title>
    <style>
        table {
            width:100%;
        }
        th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        caption {
            background-color: darkgrey;
        }
    </style>
</head>
<body>
<?php
if (!file_exists("../data/products"))
    echo "<h1>No products!</h1>";
$acc = unserialize(file_get_contents("../data/products"));
echo "<table style='display: flex;justify-content: center;' >
<caption><th>Name</th><th>Category1</th><th>Category2</th><th>Category3</th></caption>";

foreach ($acc as $value)
{
    echo "<tr><td >".$value["name"]."</td><td>".$value["category1"]."</td><td>".$value["category2"]."</td>
    <td>".$value["category3"]."</td></tr>";
}
echo "</table>"
?>
</body>
</html>
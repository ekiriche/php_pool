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
        if (!file_exists("../data/users"))
            echo "<h1>No users!</h1>";
        $acc = unserialize(file_get_contents("../data/users"));
        echo "<table style='display: flex;justify-content: center;' >
                <caption><th>User</th><th>Password(hashed)</th></caption>";

        foreach ($acc as $value)
        {
            echo "<tr><td >".$value["user"]."</td><td>".$value["passwd"]."</td></tr>";
        }
        echo "</table>"
    ?>
    </body>
</html>
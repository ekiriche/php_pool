<?php
    if ($_POST["buy"] == "buy")
    {
        session_start();
        if (!file_exists("../data/bucket"))
            mkdir ("../data");
        $acc = unserialize(file_get_contents("../data/bucket"));
        $i = 0;
        $flag = 0;
        while ($i < count($acc))
        {
            if ($_POST["name"] == $acc[$i]["name"])
            {
                $acc[$i]["quantity"] += 1;
                file_put_contents("../data/bucket", serialize($acc));
                header("Location: ../index.php");
                die();
            }
            $i++;
        }
        $acc[] = array("user" => $_SESSION["logged_on_user"], "name" => $_POST["name"], "price" => $_POST["price"], "quantity" => 1);
        file_put_contents("../data/bucket", serialize($acc));
        header("Location: ../index.php");
    }
?>
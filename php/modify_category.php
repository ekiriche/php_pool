<?php
if($_POST["old"] && $_POST["new"] && $_POST["submit"] == "submit")
{
    if (!file_exists("../data/categories"))
        mkdir("../data/");
    $acc = unserialize(file_get_contents("../data/categories"));
    foreach ($acc as $key=>$el)
    {
        if ($el["category"] === $_POST["old"])
        {
            $acc[$key]["category"] = $_POST["new"];
            break;
        }
    }
    file_put_contents("../data/categories", serialize($acc));

    if (!file_exists("../data/products"))
        mkdir("../data/");
    $pro = unserialize(file_get_contents("../data/products"));
    foreach ($pro as $key=>$el)
    {
        if ($el["category1"] === $_POST["old"])
        {
            $pro[$key]["category1"] = $_POST["new"];
        }
        elseif ($el["category2"] === $_POST["old"])
        {
            $pro[$key]["category2"] = $_POST["new"];
        }
        elseif ($el["category3"] === $_POST["old"])
        {
            $pro[$key]["category3"] = $_POST["new"];
        }
    }

    file_put_contents("../data/products", serialize($pro));
    header("Location: ../html/admin.php");
}
else
    header("Location: ../html/del_prod.html");
?>
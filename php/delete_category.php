<?php
print_r($_POST);
if($_POST["name"] && $_POST["submit"] == "submit")
{
    if (!file_exists("../data/categories"))
        mkdir("../data/");
    $acc = unserialize(file_get_contents("../data/categories"));
    foreach ($acc as $key=>$el)
    {
        if ($el["category"] === $_POST["name"])
        {
            unset($acc[$key]);
            break;
        }
    }
    file_put_contents("../data/categories", serialize($acc));

    if (!file_exists("../data/products"))
        mkdir("../data/");
    $pro = unserialize(file_get_contents("../data/products"));
    foreach ($pro as $key=>$el)
    {
        if ($el["category1"] === $_POST["name"])
        {
            $pro[$key]["category1"] = "";
        }
        elseif ($el["category2"] === $_POST["name"])
        {
            $pro[$key]["category2"] = "";
        }
        elseif ($el["category3"] === $_POST["name"])
        {
            $pro[$key]["category3"] = "";
        }
    }

    file_put_contents("../data/products", serialize($pro));
    header("Location: ../html/admin.php");
}
else
    header("Location: ../html/del_prod.html");
?>
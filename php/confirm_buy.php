<?php
session_start();
if ($_GET["Buy"] == "Buy" && $_SESSION["logged_on_user"] && file_exists("../data/bucket"))
{
	$acc = unserialize(file_get_contents("../data/bucket"));
    $acc2 = unserialize(file_get_contents("../data/orders"));
	foreach ($acc as $item)
		$item["user"] = $_SESSION["logged_on_user"];
    $res = array_merge((array)$acc2, (array)$acc);
    print_r($res);
	file_put_contents("../data/orders", serialize($res));
	system("rm ../data/bucket");
	header("Location: ../index.php");
}
else
	header("Location: ../index.php");
?>
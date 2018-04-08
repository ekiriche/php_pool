<?php
session_start();
	if ($_POST["user"] && $_POST["passwd"] && $_POST["submit"] === "submit")
	{
		if ($_POST["user"] == "admin" && $_POST["passwd"] == "admin")
		{
			$_SESSION["logged_on_user"] = "admin";
			header("Location: ../html/admin.php");
			die();
		}
		if (!file_exists("../data/users"))
			mkdir("../data");
		$acc = unserialize(file_get_contents("../data/users"));
		foreach ($acc as $item)
		{
			if ($item["user"] == $_POST["user"] && $item["passwd"] == hash("md5", $_POST["passwd"]))
			{
				$_SESSION["logged_on_user"] = $item["user"];
				header("Location: ../");
                die();
			}
		}
        header("Location: ../html/login.html");
        die();
	}
	else
	{
        header("Location: ../html/login.html");
        die();
	}
?>

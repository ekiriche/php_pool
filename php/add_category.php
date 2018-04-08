<?php
	if ($_POST["category1"] && $_POST["submit"] == "submit")
	{
		if (!file_exists("../data/categories"))
			mkdir("../data");
		$acc = unserialize(file_get_contents("../data/categories"));
		foreach ($acc as $item)
		{
			if ($item["category"] == $_POST["category1"])
			{
				header("Location: ../html/add_prod.html");
				die();
			}
		}
		$acc[] = array("category" => $_POST["category1"]);
		file_put_contents("../data/categories", serialize($acc));
		header("Location: ../html/admin.php");

	}
	else
		header("Location: ../html/add_category.html");
?>
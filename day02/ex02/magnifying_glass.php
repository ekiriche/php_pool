#!/usr/bin/php
<?php
	if ($argc == 1)
		exit (0);
	if (@fopen($argv[1], "r") == FALSE)
	{
		echo "Wrong file name xD\n";
		exit (0);
	}
	$dude = file_get_contents($argv[1]);
	$i = 0;
	while ($i < strlen($dude))
	{
		if ($i < strlen($dude) - 7)
		{
			$temp = "";
			$temp = substr($dude, $i, 3);
			if ($temp == "<a ")
			{
				while (substr($dude, $i, 4) != "</a>")
				{
					if ($dude[$i] == "\"")
					{
						$i++;
						while ($dude[$i] != "\"")
						{
							$dude[$i] = strtoupper($dude[$i]);
							$i++;
							if ($dude[$i] == "\"")
							{
								$i++;
								break ;
							}
						}
					}
					if ($dude[$i] == ">" && $dude[$i + 1] != "<")
					{
						$i++;
						while ($dude[$i] != "<")
						{
							$dude[$i] = strtoupper($dude[$i]);
							$i++;
							if ($dude[$i] == "<")
							{
								$i--;
								break ;
							}
						}
					}
					$i++;
				}
			}
			else
				$i++;
		}
		else
			break ;
	}
	echo $dude;
?>

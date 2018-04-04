#!/usr/bin/php
<?php
	$dude = file_get_contents($argv[1]);
	preg_match_all('/<img[^>]+>/i',$dude, $result);
	print_r($result);
	$img = array();
	$i = 0;
	while ($result[0][$i])
	{
		if (substr($result[0][$i], 0, 14) != "<img src=\"http" &&
		substr($result[0][$i], 0, 13) != "<img src=http")
			$i++;
		else
		{
			$temp .= $result[0][$i];
			$temp .= "\n";
			$i++;
		}
	}
	$i = 0;
	while ($i < strlen($temp))
	{
		while ($temp[$i] != '=')
			$i++;
		$i++;
		while ($temp[$i] != ' ')
		{
			$temp2 .= $temp[$i];
			$i++;
		}
		if ($temp[$i] == ' ')
			break ;
	}
	$ans = str_replace("\"", "", $temp2);
	echo $ans;
?>

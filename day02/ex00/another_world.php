#!/usr/bin/php
<?php
	if ($argc == 1)
		exit(0);
	$ans = trim($argv[1]);
	$ans = preg_replace('/\s+/', " ", $ans);
	echo $ans, "\n";
?>

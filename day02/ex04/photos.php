#!/usr/bin/php
<?php
if ($argc == 1)
	exit (0);
$str = file_get_contents($argv[1]);
preg_match_all('/<img[^>]+>/i',$str, $result);
print_r($result);
$i = 0;
$img = array();
while ($i < count($result))
{
	preg_match_all('/(alt|title|src)=("[^"]*")/i', $result[$i], $img[$i]);
	$i++;
}
print_r($img);
?>

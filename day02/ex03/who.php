#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = preg_replace('/\s+/', ' ', $str);
	$ans = explode('\n', $str);
	return ($ans);
}
$arr = shell_exec("w");
$dude = explode("\n", $arr);
array_shift($dude);
array_shift($dude);
array_pop($dude);
$i = 0;
while ($i < count($dude))
{
	$j = 0;
	while ($dude[$i][$j] != ' ')
	{
		echo $dude[$i][$j];
		$j++;
	}
	$j++;
	echo " ";
	if ($i != 0)
		echo "tty";
	while ($dude[$i][$j] != ' ')
	{
		echo $dude[$i][$j];
		$j++;
	}
	echo " ", " ";
	echo date("M");
	echo " ", " ";
	echo date("j");
	echo " ";
	while ($dude[$i][$j] == ' ')
		$j++;
	while ($dude[$i][$j] != ' ')
		$j++;
	while ($dude[$i][$j] == ' ')
		$j++;
	while ($dude[$i][$j] != ' ')
	{
		echo $dude[$i][$j];
		$j++;
	}
//	if ($i != count($dude) - 1)
		echo "\n";
	$i++;
}
//print_r($dude);
?>

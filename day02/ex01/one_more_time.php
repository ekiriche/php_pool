#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = preg_replace('/\s+/', ' ', $str);
	$ans = explode(' ', $str);
	return ($ans);
}

function convert_to_digit($str)
{
	$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
	$str[0] = strtolower($str[0]);
	$temp = $str;
//	echo $temp, "\n";
	$i = 0;
	while ($months[$i])
	{
		if (strcmp($temp, $months[$i]) == 0)
			return ($i + 1);
		$i++;
	}
	return (0);
}

function is_correct_day($str)
{
	$days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	$str = strtolower($str);
	foreach ($days as $item)
		if ($str == $item)
			return (1);
	return (0);
}

if ($argc == 1)
{
	echo "Wrong Format\n";
	exit (0);
}
if (substr_count($argv[1], " ") != 4)
{
	echo "Wrong Format\n";
	exit(0);
}
$arr = ft_split($argv[1]);
if ($arr[5])
{
	echo "Wrong Format\n";
	exit (0);
}

$name_of_day = $arr[0];
$day = $arr[1];
$month = $arr[2];
$year = $arr[3];
$time = explode(":", $arr[4]);
$hours = $time[0];
$minutes = $time[1];
$seconds = $time[2];
$month_digit = convert_to_digit($month);
//echo $name_of_day, " ", $day, " ", $year, " ", $hours, " ", $minutes, " ", $seconds, " ", $month_digit, "\n";
if (!$name_of_day || !$day || !$month_digit || !$year || !$hours || !$minutes || !$seconds ||
	!ctype_digit($seconds) || !ctype_digit($minutes) || !ctype_digit($hours) ||
	!ctype_digit($year) || !ctype_digit($day) || $seconds < 0 || $seconds > 59 ||
	$minutes < 0 || $minutes > 59 || $hours < 0 || $hours > 23
	|| $day < 1 || $day > 31 || !is_correct_day($name_of_day) ||
	strlen($day) != 2 || strlen($year) != 4 || strlen($hours) != 2 || strlen($minutes) != 2 ||
		strlen($seconds) != 2)
{
	echo "Wrong Format\n";
	exit (0);
}
echo mktime($hours, $minutes, $seconds, $month_digit, $day, $year), "\n";
?>

<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});
function secondToDate($mounth, $day) {

	$currentDate = date('Y.m.d.H.i.s', time());
	$currentDateArray = explode('.', $currentDate);

	if ($currentDateArray[1] > $mounth || ($currentDateArray[1] == $mounth && $currentDateArray[2] > $day)) {
		$year = $currentDateArray[0] + 1;
	} elseif ($currentDateArray[1] == $mounth && $currentDateArray[2] == $day) {
		return 0;
	} else {
		$year = $currentDateArray[0];
	}

	$dateFrom = date_create($currentDateArray[0] . "-" . $currentDateArray[1] . "-" . $currentDateArray[2] . " " . $currentDateArray[3] . ":" . $currentDateArray[4] . ":" . $currentDateArray[5]);
	$dateTo = date_create($year . "-" . $mounth . "-" . $day);

	$diff = date_diff($dateTo, $dateFrom);

	return  ($diff->y * 365 * 24 * 60 * 60) +
			($diff->m * 30 * 24 * 60 * 60) +
			($diff->d * 24 * 60 * 60) +
			($diff->h * 60 * 60) +
			($diff->i * 60) +
			$diff->s;
}

$secondTo = secondToDate(0, 0);

$currentDate = date('m.y.', time());
$currentDateArray = explode('.', $currentDate);

$currentMounth = $currentDateArray[0];
$currentYear = $currentDateArray[1];


$PDO = PdoConnect::GetInstance();


if ($currentMounth == 0 && $currentYear >=  0) {
	include 'butterfly.php';
} else {
	include 'timer.php';
}
?>
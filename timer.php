<!DOCTYPE html>
<html>
	<head>
		<title>butterfly did not open its wings</title>
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/reset.css" type="text/css">
		<link href="css/timer.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
		<script>
			var secondTo = <?=$secondTo?>;
		</script>
	</head>
	<body>
		<div class="vein">
			<a href="butterfly.php">Перейти на сайт</a>
		</div>
		<div class="container main timer-main">
			<div class="background">
				<span class="title">ДО ОТКРЫТИЯ МАГАЗИНА:</span>
			<div id="timer" class="timer">
				<div class="timer-mini">
					<span class="days"></span>
					<div class="small-text">ДНЕЙ</div>
				</div>
				<div class="timer-mini">
					<span class="hours"></span>
					<div class="small-text">ЧАСА</div>
				</div>
				<div class="timer-mini">
					<span class="minutes"></span>
					<div class="small-text">МИНУТЫ</div>
				</div>
				<div class="timer-mini">
					<span class="seconds"></span>
					<div class="small-text">СЕКУНД</div>
				</div>
			</div>
			</div>
		</div>
	</body>
</html>
<?php
	$schedule = fread(fopen("2.txt", "r"), filesize("2.txt"));
	echo ($schedule);
?>

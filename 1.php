<?php
	$schedule = fread(fopen("1.txt", "r"), filesize("1.txt"));
	echo ($schedule);
?>

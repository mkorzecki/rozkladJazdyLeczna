<?php
	$schedule = fread(fopen("3.txt", "r"), filesize("3.txt"));
	echo ($schedule);
?>

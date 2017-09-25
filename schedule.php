<?php
	$x = date('w')+1;
		if (($x==2)||($x==3)||($x==4)||($x==5)||($x==6))
			{
				$schedule = fread(fopen("1.txt", "r"), filesize("1.txt"));
				echo ($schedule);
			}
		elseif ($x==7)
			{
				$schedule = fread(fopen("2.txt", "r"), filesize("2.txt"));
				echo ($schedule);
			}
		elseif ($x==1)
			{
				$schedule = fread(fopen("3.txt", "r"), filesize("3.txt"));
				echo ($schedule);
			}
		else
			{
				echo("Error");
			}
?>

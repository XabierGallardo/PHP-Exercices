<!DOCTYPE html>
<html>
<head>
	<title>Information gathered</title>
</head>
<body>
	<?php
		//Define the timezone based on the coordinated universal time
		echo "<p>Data processed at </p>"; 

		 /* Echos the date
	                h : 12 hr format
	                H : 24 hr format
	                i : Minutes
	                s : Seconds
	                u : Microseconds
	                a : Lowercase am or pm
	                l : Full text for the day
	                F : Full text for the month
	                j : Day of the month
	                S : Suffix for the day st, nd, rd, etc.
	                Y : 4 digit year           */
		echo date('h:i:s:u a, l F jS Y e')
	?>
</body>
</html>
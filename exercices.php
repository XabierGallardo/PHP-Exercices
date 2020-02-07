<?php //Display errors on the screen
//init_set('display_errors', 1);
//init_set('display_startup_errors', 1);
//error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Information gathered</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="phpresults">
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

		echo date('h : i : s  a, l F jS Y e');

		$usersName = $_POST['username'];
		$streetAddress = $_POST['streetaddress'];
		$cityAddress = $_POST['cityaddress'];

		echo '<p>Your info: </p>'; //You can combine variables with text using .
		echo $usersName . ' lives at </br>';
		echo $streetAddress . ' in </br>';
		echo $cityAddress . '</br>';

		//Define constants which value can't change
		define('PI', 3.1415926);
		echo "<p>The value of PI is " . PI . "</p>";

		//The ternary operator assigns one or another value depending on the condition
		//condition ? value if true : value if false
		$biggestNum = (15 > 10) ? 15 : 10;
		echo '<p>Biggest number is: ' . $biggestNum . '</p>';

		//The for loop performs actions until a condition is met like the while, but it a compact way
		echo "<p>Example of for loop: ";
		for ($num = 1; $num <= 10; $num++) {
			echo $num;
			if ($num == 10) {
				echo '.';
			} else {
				echo ', ';
			}
		}
		echo "</p>";

		//The while loop performs actions until a condition is emt
		echo "<p>Example of while loop: ";
		$num = 0;
		while($num < 20) {
			echo ++$num . ', ';
		}
		echo "</p>";



		//ARRAYS/////////////////////////////////////////////////////////////////////////////////////////
		
		//There are three types of arrays
		//1.	Indexed arrays: Arrays with a numeric index
		//2.	Associative arrays: Arrays with named keys
		//3.	Multidimensional arrays: Arrays containing one or more arrays

		//Declaring arrays	$array = array("Xan", "Xabier", "Xaquin"); 
		//from PHP 5.4 		$array = ["Xan", "Xabier", "Xaquin"];
		
		$names = ["Xan", "Xabier", "Xaquin"];
		echo  "First name of the array " . $names[0]; //Taking the first element of the array
		$names[3] = "Xacobe"; //Adding new array
		
		//Let's cycle through the array
		echo "<p>Looping the array with foreach: ";
		foreach($names as $oneName) {
			echo $oneName . " ";
		}
		echo "</p>";

		echo "<p>Looping the array with for loop: ";
		$namesLength = count($names);
		for($x = 0; $x < $namesLength; $x++) {
			echo $names[$x] . " ";
		}

		//Creating key value pairs in arrays
		$customer  = array('Name' => $usersName, 'Street' => $streetAddress, 'City' => $cityAddress);
		foreach($customer as $key => $value) {
			echo "<p>"  . $key . " : " . $value . "</p>";
		}

		//To combine arrays with +
		echo "<p>Example of concatenation: ";
		$names = $names + $customer;
		foreach($names as $name) {
			echo $name . " ";
		}
		echo "</p>";

		//Multimensional arrays: Arrays inside arrays
		$customers = [
			['Sean', '123 Fake Street', '123123'],
			['Xose', '456 Cualca Square', '223123'],
			['Cian', '678 Craic Blvd', '323123']
		];

		echo "<p>Looping on a multidimensional array: ";
		for($row = 0; $row < 3; $row++) {
			for($col = 0; $col < 3; $col++) {
				echo $customers[$row][$col] . ' ';
			}
			echo ',';
		}
		echo "</p>";
		
		//Common array Functions
		//sort($array)	Sorts in ascending alphabetical order or if you add SORT_NUMERIC or SORT_STRING
		//asort($array)	Sorts arrays with keys
		//ksort($array)	Sorts by the key
		//Put a r in front of the above to sort in reverse order

		$myString = "  Ey lads! What's the craic?               ";

		echo "<p>Example of strlen() " . strlen($myString) . "</p>";
		echo "<p>Example of ltrim() " . strlen(ltrim($myString)) . "</p>";
		echo "<p>Example of rtrim() " . strlen(rtrim($myString)) . "</p>";
		echo "<p>Example of trim() " . strlen(trim($myString)) . "</p>";

		echo "<p>Example of echo: " . $myString . "</p>";
		echo "<p>Example of strtolower(): " . strtolower($myString) . "</p>";
		echo "<p>Example of strtoupper(): " . strtoupper($myString) . "</p>";
		echo "<p>Example of ucfirst(): " . ucfirst($myString) . "</p>";

		//To convert strings to arrays or arrays to strings
		echo "<p>Example of explode(): " . strtolower($myString) . "</p>"a

		//printf outputs a formatted string	printf(format, arg1, arg2, arg++);
		/*
    %% - Returns a percent sign
    %b - Binary number
    %c - The character according to the ASCII value
    %d - Signed decimal number (negative, zero or positive)
    %e - Scientific notation using a lowercase (e.g. 1.2e+2)
    %E - Scientific notation using a uppercase (e.g. 1.2E+2)
    %u - Unsigned decimal number (equal to or greather than zero)
    %f - Floating-point number (local settings aware)
    %F - Floating-point number (not local settings aware)
    %g - shorter of %e and %f
    %G - shorter of %E and %f
    %o - Octal number
    %s - String
    %x - Hexadecimal number (lowercase letters)
    %X - Hexadecimal number (uppercase letters)

		*/
                printf ("Example of printf: %u", $myString);





?>
</div>
</body>
</html>

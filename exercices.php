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
		echo "<p>Example of explode(): " . strtolower($myString) . "</p>";

		//printf outputs a formatted string	printf(format, arg1, arg2, arg++);
	
		//printf ("Example of printf: %u", $myString);

		//Objects can be converted into JSON by using the PHP function json_encode()
		$myObj->name = "John";
		$myObj->age = 30;
		$myObj->city = "New York";
		
		$myJSON = json_encode($myObj);
		echo "<p>Example of JSON encoding an object: " . $myJSON . "</p>";

		//Arrays can be converted into JSON when using the PHP function json_encode()
		$myArr = ["Sean", "Cian", "Darragh", "Padraig"];
		$myArrayJSON = json_encode($myArr);
		echo "<p>Example of JSON encoding an array: " . $myArrayJSON . "</p>";



		//DATABASES
		//PHP is a server side programming language and can be used to access a database. If you have a database on your server and you want to send a request to it from the client where you ask for the first 10 rows in a table called "customers".
		//On the client, make a JSON object that describes the name of the table and the numbers of rows you want to return.
		//Before you send the request to the server, convert the JSON object into a string and send it as a parameter to the url of the PHP page

		//On js
		/*obj = {"table":"customers". "limit":10};
	       	dbParam = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
				$("#demo").html = this.responseText;
			}
		};
		xmlhttp.open("GET", "json_demodb.php?x=" + dbParam, true);
		xmlhttp.send();*/


		/*
		 * Define an object containing a table property and a limit property
		 * Convert the object into a JSON string
		 * Send the request to the PHP file, with the JSON string as a parameter
		 * Wait until the request returns with the result (as JSON)
		 * Display the result received from the PHP file*/

		//On php
		header ("Content-Type: application/json; charset=UTF-8");
		$obj = json_decode($_GET["x"], false);

		$conn = new mysql("myServer", "myUser", "myPassword", "Northwind");
		$stmt = $conn->prepare("SELECT name FROM ? LIMIT ?");
		$stmt->bind_param("ss", $obj->table, $obj->limit);
		$stmt->execute();
		$result = $stmt->get_result();
		$outp = $result->fetch_all($outp);

		/*
		 * Convert the request into an object, using the PHP function json_decode()
		 * Access the database and fill an array with the requested data
		 * Add the array  to an object and return the object as JSON using the json_decode() function*/

		//PHP Method = POST
		//When sending data to the server, it's often best to use the HTTP POST method
		//To send AJAX requests using the POST method, specify the method and the correct header
		//The data sent to the server must now be an argument to the send() method

		//On js
		/*obj = { "table":"customers", "limit":10 };
		dbParam = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200) {
		    myObj = JSON.parse(this.responseText);
		    for (x in myObj) {
		      txt += myObj[x].name + "<br>";
		    }
		    document.getElementById("demo").innerHTML = txt;
		  }
		};

		xmlhttp.open("POST", "json_demo_db_post.php, true");
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("x=" + dbParam);*/

		//On php
		header("Content-Type: application/json; charset=UTF-8");
		$obj = json_decode($_POST["x"], false);

		$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
		$stmt = $conn->prepare("SELECT name FROM ? LIMIT ?");
		$stmt->bind_param("ss", $obj->table, $obj->limit);
		$stmt->execute();
		$result = $stmt->get_result();
		$outp = $result->fetch_all(MYSQL_ASSOC);

		echo json_encode($outp);

?>
</div>
</body>
</html>

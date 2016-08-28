<?php

//function declaration
	function write()
	{
		echo "My name is Ashish";
	}

//calling function
	write();


//function with arguments

	function friends($name)
	{
		echo "these are my friends:<br> $name";
	}

	friends("Ashish");
	friends("pratik");
	friends("praful");
	friends("omkar");


	//functions with parameters

	function sum($x,$y)
	{
		return $x+$y;
	}

	echo "5 + 10 = "  .sum(5,10)  "<br>";
	echo "7 + 10 = "  .sum(7,10)  "<br>";
	echo "5 + 5 = "   .sum(5,5)   "<br>";

	//to get the returned value include function btw 2 dots . function . 
?>
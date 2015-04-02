<?php
function factorial ($number )
{
	if ($number < 2 ){
		return 1;

	}
	else
	{

		return ($number * factorial($number-1));

	}
}
echo "you are number is <br />";

  echo factorial(4);

echo "<br />";

echo factorial(8);
echo "<br />";
echo factorial(2);
?>
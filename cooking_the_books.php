<?php
//Author: Fernando Velcic

function swap_number($number, $compareFunc)
{
	$selectednumber = $number;

	for($i = 0; $i < strlen($number)-1; $i++)
	{
		for($j = 0; $j < strlen($number)-1; $j++)
		{
			//Copy
			$newnumber = $number;

			//Swap
			$newnumber[$i] = $number[$j];
			$newnumber[$j] = $number[$i];

			//Check first num of number dont start in zero
			if($newnumber[0] != '0')
				$selectednumber = $compareFunc($selectednumber,intval($newnumber));
		}
	}
	return $selectednumber;
}

//Input file
$line = file("cooking_the_books_example_input.txt");
$lines_count = $line[0];

//Output file
$output = fopen("cooking_the_books_example_output.txt", "w+");

for($i = 1; $i <= $lines_count; $i++)
{
	$string = $line[$i];

	//Output
	//echo "Case #".$i.": ".swap_number($string, min)." ".swap_number($string, max)."<br />";	
	fwrite($output, "Case #".$i.": ".swap_number($string, min)." ".swap_number($string, max)."\r\n");
}
?>
<?
// Tuan Nguyen
// Show Result of the Triangle Evaluator
// Negative value: ok. Used Positive Magnitude
// Zero: Handle gracefully. 3 Zeros: halt the program. 
// 1 side must be less than sum of 2 other sides. If not: "Not a Triangle"


$nfirst = $_POST["nfirst"];
$nsecond = $_POST["nsecond"];
$nthird = $_POST["nthird"];

//Use absolute magnitude. 
$nfirst_abs = abs($nfirst);
$nsecond_abs = abs($nsecond);
$nthird_abs = abs($nthird);

//Print the three numbers
echo '<html><body>';
echo '<h1 align=center>';
echo 'The three numbers entered were:';
echo '</h1>' . "\n";

echo '<div align=center>' . "\n";
echo '<table border=1 width=100%>' . "\n";
echo '<tr>' . "\n";
echo '<td align=center width=33%>';
echo '<b><span style="font-size:4.0em">' . $nfirst . '</span></b>';
echo '</td>' . "\n";
echo '<td align=center width=33%>';
echo '<b><span style="font-size:4.0em">' . $nsecond . '</span></b>';
echo '</td>' . "\n";
echo '<td align=center width=33%>';
echo '<b><span style="font-size:4.0em">' . $nthird . '</span></b>';
echo '</td>' . "\n";
echo '</tr>';
echo '</table>' . "\n";
echo '</div>' . "\n";

echo '<hr><br>' . "\n";

echo '<div align=center>' . "\n";

//Test if three sides equal zero. If it is, halt the program.  
if ($nfirst_abs === 0 && $nsecond_abs === 0 && $nthird_abs === 0) {
	exit ('<b><span style="font-size:2.0em">You have entered three Zeros.<br></b>');
//Test if any of the sides equals zero.
} else if ($nfirst_abs === 0 || $nsecond_abs === 0 || $nthird_abs === 0) {
	echo '<b><span style="font-size:2.0em">You cannot enter Zero as a value.<br></b>';
//If any of the sides does not equal zero, continue evaluating the given values.
} else {
	echo '<b><span style="font-size:2.0em">Here is the result:<br></b>';
}

//Evaluating the user's values to assign the appropriate triangle. 
if (($nfirst_abs < ($nsecond_abs + $nthird_abs)) && ($nsecond_abs < ($nfirst_abs + $nthird_abs)) && ($nthird_abs < ($nfirst_abs + $nsecond_abs))) {
		echo '<b><span style="font-size:2.0em">This is<br></b>';
	//Equilateral Triangle
	if ($nfirst_abs == $nsecond_abs && $nfirst_abs == $nthird_abs) {
		echo '<img src="tri-equ.jpg" />';
	//Isosceles Triangle
	} else if ($nfirst_abs == $nsecond_abs || $nfirst_abs == $nthird_abs || $nsecond_abs == $nthird_abs) {
		echo '<img src="tri-isos.jpg" />';
	}
	//Scalene Triangle
	else {
		echo '<img src="tri-scal.jpg" />';
	} 
}
//Not a Triangle
else {
	echo '<img src="tri-not.jpg" />';
}

echo '</div>' . "\n";

//Include the form for user to try again. 
echo '<hr>' . "\n";
echo '<h1 align=center>';
echo '<b>Try again?</b>';
echo '</h1>'. "\n";
include 'form.php';

echo '</body></html>';

?>
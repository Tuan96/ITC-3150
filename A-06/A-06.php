<?
// Tuan Nguyen
// To sum the numbers from 1 to 25 using Do-While Loop:

echo '<html><body>';
echo '<h1 align=center>';
echo 'To sum the numbers from 1 to 25<br>';
echo 'using Do-While Loop';
echo '</h1>';

$next = 1; 
$sum = 0; 

do {
    $sum += $next;
    $next++; 
}  while ($next <= 25);

echo '<p align=center><br><br>';
echo 'The sum from 1 to 25 is<br>';
echo '<b><span style="font-size:3.0em">' . $sum . '</span></b></p>';

echo '</body></html>';

// Reference: 
// w3schools.com.
// php.net.
// Original code: Prof. Chikofsky. Modified by: Tuan Nguyen
?>
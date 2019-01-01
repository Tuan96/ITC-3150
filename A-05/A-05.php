<?
// Tuan Nguyen
// To sum the numbers from 1 to 25 using While Loop:

echo '<html><body>';
echo '<h1 align=center>';
echo 'To sum the numbers from 1 to 25<br>';
echo 'using While Loop';
echo '</h1>';

$next = 1; 
$sum = 0; 

while ($next <= 25) {
    $sum += $next;
    $next++;
} 

echo '<p align=center><br><br>';
echo 'The sum from 1 to 25 is<br>';
echo '<b><span style="font-size:3.0em">' . $sum . '</span></b></p>';

echo '</body></html>';

// Reference: 
// w3schools.com.
// php.net.
// Original code: Prof. Chikofsky. Modified by: Tuan Nguyen
?>
<?
// Tuan Nguyen
// Form to ask the user for three numbers for the Triangle Evaluator

echo '<h1 align=center>';
echo 'The Triangle Evaluator Program';
echo '<br>Please enter three integer numbers as three sides of the triangle.';
echo '</h1>' . "\n";
?>
<form action="show_result.php" method=post accept-charset=utf-8>
<div align=center>
<table border=0>

<tr>
<td align=left>
<b><span style="font-size:2.0em">First number:&nbsp;&nbsp;</span></b>
</td>
<td align=left>&nbsp;&nbsp;</td>
<td align=center>
<input name="nfirst"  type="text" size="8" value="<? echo $nfirst; ?>" maxsize="12" tabindex=1>
</td>
</tr>

<tr>
<td colspan=3>&nbsp;&nbsp;</td>
</tr>

<tr>
<td align=left>
<b><span style="font-size:2.0em">Second Number:&nbsp;&nbsp;</span></b>
</td>
<td align=left>&nbsp;&nbsp;</td>
<td align=center>
<input name="nsecond"  type="text" size="8" value="<? echo $nsecond; ?>" maxsize="12" tabindex=2>
</td>
</tr>

<tr>
<td colspan=3>&nbsp;&nbsp;</td>
</tr>

<tr>
<td align=left>
<b><span style="font-size:2.0em">Third Number:&nbsp;&nbsp;</span></b>
</td>
<td align=left>&nbsp;&nbsp;</td>
<td align=center>
<input name="nthird"  type="text" size="8" value="<? echo $nthird; ?>" maxsize="12" tabindex=2>
</td>
</tr>

<tr>
<td colspan=3>&nbsp;&nbsp;</td>
</tr>

<tr>
<td colspan=3 align=center>
<button type="submit">&nbsp;&nbsp;<font color=red>CALCULATE</font>&nbsp;&nbsp;</button>
</td>
</tr>

</table>
</div>
</form>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body dir="rtl">
	<?php
	$day=array("شنبه","یکشنبه","دوشنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه")
	$table="<table border='1'><tr>";
	for ($i<=6;$i++)
	$table .="<td>$day[$i]</td>";
	$table .="</tr><tr>";
	for ($j=1;$j<=35;$j++)   {
	if($j<=30)	
	$table .="<td>$j</td>";	
	else	
	$table .="<td> </td>";	
	if(($j % 7)==0)
	$table .="</tr><tr>";
	}
	$table .="</tr><table>";
	echo $table;
	?>
</body>
</html>
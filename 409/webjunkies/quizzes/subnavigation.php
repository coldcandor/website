<?php
$quiz1Link="<li style='width:166px;margin-right:7px;'><a href='quiz_1.php'>Quiz 1</a></li>";
$quiz2Link="<li style='width:166px;margin-right:7px;'><a href='quiz_2.php'>Quiz 2</a></li>";
$quiz3Link="<li style='width:166px;margin-right:7px;'><a href='quiz_3.php'>Quiz 3</a></li>";
$quiz4Link="<li style='width:166px;margin-right:7px;'><a href='quiz_4.php'>Quiz 4</a></li>";


if(strstr($file,'quiz_1')!=false)
{
	$quiz1Link="<li style='width:166px;margin-right:7px'><a href='quiz_1.php'><b>Quiz 1</b></a></li>";

}
elseif(strstr($file,'quiz_2')!=false)
{
	$quiz2Link="<li style='width:166px;margin-right:7px'><a href='quiz_2.php'><b>Quiz 2</b></a></li>";

}
elseif(strstr($file,'quiz_3')!=false)
{
	$quiz3Link="<li style='width:166px;margin-right:7px'><a href='quiz_3.php'><b>Quiz 3</b></a></li>";

}
elseif(strstr($file,'quiz_4')!=false)
{
	$quiz4Link="<li style='width:166px;margin-right:7px'><a href='quiz_4.php'><b>Quiz 4</b></a></li>";

}

?>

<div id="subnav">
	<ul>
	<?php
	echo "$quiz1Link\n";
	echo "\t$quiz2Link\n";
	echo "\t$quiz3Link\n";
	echo "\t$quiz4Link\n";
	?>
	</ul>
</div>
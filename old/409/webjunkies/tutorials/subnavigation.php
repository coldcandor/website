<?php
$tutorial1Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_1/what_is_unix.php'>1. Getting Started</a></li>";
$tutorial2Link="<li style='width:168px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_2/what_are_permissions.php'>2. Advanced Commands</a></li>";
$tutorial3Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_3/index.php'>3. Editing Files</a></li>";
$tutorial4Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_4/command_line_ftp.php'>4. Website Publishing</a></li>";

if(strstr($file,'tutorial_1')!=false)
{
	$tutorial1Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_1/what_is_unix.php'><b>1. Getting Started</b></a></li>";
}
elseif(strstr($file,'tutorial_2')!=false)
{
	$tutorial2Link="<li style='width:168px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_2/what_are_permissions.php'><b>2. Advanced Commands</b></a></li>";
}
elseif(strstr($file,'tutorial_3')!=false)
{
	$tutorial3Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_3/index.php'><b>3. Editing Files</b></a></li>";
}
elseif(strstr($file,'tutorial_4')!=false)
{
	$tutorial4Link="<li style='width:166px;margin-right:7px;'><a href='$subDirectory/tutorials/tutorial_4/command_line_ftp.php'><b>4. Website Publishing</b></a></li>";
}

?>

<div id="subnav">
	<ul>
	<?php
	echo "$tutorial1Link\n";
	echo "\t$tutorial2Link\n";
	echo "\t$tutorial3Link\n";
	echo "\t$tutorial4Link\n";
	?>
	</ul>
</div>
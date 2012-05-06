<?php
$abcLink="<li style='width:350px;'><a href='command_lookup_alphabetical.php'>Alphabetical Command Listing</a></li>";
$catLink="<li style='width:350px;'><a href='command_lookup_categorical.php'>Categorical Command Listing</a></li>";


if(strstr($file,'command_lookup_alphabetical.php')!=false)
{
	$abcLink="<li style='width:350px;'><b><a href='command_lookup_alphabetical.php'>Alphabetical Command Listing</a></b></li>";

}
elseif(strstr($file,'command_lookup_categorical.php')!=false)
{
	$catLink="<li style='width:350px;'><b><a href='command_lookup_categorical.php'>Categorical Command Listing</a></b></li>";
}
?>

<div id="subnav">
	<ul>
	<?php
	echo "$abcLink\n";
	echo "\t$catLink\n";
	?>
	</ul>
</div>
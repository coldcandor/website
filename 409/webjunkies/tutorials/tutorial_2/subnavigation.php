<?php
$tutorial1Link="<li style='margin-left:10px;'><a href='what_are_permissions.php'>What are Permissions?</a></li>";
$tutorial2Link="<li style='margin-left:10px;'><a href='using_chmod.php'>Using chmod</a></li>";
$tutorial3Link="<li style='margin-left:10px;'><a href='creating_files_with_touch.php'>Creating Files with touch</a></li>";
$tutorial4Link="<li style='margin-left:10px;'><a href='changing_password.php'>Changing Password</a></li>";
$quizLink="<li><a href='../../quizzes/quiz_2.php'>Take the Quiz!</a></li>";


if(strstr($file,'what_are_permissions')!=false)
{
	$tutorial1Link="<li style='margin-left:10px;'><b>What are Permissions?</b></li>";
}
elseif(strstr($file,'using_chmod')!=false)
{
	$tutorial2Link="<li style='margin-left:10px;'><b>Using chmod</b></li>";
}
elseif(strstr($file,'creating_files_with_touch')!=false)
{
	$tutorial3Link="<li style='margin-left:10px;'><b>Creating Files with touch</b></li>";
}
elseif(strstr($file,'changing_password')!=false)
{
	$tutorial4Link="<li style='margin-left:10px;'><b>Changing Password</b></li>";
}

?>

<div id="tutorialMenu">
	<ul>
	<li class="headings">Permissions and chmod</li>
	<?php
	echo "$tutorial1Link\n";
	echo "\t$tutorial2Link\n";
	?>
		<li class="headings">Touch and passwd</li>
	<?php
	echo "\t$tutorial3Link\n";
	echo "\t$tutorial4Link\n";
	echo "\t$quizLink\n";	
	?>	</ul>	
		<div> 
		<img src="../images/bar.gif" alt="Bar" />
		</div>

		<div class="dottedline"> 
		<img src="../images/dottedline.gif" alt="dotted line" />
		</div>
		<div id="tutorialLocal">
    <?php
      $out1 = "<a class='plainLinks' href='$subDirectory/tutorials/tutorial_2/";
      $out2 = ".php'>Previous Page</a>";
      $out3 = ".php'>Next Page</a>";
      if(strstr($file, "what_are_permissions") != false) {
        echo "Previous Page";
        echo " | ";
        echo $out1 . "using_chmod" . $out3;
      } elseif(strstr($file, "using_chmod") != false) {
        echo $out1 . "what_are_permissions" . $out2;
        echo " | ";
        echo $out1 . "creating_files_with_touch" . $out3;
      } elseif(strstr($file, "creating_files_with_touch.") != false) {
        echo $out1 . "using_chmod" . $out2;
        echo " | ";
        echo $out1 . "changing_password" . $out3;
      } elseif(strstr($file, "changing_password") || strstr($file, "_windows") != false) {
        echo $out1 . "creating_files_with_touch" . $out2;
        echo " | ";
 		echo "<a class='plainLinks' href='$subDirectory/quizzes/quiz_2.php'>Take the Quiz!</a>";      }
    ?>
  </div>
</div>


  
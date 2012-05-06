

<?php
$tutorial0Link="<li style='margin-left:10px;'><a href='index.php'>Text Editors</a></li>";
$tutorial1Link="<li style='margin-left:10px;'><a href='opening_pico.php'>Opening Pico</a></li>";
$tutorial2Link="<li style='margin-left:10px;'><a href='using_the_editor_pico.php'>Using the editor</a></li>";
$tutorial3Link="<li style='margin-left:10px;'><a href='saving_files_pico.php'>Saving files</a></li>";
$tutorial4Link="<li style='margin-left:10px;'><a href='opening_vi.php'>Opening VI</a></li>";
$tutorial5Link="<li style='margin-left:10px;'><a href='using_the_editor_vi.php'>Using the editor</a></li>";
$tutorial6Link="<li style='margin-left:10px;'><a href='command_mode_vi.php'>Command Mode In VI</a></li>";
$tutorial7Link="<li style='margin-left:10px;'><a href='saving_files_vi.php'>Saving files</a></li>";
$quizLink="<li><a href='../../quizzes/quiz_3.php'>Take the Quiz!</a></li>";


if(strstr($file,'index')!=false)
{
	$tutorial0Link="<li style='margin-left:10px;'><b>Text Editors</b></li>";

}
elseif(strstr($file,'opening_pico')!=false)
{
	$tutorial1Link="<li style='margin-left:10px;'><b>Opening Pico</b></li>";

}
elseif(strstr($file,'using_the_editor_pico')!=false)
{
	$tutorial2Link="<li style='margin-left:10px;'><b>Using the editor</b></li>";

}
elseif(strstr($file,'saving_files_pico')!=false)
{
	$tutorial3Link="<li style='margin-left:10px;'><b>Saving files</b></li>";

}
elseif(strstr($file,'opening_vi')!=false)
{
	$tutorial4Link="<li style='margin-left:10px;'><b>Opening VI</b></li>";

}
elseif(strstr($file,'using_the_editor_vi')!=false)
{
	$tutorial5Link="<li style='margin-left:10px;'><b>Using the editor</b></li>";

}
elseif(strstr($file,'command_mode_vi')!=false)
{
	$tutorial6Link="<li style='margin-left:10px;'><b>Command Mode In VI</b></li>";

}
elseif(strstr($file,'saving_files_vi')!=false)
{
	$tutorial7Link="<li style='margin-left:10px;'><b>Saving files</b></li>";

}
?>

<div id="tutorialMenu">
	<ul>
	<li class="headings">Introduction</li>	
	<?php echo "$tutorial0Link"; ?>
	</ul>
	
	<ul>
	<li class="headings">Using Pico</li>
	<?php
	echo "$tutorial1Link\n";
	echo "\t$tutorial2Link\n";
	echo "\t$tutorial3Link\n";
	echo "</ul>";
	?>
	<ul>
	<li class="headings">Using VI</li>
	<?php
	echo "\t$tutorial4Link\n";
	echo "\t$tutorial5Link\n";
	echo "\t$tutorial6Link\n";
	echo "\t$tutorial7Link\n";
	echo "\t$quizLink\n";	
	echo "</ul>";	
	?>		
		<div> 
		<img src="../images/bar.gif" alt="Bar" />
		</div>

		<div class="dottedline"> 
		<img src="../images/dottedline.gif" alt="dotted line" />
		</div>
		<div id="tutorialLocal">
    <?php
      $out1 = "<a class='plainLinks' href='$subDirectory/tutorials/tutorial_3/";
      $out2 = ".php'>Previous Page</a>";
      $out3 = ".php'>Next Page</a>";
      if(strstr($file, "index") != false) {
        echo "Previous Page";
        echo " | ";
        echo $out1 . "opening_pico" . $out3;
      } elseif(strstr($file, "opening_pico") != false) {
        echo $out1 . "index" . $out2;
        echo " | ";
        echo $out1 . "using_the_editor_pico" . $out3;
      } elseif(strstr($file, "using_the_editor_pico.") != false) {
        echo $out1 . "opening_pico" . $out2;
        echo " | ";
        echo $out1 . "saving_files_pico" . $out3;
      } elseif(strstr($file, "saving_files_pico.") != false) {
        echo $out1 . "using_the_editor_pico" . $out2;
        echo " | ";
        echo $out1 . "opening_vi" . $out3;
      } elseif(strstr($file, "opening_vi.") != false) {
        echo $out1 . "saving_files_pico" . $out2;
        echo " | ";
        echo $out1 . "using_the_editor_vi" . $out3;
      } elseif(strstr($file, "using_the_editor_vi.") != false) {
        echo $out1 . "opening_vi" . $out2;
        echo " | ";
        echo $out1 . "command_mode_vi" . $out3;
      } elseif(strstr($file, "command_mode_vi.") != false) {
        echo $out1 . "using_the_editor_vi" . $out2;
        echo " | ";
        echo $out1 . "saving_files_vi" . $out3;
      } elseif(strstr($file, "saving_files_vi.") != false) {
        echo $out1 . "command_mode_vi" . $out2;
        echo " | ";
        echo "<a class='plainLinks' href='$subDirectory/quizzes/quiz_3.php'>Take the Quiz!</a>";      
      }
    ?>
  </div>
</div>


  
<?php

$tutorial1Link="<li style='margin-left:10px;'><a href='command_line_ftp.php'>Command Line FTP</a></li>";
$tutorial2Link="<li style='margin-left:10px;'><a href='ftp_using_application.php'>Using Smart FTP</a></li>";
$tutorial3Link="<li style='margin-left:10px;'><a href='review_ssh_and_telnet.php'>Review of ssh and telnet</a></li>";
$tutorial4Link="<li style='margin-left:10px;'><a href='publishing_your_first_page.php'>Publishing your first page</a></li>";
$quizLink="<li><a href='../../quizzes/quiz_4.php'>Take the Quiz!</a></li>";

if(strstr($file,'command_line_ftp')!=false)
{
	$tutorial1Link="<li style='margin-left:10px;'><b>Command Line FTP</b></li>";

}
elseif(strstr($file,'ftp_using_application')!=false)
{
	$tutorial2Link="<li style='margin-left:10px;'><b>Using Smart FTP</b></li>";

}
elseif(strstr($file,'review_ssh_and_telnet')!=false)
{
	$tutorial3Link="<li style='margin-left:10px;'><b>Review of ssh and telnet</b></li>";

}
elseif(strstr($file,'publishing_your_first_page')!=false)
{
	$tutorial4Link="<li style='margin-left:10px;'><b>Publishing your first page</b></li>";

}

?>

<div id="tutorialMenu">
	<ul>
	<li class="headings">Publishing Website</li>	
	<?php
	echo "$tutorial1Link\n";
	echo "\t$tutorial2Link\n";
	echo "\t$tutorial3Link\n";
	echo "\t$tutorial4Link\n";
	echo "\t$quizLink\n";


			
	?>
	</ul>	
		<div> 
		<img src="../images/bar.gif" alt="Bar" />
		</div>

		<div class="dottedline"> 
		<img src="../images/dottedline.gif" alt="dotted line" />
		</div>
		<div id="tutorialLocal">
    <?php
      $out1 = "<a class='plainLinks' href='$subDirectory/tutorials/tutorial_4/";
      $out2 = ".php'>Previous Page</a>";
      $out3 = ".php'>Next Page</a>";
      if(strstr($file, "command_line_ftp") != false) {
        echo "Previous Page";
        echo " | ";
        echo $out1 . "ftp_using_application" . $out3;
      } elseif(strstr($file, "ftp_using_application") != false) {
        echo $out1 . "command_line_ftp" . $out2;
        echo " | ";
        echo $out1 . "review_ssh_and_telnet" . $out3;
      } elseif(strstr($file, "review_ssh_and_telnet") != false) {
        echo $out1 . "ftp_using_application" . $out2;
        echo " | ";
        echo $out1 . "publishing_your_first_page" . $out3;
      } elseif(strstr($file, "publishing_your_first_page") != false) {
        echo $out1 . "review_ssh_and_telnet" . $out2;
        echo " | ";
        echo "<a class='plainLinks' href='$subDirectory/quizzes/quiz_4.php'>Take the Quiz!</a>";      
      }
    ?>
  </div>
	
</div>
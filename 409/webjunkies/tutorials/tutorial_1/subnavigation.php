<div id="tutorialMenu">
	<ul>
	<li class="headings">Introduction</li>
    <li style="margin-left:10px;"><?php echo strstr($file, "what_is_unix") ? "<strong>What Is UNIX</strong>" : "<a href='what_is_unix.php'>What is UNIX?</a>"?></li>
    <li style="margin-left:10px;"><?php echo strstr($file, "parts_of_unix") ? "<strong>Parts of UNIX</strong>" : "<a href='parts_of_unix.php'>Parts Of UNIX</a>"?></li>	
    <li class="headings">Using Terminal</li>
    <li style="margin-left:10px;"><?php echo strstr($file, "terminal.") ? "<strong>Opening The Terminal</strong>" : "<a href='opening_terminal.php'>Opening The Terminal</a>"?></li>
    
    <li style="margin-left:10px;"><?php echo strstr($file, "_windows") ? "<strong>With Windows</strong>" : "<a href='opening_terminal_windows.php'>With Windows</a>"?></li>
    <li style="margin-left:10px;"><?php echo strstr($file, "_mac") ? "<strong>With Macintosh</strong>" : "<a href='opening_terminal_mac.php'>With Macintosh</a>"?></li>
    
    <li class="headings">Commands and Paths</li>

    <li style="margin-left:10px;"><?php echo strstr($file, "basic_commands") ? "<strong>Basic Commands</strong>" : "<a href='basic_commands.php'>Basic Commands</a>"?></li>
    <li style="margin-left:10px;"><?php echo strstr($file, "relative_paths") ? "<strong>Absolute vs Relative Paths</strong>" : "<a href='absolute_vs_relative_paths.php'>Absolute vs Relative Paths</a>"?></li>
    <li><a href="../../quizzes/quiz_1.php">Take the Quiz!</a></li>
	</ul>	
  
  <div> 
    <img style="margin-left: 7px;" src="../images/bar.gif" alt="Bar" />
  </div>

  <div class="dottedline"> 
    <img src="../images/dottedline.gif" alt="dotted line" />
  </div>
	
  <div id="tutorialLocal">
    <?php
      $out1 = "<a class='plainLinks' href='$subDirectory/tutorials/tutorial_1/";
      $out2 = ".php'>Previous Page</a>";
      $out3 = ".php'>Next Page</a>";
      if(strstr($file, "what_is_unix") != false) {
        echo "Previous Page";
        echo " | ";
        echo $out1 . "opening_terminal" . $out3;
      } elseif(strstr($file, "parts_of_unix") != false) {
        echo $out1 . "what_is_unix" . $out2;
        echo " | ";
        echo $out1 . "opening_terminal" . $out3;
      } elseif(strstr($file, "terminal.") != false) {
        echo $out1 . "what_is_unix" . $out2;
        echo " | ";
        echo "Next Page";
      } elseif(strstr($file, "_mac") || strstr($file, "_windows") != false) {
        echo $out1 . "opening_terminal" . $out2;
        echo " | ";
        echo $out1 . "basic_commands" . $out3;
      } elseif(strstr($file, "basic_commands") != false) {
        echo $out1 . "opening_terminal" . $out2;
        echo " | ";
        echo $out1 . "absolute_vs_relative_paths" . $out3;
      } elseif(strstr($file, "absolute_vs_relative_paths") != false) {
        echo $out1 . "basic_commands" . $out2;
        echo " | ";
        echo "<a class='plainLinks' href='$subDirectory/quizzes/quiz_1.php'>Take the Quiz!</a>";
      }
    ?>
  </div>
</div>
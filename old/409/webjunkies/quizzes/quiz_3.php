<?php include("../header.inc.php"); ?>

	<script type="text/javascript">
	<!--
		
		function checkQuestion(j)
		{
			
				var question=eval('document.forms[0].elements.question'+j);
			
				for(var k=0;k<question.length;k++)
				{
					if(question[k].checked )
					{
						if(question[k].value=='correct')
						{
							document.getElementById('image'+j).src='images/correct.gif';
							document.getElementById('image'+j).style.visibility='visible';
							document.getElementById('question'+j+'info').style.visibility='hidden';
						}
						else
						{
							document.getElementById('image'+j).src='images/wrong.gif';
							document.getElementById('image'+j).style.visibility='visible';
							document.getElementById('question'+j+'info').style.visibility='visible';
						}
						
						break;
					}
					
				}
			
		}
		
		function startOver(numImages)
		{
			for(var k=1;k<=numImages;k++)
			{		
				document.getElementById('image'+k).style.visibility='hidden';
				document.getElementById('question'+k+'info').style.visibility='hidden';
			}
			

			
		}
		
	//-->
	</script>
	<?php include("subnavigation.php"); ?>
	<div id="content">
	<h3 style="text-align:center">Quiz 3</h3>
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_3/saving_files_vi.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_4/command_line_ftp.php'"?>>Start Next Tutorial</a>
	</div>
	<form action="#" method="post">
		<p class="centeredBox">
		<strong>1. What are two of the most popular UNIX text editors?</strong>
		<img src="images/wrong.gif" id="image1" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question1info" style="color:red; visibility:hidden">The correct answer is <strong>pico and vi</strong>, for more information refer to this <a href="../tutorials/tutorial_3/index.php"> tutorial page.</a></span><br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> Word and Excel<br />
		<input type="radio" name="question1" value="correct" onclick="checkQuestion(1);" /> pico and vi<br/>	
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> pico and WordPerfect<br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> I don't know!<br />
		</p>
		
		<p class="centeredBox">
		<strong>2. What is one of the pico commands to exit the program?</strong>
		<img src="images/wrong.gif" id="image2" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question2info" style="color:red; visibility:hidden">The correct answer is <strong>^X</strong>, for more information refer to this <a href="../tutorials/tutorial_3/saving_files_pico.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);"/> ^S<br />
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> Exit<br />	
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> ^Q<br />
		<input type="radio" name="question2" value="correct" onclick="checkQuestion(2);" /> ^X<br />
		</p>
		
		<p class="centeredBox">
		<strong>3. How would you quit pico without saving the file being edited?</strong>
		<img src="images/wrong.gif" id="image3" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question3info" style="color:red; visibility:hidden">The correct answer is <strong>Use the exit command, then answer "N" when asked to save the changes</strong>, for more information refer to this <a href="../tutorials/tutorial_3/saving_files_pico.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question3" value="correct" onclick="checkQuestion(3);" /> Use the exit command, then answer "N" when asked to save the changes<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> Close the UNIX terminal<br />	
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> ^Q<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> You can't quit without saving the file<br />
		</p>
		
		<p class="centeredBox">
		<strong>4. How would you quit vi without saving the file being edited?</strong>
		<img src="images/wrong.gif" id="image4" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question4info" style="color:red; visibility:hidden">The correct answer is <strong>Type :q! when in command mode</strong>, for more information refer to this <a href="../tutorials/tutorial_3/saving_files_vi.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Close the UNIX terminal<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Type :quit when in command mode<br />	
		<input type="radio" name="question4" value="correct" onclick="checkQuestion(4);" /> Type :q! when in command mode<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> You can't quit without saving the file<br />
		</p>
		
		<p class="centeredBox">
		<strong>5. What is Command Mode in vi?</strong>
		<img src="images/wrong.gif" id="image5" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question5info" style="color:red; visibility:hidden">The correct answer is <strong>The mode where typing tells vi to do things rather than insert text</strong>, for more information refer to this <a href="../tutorials/tutorial_3/using_the_editor_vi.php"> tutorial page.</a></span><br />					
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> The mode where yelling actually works<br />
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> The mode where vi tells you what to do<br />	
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> The mode where you can type text directly<br />
		<input type="radio" name="question5" value="correct" onclick="checkQuestion(5);" /> The mode where typing executes commands rather than inserting text<br />
		</p>
		
		<p class="centeredBox">
		<strong>6. How would you access the help menu in pico?</strong>
		<img src="images/wrong.gif" id="image6" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question6info" style="color:red; visibility:hidden">The correct answer is <strong>Press the F1 key</strong>, for more information refer to this <a href="../tutorials/tutorial_3/using_the_editor_pico.php"> tutorial page.</a></span><br />
		<input type="radio" name="question6" value="correct" onclick="checkQuestion(6);" /> Press the F1 key<br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> Yell "Help me!!" and bang your head on something<br />	
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> Press the F2 key<br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> Type "help"<br />
		</p>
		
		<p class="centeredBox">
		<strong>7. How would you save a file in vi?</strong>
		<img src="images/wrong.gif" id="image7" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question7info" style="color:red; visibility:hidden">The correct answer is <strong>type ":w"</strong>, for more information refer to this <a href="../tutorials/tutorial_3/saving_files_vi.php"> tutorial page.</a></span><br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> type "save"<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> ^S<br />	
		<input type="radio" name="question7" value="correct" onclick="checkQuestion(7);" /> type ":w"<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> type ":q!"<br />
		</p>
		
		<p class="centeredBox">
		<strong>8. What is one way command used to enter edit mode in vi (where you can type normally)?</strong>
		<img src="images/wrong.gif" id="image8" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question8info" style="color:red; visibility:hidden">The correct answer is <strong>i</strong>, for more information refer to this <a href="../tutorials/tutorial_3/using_the_editor_vi.php"> tutorial page.</a></span><br />
		<input type="radio" name="question8" value="correct" onclick="checkQuestion(8);" /> i<br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> e<br/>	
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> edit<br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> ^i<br />
		</p>
		
		<p class="centeredBox">
		<strong>9. What is the correct way to open the pico or vi editor?</strong>
		<img src="images/wrong.gif" id="image9" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question9info" style="color:red; visibility:hidden">The correct answer is <strong>Type the name of the program</strong>, for more information refer to this <a href="../tutorials/tutorial_3/opening_pico.php"> tutorial page.</a></span><br />		
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);"/> Type "open pico" or "open vi"<br />
		<input type="radio" name="question9" value="correct" onclick="checkQuestion(9);" /> Type the name of the program<br />	
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);"/> Type just the filename you want to open<br />
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);" /> Yell really loud so the editor can hear you<br />
		</p>
		
		<p class="centeredBox">
		<strong>10. How would you leave edit mode in vi (thus returning to command mode)?</strong>
		<img src="images/wrong.gif" id="image10" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question10info" style="color:red; visibility:hidden">The correct answer is <strong>by hitting the ESC key</strong>, for more information refer to this <a href="../tutorials/tutorial_3/using_the_editor_vi.php"> tutorial page.</a></span><br />	
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> ^i<br />
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> :command<br/>	
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> ^c<br />
		<input type="radio" name="question10" value="correct" onclick="checkQuestion(10);" /> by hitting the ESC key<br />
		</p>
	<div>
	<input type="reset" name="reset" value="Clear All Answers" onclick="startOver(10);" />
	</div>
	</form>
  
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_3/saving_files_vi.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_4/command_line_ftp.php'"?>>Start Next Tutorial</a>
	</div>
</div>
<?php include("../footer.inc.php"); ?>
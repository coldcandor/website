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
	<h3 style="text-align:center">Quiz 1</h3>
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_1/absolute_vs_relative_paths.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_2/what_are_permissions.php'"?>>Start Next Tutorial</a>
	</div>
	<form action="#" method="post">
		<p class="centeredBox">
		<strong>1. What is the correct command to list files and folders in UNIX?</strong>
		<img src="images/wrong.gif" id="image1" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question1info" style="color:red; visibility:hidden">The correct answer is <strong>ls</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />		
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);"/> list<br />
		<input type="radio" name="question1" value="correct" onclick="checkQuestion(1);" /> ls<br />	
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);"/> dir<br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> listfiles<br />
		</p>
		
		<p class="centeredBox">
		<strong>2. What is the correct command to list all files including invisible ones?</strong>
		<img src="images/wrong.gif" id="image2" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question2info" style="color:red; visibility:hidden">The correct answer is <strong>ls -a</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);"/> ls -l<br />
		<input type="radio" name="question2" value="correct" onclick="checkQuestion(2);" /> ls -a<br />	
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> ls -all<br />
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> listfiles -all<br />
		</p>
		
		<p class="centeredBox">
		<strong>3. What does cd .. do?</strong>
		<img src="images/wrong.gif" id="image3" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question3info" style="color:red; visibility:hidden">The correct answer is <strong>Changes the working directory to the parent...</strong>, for more information refer to this <a href="../tutorials/tutorial_1/absolute_vs_relative_paths.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> Not a valid UNIX command<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> Logs out of the terminal<br />	
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> Changes the working directory to the login directory<br />
		<input type="radio" name="question3" value="correct" onclick="checkQuestion(3);" /> Changes the working directory to the parent of the current working directory<br />
		</p>
		
		<p class="centeredBox">
		<strong>4. What is the mv command used for?</strong>
		<img src="images/wrong.gif" id="image4" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question4info" style="color:red; visibility:hidden">The correct answer is <strong>Both moving and renaming a file</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Moving a file <br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Renaming a file<br />	
		<input type="radio" name="question4" value="correct" onclick="checkQuestion(4);" /> Both moving and renaming a file<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Not a valid unix command<br />
		</p>
		
		<p class="centeredBox">
		<strong>5. Which of the following is an absolute path?</strong>
		<img src="images/wrong.gif" id="image5" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question5info" style="color:red; visibility:hidden">The correct answer is <strong>/home/users/abc123</strong>, for more information refer to this <a href="../tutorials/tutorial_1/absolute_vs_relative_paths.php"> tutorial page.</a></span><br />					
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> users/abc123 <br />
		<input type="radio" name="question5" value="correct" onclick="checkQuestion(5);" /> /home/users/abc123<br />	
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> ../abc123<br />
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> abc123<br />
		</p>
		
		<p class="centeredBox">
		<strong>6. What command ends a UNIX session?</strong>
		<img src="images/wrong.gif" id="image6" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question6info" style="color:red; visibility:hidden">The correct answer is <strong>logout</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> leave <br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> exit<br />	
		<input type="radio" name="question6" value="correct" onclick="checkQuestion(6);" /> logout<br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> done<br />
		</p>
		
		<p class="centeredBox">
		<strong>7. What command makes an empty directory?</strong>
		<img src="images/wrong.gif" id="image7" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question7info" style="color:red; visibility:hidden">The correct answer is <strong>mkdir</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> mkdirecotry <br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> makedirectory<br />	
		<input type="radio" name="question7" value="correct" onclick="checkQuestion(7);" /> mkdir<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> newdir<br />
		</p>
		
		<p class="centeredBox">
		<strong>8. What command will copy the file index.html to a folder named www?</strong>
		<img src="images/wrong.gif" id="image8" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question8info" style="color:red; visibility:hidden">The correct answer is <strong>cp index.html www</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> copy index.html www <br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> copy www index.html <br/>	
		<input type="radio" name="question8" value="correct" onclick="checkQuestion(8);" /> cp index.html www<br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> cp www index.html<br />
		</p>
		
		<p class="centeredBox">
		<strong>9. What does ls -l do?</strong>
		<img src="images/wrong.gif" id="image9" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question9info" style="color:red; visibility:hidden">The correct answer is <strong>Displays a detailed list of files and folders...</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);" /> Displays all files (including invisible ones) in the current working directory<br />
		<input type="radio" name="question9" value="correct" onclick="checkQuestion(9);" /> Displays a detailed list of files and folders in the current working directory <br/>	
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);" /> This is not a valid unix command<br />
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);" /> I don't know!<br />
		</p>
		
		<p class="centeredBox">
		<strong>10. Which command shows the current directory you are working in?</strong>
		<img src="images/wrong.gif" id="image10" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question10info" style="color:red; visibility:hidden">The correct answer is <strong>pwd</strong>, for more information refer to this <a href="../tutorials/tutorial_1/basic_commands.php"> tutorial page.</a></span><br />	
		<input type="radio" name="question10" value="correct" onclick="checkQuestion(10);" /> pwd<br />
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> pdw <br/>	
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> mydir<br />
		<input type="radio" name="question10" value="incorrect" onclick="checkQuestion(10);" /> path<br />
		</p>
	<div>
	<input type="reset" name="reset" value="Clear All Answers" onclick="startOver(10);" />
	</div>
	</form>
  
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_1/absolute_vs_relative_paths.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_2/what_are_permissions.php'"?>>Start Next Tutorial</a>
	</div>
</div>
<?php include("../footer.inc.php"); ?>
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
	<h3 style="text-align:center">Quiz 2</h3>
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_2/changing_password.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_3/index.php'"?>>Start Next Tutorial</a>
	</div>
	<form action="#" method="post">
		<p class="centeredBox">
		<strong>1. What does chmod 755 file.txt do (assume file.txt exists)?</strong>
		<img src="images/wrong.gif" id="image1" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question1info" style="color:red; visibility:hidden">The correct answer is <strong>Sets the user permission to read, write, and execute...</strong>, for more information refer to this <a href="../tutorials/tutorial_2/using_chmod.php"> tutorial page.</a></span><br />		
		<input type="radio" name="question1" value="correct" onclick="checkQuestion(1);"/> Sets the user permission to read, write, and execute and sets the group and world permissions to read and execute<br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> chmod 755 file.txt is not a valid command<br />	
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);"/> Sets the user and group permissions to read, write, and execute and sets the world permissions to read and execute.<br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> Sets the user, group, and world permissions to read, write, and execute.<br />
		</p>
		
		<p class="centeredBox">
		<strong>2. What does chmod g=w file.txt do (assume file.txt exists)?</strong>
		<img src="images/wrong.gif" id="image2" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question2info" style="color:red; visibility:hidden">The correct answer is <strong>Sets the group permissions to write only...</strong>, for more information refer to this <a href="../tutorials/tutorial_2/using_chmod.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);"/>Sets the user, group, and world permissions to write only. <br />
		<input type="radio" name="question2" value="correct" onclick="checkQuestion(2);" />Sets the group permissions to write only.<br />	
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" />Sets the group permissions to read/write. <br />
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" />Sets the world permissions to read, write, and execute. <br />
		</p>
		
		<p class="centeredBox">
		<strong>3. What is the binary number 111 as a decimal number?</strong>
		<img src="images/wrong.gif" id="image3" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question3info" style="color:red; visibility:hidden">The correct answer is <strong>7</strong>, for more information refer to this <a href="../tutorials/tutorial_2/using_chmod.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> 6<br />
		<input type="radio" name="question3" value="correct" onclick="checkQuestion(3);" /> 7<br />	
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> 3<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> 5<br />
		</p>
		
		<p class="centeredBox">
		<strong>4. What is the binary number 110 as a decimal number?</strong>
		<img src="images/wrong.gif" id="image4" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question4info" style="color:red; visibility:hidden">The correct answer is <strong>6</strong>, for more information refer to this <a href="../tutorials/tutorial_2/using_chmod.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> 8 <br />
		<input type="radio" name="question4" value="correct" onclick="checkQuestion(4);" /> 6<br />	
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> 3<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> 4<br />
		</p>
		
		<p class="centeredBox">
		<strong>5. What is the touch command used for?</strong>
		<img src="images/wrong.gif" id="image5" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question5info" style="color:red; visibility:hidden">The correct answer is <strong>creates an empty file</strong>, for more information refer to this <a href="../tutorials/tutorial_2/creating_files_with_touch.php"> tutorial page.</a></span><br />					
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" />Changes file permissions  <br />
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" />Removes files<br />	
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" />Deletes files<br />
		<input type="radio" name="question5" value="correct" onclick="checkQuestion(5);" />Creates an empty file <br />
		</p>
		
		<p class="centeredBox">
		<strong>6. Which command is used for removing a file?</strong>
		<img src="images/wrong.gif" id="image6" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question6info" style="color:red; visibility:hidden">The correct answer is <strong>rm</strong>, for more information refer to this <a href="../tutorials/tutorial_2/creating_files_with_touch.php"> tutorial page.</a></span><br />
		<input type="radio" name="question6" value="correct" onclick="checkQuestion(6);" /> rm <br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> ls<br />	
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> remove<br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> cd<br />
		</p>
		
		<p class="centeredBox">
		<strong>7. What command is used for changing your password?</strong>
		<img src="images/wrong.gif" id="image7" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question7info" style="color:red; visibility:hidden">The correct answer is <strong>passwd</strong>, for more information refer to this <a href="../tutorials/tutorial_2/changing_password.php"> tutorial page.</a></span><br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> changepassword <br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> changepass<br />	
		<input type="radio" name="question7" value="correct" onclick="checkQuestion(7);" /> passwd<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> password<br />
		</p>
		
		
	<div>
	<input type="reset" name="reset" value="Clear All Answers" onclick="startOver(7);" />
	</div>
	</form>
  
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_2/changing_password.php'"?>>Back to the Tutorial</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_3/index.php'"?>>Start Next Tutorial</a>
	</div>
</div>
<?php include("../footer.inc.php"); ?>
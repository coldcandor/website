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
	<h3 style="text-align:center">Quiz 4</h3>
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_4/publishing_your_first_page.php'"?>>Back to the Tutorial</a>
	</div>
	<form action="#" method="post">
		<p class="centeredBox">
		<strong>1. When forming an FTP connection, what do the localhost and remote host refer to?</strong>
		<img src="images/wrong.gif" id="image1" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question1info" style="color:red; visibility:hidden">The correct answer is <strong>Your computer and the computer you wish to connect to, respectively</strong>, for more information refer to this <a href="../tutorials/tutorial_4/command_line_ftp.php"> tutorial page.</a></span><br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> The computer you wish to connect to and your computer, respectively<br />
		<input type="radio" name="question1" value="correct" onclick="checkQuestion(1);" /> Your computer and the computer you wish to connect to, respectively<br/>	
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> Types of people at an Freaky Table Party<br />
		<input type="radio" name="question1" value="incorrect" onclick="checkQuestion(1);" /> Types of connections you can make<br />
		</p>
		
		<p class="centeredBox">
		<strong>2. How would you access a command line FTP in Windows?</strong>
		<img src="images/wrong.gif" id="image2" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question2info" style="color:red; visibility:hidden">The correct answer is <strong>By typing "ftp" in a command prompt window</strong>, for more information refer to this <a href="../tutorials/tutorial_4/command_line_ftp.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);"/> By calling Bill Gates and making a personal request<br />
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> By starting the SmartFTP program<br />	
		<input type="radio" name="question2" value="incorrect" onclick="checkQuestion(2);" /> Windows has no command line FTP<br />
		<input type="radio" name="question2" value="correct" onclick="checkQuestion(2);" /> By typing "ftp" in a command prompt window<br />
		</p>
		
		<p class="centeredBox">
		<strong>3. What is the command to retrieve a file from the server?</strong>
		<img src="images/wrong.gif" id="image3" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question3info" style="color:red; visibility:hidden">The correct answer is <strong>get</strong>, for more information refer to this <a href="../tutorials/tutorial_4/command_line_ftp.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> retrieve<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> download<br />	
		<input type="radio" name="question3" value="correct" onclick="checkQuestion(3);" /> get<br />
		<input type="radio" name="question3" value="incorrect" onclick="checkQuestion(3);" /> put<br />
		</p>
		
		<p class="centeredBox">
		<strong>4. What does the command put file.txt do?</strong>
		<img src="images/wrong.gif" id="image4" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question4info" style="color:red; visibility:hidden">The correct answer is <strong>Sends "file.txt" to the server</strong>, for more information refer to this <a href="../tutorials/tutorial_4/command_line_ftp.php"> tutorial page.</a></span><br />			
		<input type="radio" name="question4" value="correct" onclick="checkQuestion(4);" /> Sends "file.txt" to the server<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Downloads "file.txt" to your computer<br />	
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Puts "file.txt" in a local folder<br />
		<input type="radio" name="question4" value="incorrect" onclick="checkQuestion(4);" /> Removes "file.txt" from your computer<br />
		</p>
		
		<p class="centeredBox">
		<strong>5. What other way is there to use FTP than the command line?</strong>
		<img src="images/wrong.gif" id="image5" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question5info" style="color:red; visibility:hidden">The correct answer is <strong>Graphical programs such as SmartFTP</strong>, for more information refer to this <a href="../tutorials/tutorial_4/ftp_using_application.php"> tutorial page.</a></span><br />					
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> There is no other way<br />
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> Telepathic interface<br />	
		<input type="radio" name="question5" value="incorrect" onclick="checkQuestion(5);" /> Use FTP2, which works like a normal windows folder<br />
		<input type="radio" name="question5" value="correct" onclick="checkQuestion(5);" /> Graphical programs such as SmartFTP<br />
		</p>
		
		<p class="centeredBox">
		<strong>6. What is the difference between SSH and Telnet?</strong>
		<img src="images/wrong.gif" id="image6" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question6info" style="color:red; visibility:hidden">The correct answer is <strong>SSH is more secure than telnet</strong>, for more information refer to this <a href="../tutorials/tutorial_4/review_ssh_and_telnet.php"> tutorial page.</a></span><br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> Telnet is more secure than SSH<br />
		<input type="radio" name="question6" value="correct" onclick="checkQuestion(6);" /> SSH is more secure than telnet<br />	
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> SSH is more expensive to get than telnet<br />
		<input type="radio" name="question6" value="incorrect" onclick="checkQuestion(6);" /> Telnet requires a telephone to use<br />
		</p>
		
		<p class="centeredBox">
		<strong>7. What permissions are required to publish a webpage?</strong>
		<img src="images/wrong.gif" id="image7" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question7info" style="color:red; visibility:hidden">The correct answer is <strong>Read and execute</strong>, for more information refer to this <a href="../tutorials/tutorial_4/publishing_your_first_page.php"> tutorial page.</a></span><br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> Read and write<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> Write and execute<br />	
		<input type="radio" name="question7" value="correct" onclick="checkQuestion(7);" /> Read and execute<br />
		<input type="radio" name="question7" value="incorrect" onclick="checkQuestion(7);" /> Read, write, and execute<br />
		</p>
		
		<p class="centeredBox">
		<strong>8. In what folder do you need to put files to be published?</strong>
		<img src="images/wrong.gif" id="image8" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question8info" style="color:red; visibility:hidden">The correct answer is <strong>www</strong>, for more information refer to this <a href="../tutorials/tutorial_4/publishing_your_first_page.php"> tutorial page.</a></span><br />
		<input type="radio" name="question8" value="correct" onclick="checkQuestion(8);" /> www<br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> web<br/>	
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> mySite<br />
		<input type="radio" name="question8" value="incorrect" onclick="checkQuestion(8);" /> Any folder will do<br />
		</p>
		
		<p class="centeredBox">
		<strong>9. Do permissions also apply to folders?</strong>
		<img src="images/wrong.gif" id="image9" alt="right/wrong" style="visibility:hidden" />
		<br />
		<span id="question9info" style="color:red; visibility:hidden">The correct answer is <strong>Yes</strong>, for more information refer to this <a href="../tutorials/tutorial_4/publishing_your_first_page.php"> tutorial page.</a></span><br />		
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);"/> No<br />
		<input type="radio" name="question9" value="correct" onclick="checkQuestion(9);" /> Yes<br />	
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);"/> Only when you want them to<br />
		<input type="radio" name="question9" value="incorrect" onclick="checkQuestion(9);" /> Only when you don't want them to<br />
		</p>
		
	<div>
	<input type="reset" name="reset" value="Clear All Answers" onclick="startOver(9);" />
	</div>
	</form>
  
  <div style="text-align: center">
    <a class="plainLinks" href=<?php echo "'$subDirectory/tutorials/tutorial_4/publishing_your_first_page.php'"?>>Back to the Tutorial</a>
	</div>
</div>
<?php include("../footer.inc.php"); ?>
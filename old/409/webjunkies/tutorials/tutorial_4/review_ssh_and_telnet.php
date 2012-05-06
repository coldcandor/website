<?php include ("../../header.inc.php"); ?>
<?php include ("../subnavigation.php"); ?>
<?php include ("subnavigation.php"); ?>
<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Connect to Server using ssh Or telenet</p>

<div class="tutorialParagraph">
Connecting to a server using ssh and telnet was covered in section 1, referring essentially to the program Putty, which is used with windows.  The user interface varies slightly from platform to platform, particularly with a mac.  In the Macintosh environment, the user can open the 'terminal' program, which runs UNIX natively in macintosh computers.  To open a telnet session, simply type:<br /><br />

telnet:/server.com<br /><br />

where server is the name of the server you wish to connect to.  To open an ssh session, simply type<br /><br /> 

ssh server.com.<br />
For more details or a review, simply refer to <a class="plainLinks" href="../tutorial_1/opening_terminal.php">tutorial 1.</a><br /><br /><br />
</div>
<div class="tutorialParagraph">

<p class="tutorialSubtitle">Differences between ssh and telnet:</p>

	The main difference between ssh and telnet is that ssh allows for data encryption over your connection to a server, allowing for much more secure access to your account.  The differences between ssh and telnet have also been covered in tutorial 1. So for a more details, simply refer to <a class="plainLinks" href="../tutorial_1/opening_terminal.php">tutorial 1.</a>
</div>


<br />


</div></div>
	
<?php include ("../../footer.inc.php"); ?>
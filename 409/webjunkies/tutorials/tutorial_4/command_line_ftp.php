<?php include ("../../header.inc.php"); ?>
<?php include ("../subnavigation.php"); ?>
<?php include ("subnavigation.php"); ?>
<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Tutorial 4: Command Line FTP</p>

<div class="tutorialParagraph">
Command line FTP can be accessed in windows, by opening up the start menu and going to run, then typing in <br /><br />
cmd <br /><br />

and hitting enter.  This will provide you with the dos command prompt.  At the C:/ prompt type:<br /><br />
ftp<br /><br />

 and hit enter. You will see 'ftp>' which will indicate that the command line is ready to receive ftp commands.  From here, like with ssh and telnet, you type:
<br /><br />
open server.com<br /><br />

where server is the name of the server you wish to access, to open a connection and transfer files.  You computer is whats called the 'localhost' and the server is considered the 'remote host'.  Any commands you carry out need to be mindful of which host you want it to affect.  For instance, the command 'cd' will change the REMOTE directory, meaning, on the server. To change the directory on your computer, you add an 'l' in the front:<br /><br />

lcd directory<br /><br />

To get a file from the server and put it on your computer, you use the command:<br /><br />

get file.ext<br /><br />

 You can rename the file at the same time by typing <br /><br />

get file.ext  newfilename.ext<br /><br />

To put a file on the server from your computer, you use the put command, the same way you would the get command.<br /><br />

To upload or download multiple files, use the commands <br /><br />

Mget and mput <br /><br />

with a wildcard sign. For instance, if you wanted to get anything beginning with f, you type:<br /><br />

 Mget  f *.html<br /><br />
  
For help and a list of commands, you simply type <br /><br />

Help




</div></div></div>
	
<?php include ("../../footer.inc.php"); ?>
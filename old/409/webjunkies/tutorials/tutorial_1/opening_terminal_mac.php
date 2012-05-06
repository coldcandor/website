<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>

	<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Opening Terminal In Mac OS X</p>
		<div class="tutorialParagraph">
		<strong id="mac">In Mac OS X</strong>, you will not need to download any software as Unix is part of your operating system.  The program
		in Mac OS X is called Terminal and it is located in the Utilites Folder of your Applications Folder. (Shown Below)<br /><br />
		<img src="images/mac_terminal.jpg" alt="mac terminal" /><br /><br /><br />
		<p>Double click the terminal application to get started. A window will launch where you can type in text. (Shown Below)</p>
		<img src="images/mac_terminal_window.jpg" alt="Mac Terminal Window" />
		
		<br />
		To connect to a unix server you need 4 pieces of information:
		<ul>
		<li>Host Name or IP Address of Unix Computer</li>
		<li>Your username for the Unix machine (should be given to you)</li>
		<li>Your password for the Unix machine (should be given to you)</li>
		<li>* Protocols supported for connecting to the Unix machine (telenet, ssh, or both)</li>
		</ul>
		<p>
		* The 4th bullet is important! Telnet is an insecure way to connect to a Unix machine, where your 
		information is sent unencrypted across the network.  SSH is a much more secure protocol where your information
		is encrypted when communicating. <strong>Always use SSH if available!</strong>
		</p>
		<p>
		After gathering this information you are ready to connect to the Unix server and start your journey
		with Unix!</p>
		
		<p>If telnet is available and ssh is not, type the following into the terminal window: <br />
		<span class="commandExample">telnet -l <em>username</em> <em>hostname or ip address</em></span>
		then hit enter. Then when prompted for a password simply type it in and hit enter. <strong>Note: When typying your 
		password in, it appears you are typing nothing, this is for security concers. Just type your password
		and hit enter.</strong><br /><br />In case you are confused on exactly what to type, consider this 
		example:<br />
		If the information I collected is the following:</p>
		<ul>
		<li>username-john</li>
		<li>password-dog123</li>
		<li>hostname-rit.edu</li>
		<li>Protocol telnet</li>
		</ul>
		<p>I would type: <span class="commandExample">telnet -l john rit.edu</span> and then hit enter.<br />
		then when asked for my password I would type dog123 and hit enter. I am now connected to the Unix
		server.
		</p>
		<br /><br />
		<p>	
		If you were able to connect to a remote unix server, you should see a window similar to this:
		(shown below)<br /><br />
		<img src="images/mac_unix_window_successful.jpg" alt="Mac Unix Server Successful" />
		</p>
    </div>

	</div>	
	
	
	</div>

<?php include("../../footer.inc.php"); 



?>
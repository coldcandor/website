<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	
	<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Opening Terminal In Windows</p>
		<div class="tutorialParagraph">
		<strong id="windows">In Windows</strong> Unix is not part of your operating system, so you will need to download software that will
		allow you to connect a remote server that has Unix installed.  Software known as PUTTY is commonly used to connect to remote
		Unix servers.  Putty can be downloaded for free for at its <a class="plainLinks" href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">website.</a><br /><br />
		
		Once you have downloaded and installed Putty, launch the program.  You should see a window similar to the one below:<br />
		<br /><img src="images/putty_window.jpg" alt="Putty Window" /><br /><br />
		To connect to a unix server you need 4 pieces of information:
		<ul>
		<li>Host Name or IP Address of Unix Computer to which you wish to connect</li>
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
		with Unix! Simply type in the host name or ip address into the field in putty and make sure
		the correct protocol of ssh or telnet is selected. Then click open. After clicking open, you will most likely see the
		a window similar to the one shown below:
		</p>
		<img src="images/putty_warning.jpg" alt="Putty Warning" />
		<p>Simply click yes and a terminal window will appear.</p>
		
		<p>You will now be asked for your username, simply type it in and hit enter. Now the Unix
		machine needs your password. Type your password in and hit enter.<br /><strong>Note: When typying your 
		password in, it appears you are typing nothing, this is for security concers. Just type your password
		and hit enter.</strong>
		</p>
		<p>If you were successful in logging into the Unix server you should be shown a window similar to the one below.</p>
		<img src="images/putty_logged_in.jpg" alt="logged in successfully" />
		</div>

	</div>	
	
	
	</div>

<?php include("../../footer.inc.php"); 
/*
Sources
http://www.lunarc.lu.se/Support/Tutorials/lunarc/images/putty-main-window-01.png*/

?>
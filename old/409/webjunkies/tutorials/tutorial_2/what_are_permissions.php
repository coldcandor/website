<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	<div id="content">
	
	
	
		<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Advanced Commands</p>

<div class="tutorialParagraph">In this session we will cover more advanced commands associated with the UNIX operating system.  Now that you have an understanding of UNIX, its environment, and its purpose, these commands will allow you to navigate more easily and ensure that you know how to fully manage your workspace using UNIX.</div>
	<br />
	
<img src="../images/dothoro.gif" alt="dotted line" />
<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Using Permissions </p>
<div class="tutorialParagraph">Permissions determine what a user can do with a file, and permissions are defined in 3 parts.<br/><br/>
<em>read</em>: can the user read whats in the file?<br/><br/>
<em>write</em>: can the user modify the file?<br/><br/>
<em>execute</em>: can the user run the file?<br/><br/>
Setting permissions allows you to retain control over the content of your files. You wouldn't want everyone viewing your page to have the ability to modify it, would you?<br />
Permissions for a file are represented in 3 bits for each different class of users.  And, when recalled by the 'ls -l' command, looks like this:
<br />
<em> -rwxr-xr-x file.ext</em>
<br />
Files always have a clear bit, denoted by a '-', at the beginning. Directories start off with a 'd'.  Then the permissions are described in threes for the user, the group, and everyone else.  In this case, the <em>owner</em> can read, write and execute the file, while the group as well as anyone else can only read and execute the file.<br /><br /></div>


</div>

	
	</div>
<?php include("../../footer.inc.php"); ?>
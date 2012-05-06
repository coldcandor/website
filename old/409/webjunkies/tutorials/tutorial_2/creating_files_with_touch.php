<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	<div id="content">
		<div id="tutorialContent">
		<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Creating Files Using 'touch'</p>

	<div class="tutorialParagraph">The touch command will create an empty file for you use.   It syntax is such:<br /><br />
	<em>touch file.ext</em><br /><br />
	Where 'file.ext' is the name of your new file.  You can further modify the contents of the file using a text editor, or the file can be used as proof that you have permissions to write to a directory.<br /><br />
	If 'file.ext' is the name of an existing file, the touch command will update the time registry on it. You can verify this using the 'ls -l' command to check the last time a file was modified.<br />
	</div>
		<br />
	
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Deleting files with 'rm'</p>
	<div class="tutorialParagraph">You can delete a file using the 'rm' command.
	Its syntax is similiar to touch:
	<br /><br />
	<em>rm file.ext</em><br /><br />
	This can be used on files. To remove a directory, you use the <em>rmdir</em> command.<br />

	</div>


	</div>
	
	
</div>

	
	

<?php include("../../footer.inc.php"); ?>
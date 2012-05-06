<?php include ("../../header.inc.php"); ?>
<?php include ("../subnavigation.php"); ?>
<?php include ("subnavigation.php"); ?>
<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Tutorial 4: Publishing Your First Page</p>

<div class="tutorialParagraph">
	Open an ftp session and upload a simple index.html file to your www folder.<br /><br />

	Now, close that ftp session and open an ssh session.  Make sure you log in properly and access the appropriate folder in which you put your index.html file.  Use <br /><br />

ls -l<br /><br />

To view the details of all the files.  By default, index.html should have read and write permissions for the owner, and read permissions for the group and other users. As we know, the permissions appear to the left of a file, and they should look like this:<br /><br />

- r w - r- - r - -<br /><br />

Now, use a web browser to try and access that web page.  The browser claims you don't have permission to view that page!  Now, go back to your ssh session.<br /><br />

Use the chmod command to change the permissisons on your index file so that you, your group and others have read and execute permissions, while only you have write permissions.<br /><br />

chmod 755 index.html<br /><br />

If you placed index.html in a new directory, also ensure that the directory permissions are set the same way. <br /><br /> 

Go back to your web browser and reload the page. Now it appears! Now that you set the execute permissions for everyone, the server will let you and others see your page.

<br /><br />
Congratulations, you have published your first web page! 

</div></div></div>
	
<?php include ("../../footer.inc.php"); ?>
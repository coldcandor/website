<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	<div id="content">
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Using chmod</p>

<div class="tutorialParagraph">The <em>chmod</em> command is a very important within the UNIX operating system.  
The chmod command is what allows you to set the specific permissions of a file.<br /><br />
the chmod command is written as such:<br /><br />
<em> chmod user=permissions file.ext</em><br /><br />
The user is represented by a <b>u</b> for the owner, a <b>g</b> for the group, <b>o</b>
for others, and <b>a</b> for all.  The permissions are represented by an <b>r</b> for read, a <b>w</b> for write, and an <b>x</b> for execute. So the following line:<br /><br />
<em> chmod g=w info.txt</em><br /><br />
Would change the permissions so that the group can now modify, or write, to the file.


</div>
	<br />
	
<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Theres another way... </p>
<div class="tutorialParagraph">Now that you know how to set permissions through text, there is another way to set permissions for a file numerically.  It is also a bit easier.<br /><br />
Like previously mentioned, each user's permissions are represented by 3 bits. These translate into binary as a numerical value. They break down as follows:<br /><br />
<em>000 = 0<br />
001 = 1<br />
010 = 2<br />
011 = 3<br />
100 = 4<br />
101 = 5<br />
110 = 6<br />
111 = 7<br /></em><br />
Each sequential digit is worth twice the amount of the previous.  And each digit can represent a read, write, or execute permission.  One number, then, will set all the permissions for a user type.  To set all permissions, the chmod command looks like:<br /><br />

<em> chmod 755 file.ext</em><br /><br />
Here, the user has the right to read, write, and execute, as represented by the seven.  Because in binary, the 7 sets all 3 bits for the permissions to 1 or 'on'.  Both the group and others can only read and execute as represented by the 5.<br />
</div>


</div>


</div>
<?php include("../../footer.inc.php"); ?>
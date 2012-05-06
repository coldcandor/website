<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>

	<div id="content">
	
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Parts Of Unix</p>
	<div class="tutorialParagraph">
The Unix Operating System is made of 3 parts; the kernal, the shell, and programs.
</div><br />

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; The kernel</p>
<div class="tutorialParagraph">
	The kernel of UNIX is the hub of the operating system: it allocates time and memory to programs and handles the 
	filestore and communications in response to system calls.  <br /><br />As an illustration of the way that the shell and the 
	kernel work together, suppose a user types rm myfile (which has the effect of removing the file myfile). The shell 
	searches the filestore for the file containing the program rm, and then requests the kernel, through system calls, 
	to execute the program rm on myfile. When the process rm myfile has finished running, the shell then returns the 
	UNIX prompt % to the user, indicating that it is waiting for further commands.
	</div><br /><br />
<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; The shell</p>
<div class="tutorialParagraph">The shell acts as an interface between the user and the kernel. When a user logs in, the login program checks the 
	username and password, and then starts another program called the shell. The shell is a command line interpreter (CLI). 
	It interprets the commands the user types in and arranges for them to be carried out. The commands are themselves 
	programs: when they terminate, the shell gives the user another prompt.<br /><br />
	The adept user can customise his/her own shell, and users can use different shells on the same machine. <br /><br />

</div>

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Programs</p>
<div class="tutorialParagraph">
Programs in Unix are normally small applications that the user can access via the command line.
When preforming any Unix command, you are always using a program.  For example when typing rm filename, rm is an
actual program in Unix that is called to being used.  You can think of programs an Unix as small components
that are accessed by typing their names.
</div>

<img src="../images/dothoro.gif" alt="dotted line" />


</div><!--End Tutorial Content-->
	

	
</div><!--End Content-->
<?php include("../../footer.inc.php"); 
/*
Sources:
http://www.ee.surrey.ac.uk/Teaching/Unix/unixintro.html*/
?>
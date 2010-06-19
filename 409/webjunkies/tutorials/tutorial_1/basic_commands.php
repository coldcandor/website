<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	
	
	
	<div id="content">
	
	<div id="tutorialContent">

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Listing Files and Directories</p>
<div class="tutorialParagraph"><strong>ls (list)</strong><br />

When you first login, your current working directory is your home directory. Your home directory has the same name as your username, and it is where your personal files and subdirectories are saved.

To find out what is in your home directory, type

<p class="commandExample">% ls (short for list)</p>

The ls command lists the contents of your current working directory.

There may be no files visible in your home directory, in which case, the UNIX prompt will be returned. Alternatively, there may already be some files inserted by the System Administrator when your account was created.

<span class="commandExample">ls</span> does not, in fact, cause all the files in your home directory to be listed, but only those ones whose name does not begin with a dot (.) Files beginning with a dot (.) are known as hidden files and usually contain important program configuration information. They are hidden because you should not change them unless you are very familiar with UNIX!!!

<br />To list all files in your home directory including those whose names begin with a dot, type

<p class="commandExample">% ls -a</p>

To displays a detailed list of files and folders in the current working directory, type

<p class="commandExample">% ls -l</p>

<span class="commandExample">ls</span> is an example of a command which can take options: <span class="commandExample">-a</span> is an example of an option. The options change the behaviour of the command.<br /><br /></div>
<img src="../images/dothoro.gif" alt="dotted line" />
<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Making Directories</p>

<div class="tutorialParagraph"><strong>mkdir (make directory)</strong><br />

To make a subdirectory in your current working directory type

<p class="commandExample">% mkdir </p>

To see the directory you have just created, type

<p class="commandExample">% ls</p></div>
<img src="../images/dothoro.gif" alt="dotted line" />

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Changing to a Different Directory </p>

<div class="tutorialParagraph"><strong>cd (change directory)</strong><br />

The command cd directory means change the current working directory to 'directory'. The current working directory may be thought of as the directory you are in, i.e. your current position in the file-system tree.

To change to the directory you have just made, type

<p class="commandExample">% cd 'directory'</p>

Type <span class="commandExample">ls </span>to see the contents (which should be empty)</div>
<br />
<img src="../images/dothoro.gif" alt="dotted line" />

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Pathnames</p>

<div class="tutorialParagraph"><strong>pwd (print working directory)</strong><br />
Pathnames enable you to work out where you are in relation to the whole file-system. For example, to find out the absolute pathname of your home-directory, use cd to get back to your home-directory and then type

<p class="commandExample">% pwd</p></div>

<img src="../images/dothoro.gif" alt="dotted line" />

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Moving Files</p>

<div class="tutorialParagraph"><strong>mv (move)</strong><br />
To move a file from one place to another, use the mv command. This has the effect of moving rather than copying the file, so you end up with only one file rather than two.

It can also be used to rename a file, by moving the file to the same directory, but giving it a different name.
<br /><br />
<span class="commandExample">% mv file1 file2 </span>&nbsp;&nbsp;&nbsp; -moves (or renames) file1 to file2<br /><br /></div>

<img src="../images/dothoro.gif" alt="dotted line" />

<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Copying Files</p>
<div class="tutorialParagraph"><strong>cp (copy)</strong><br />
To make a copy of file1 in the current working directory and calls it file2, type
<p class="commandExample">% cp file1 file2 </p></div>

<img src="../images/dothoro.gif" alt="dotted line" />
<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Log Out</p>
<div class="tutorialParagraph">To end a UNIX session, type
<p class="commandExample">% logout </p></div>
</div>


	
</div><!--End Content DIV-->


<?php include("../../footer.inc.php"); ?>
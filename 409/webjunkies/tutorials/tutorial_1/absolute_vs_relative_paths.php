<?php include("../../header.inc.php"); ?>
	
	<?php include ("../subnavigation.php"); ?>
	<?php include("subnavigation.php"); ?>
	
<div id="content">

	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif"  alt="dot" />&nbsp; Relative and Absolute Paths</p>

<p class="tutorialParagraph">The first thing we need to understand is how the file system is addressed. That is, how do you know where within the file system you are or where your file is located?
UNIX has an address system based upon file paths. A file path specifies the route that you need to take in order to find a file within the file tree much like a map directs you from one location to another.

In UNIX, all paths start from the "root" directory. The root directory is specified by a single slash "/" character. From there, steps along the path are separated by successive slash characters.

Thus, the path "/usr/webjunkies/public_html/index.html" specifies a file called "index.html" which is located in the "public_html" directory, which is a sub-directory of "webjunkies", which is a sub-directory of "usr", which is itself a sub-directory of "root"!

This type of path is called an absolute path because it references a file or directory absolutely from the root.

<img src="images/absolutepath.jpg" alt="Absolute Path" /><br /><br />

However, paths can also be relative to your current location within the file system. <br />To specify a relative path, you do not specify the path from "root" by not including the initial slash character.

For example, if we were currently located in the "webjunkies" sub-directory, we could refer to the file "index.html" using the path "public_html/index.html". Notice that since we do not include the initial "/" UNIX will assume that the specified path is relative to your current location which is "/usr/webjunkies".

<img src="images/relativepath.jpg" alt="Absolute Path" /><br /><br />

Two final important path tools are the ".." and "." notations. In short, ".." stands for the directory directly above the present directory and the "." refers to the present directory.

Thus, if we were in the "public_html" directory from our example above, "./.." would stand for the "webjunkies" directory and "./../.." would stand for the "usr" directory. If this is all a bit confusing now don't worry, you can learn this by actually doing it on a UNIX machine.  It will all make more sense when you can do it yourself.</p>
<br /><br />
</div>

</div>	

<?php include("../../footer.inc.php"); ?>
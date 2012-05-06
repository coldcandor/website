<?php include("../header.inc.php"); ?>

	<?php include ("subnavigation.php");?>

	<script type="text/javascript">
	<!--
		function changeState(divName)
		{
			var element=document.getElementById(divName);
			
			if(element.style.display=="none")
			{
				element.style.display="";
			}
			else
			{
				element.style.display="none";
			}
		}
		
	//-->
	</script>
	
	
	
	<div id="content">
	<h3 id="top" style="text-align:center">Categorical Command Listing</h3>
			
	<p id="files" class="alphabetList">Working with Files</p>
		<ul>
			<li class="commandsList" onclick="changeState('ls');" style="cursor: pointer;"><span class="commandsList">ls</span><br />
			<div id="ls" class="commandDesc" style="display: none">
			Shows directory listing. If no "directory" is specified, "ls" prints the names of the files in the current directory.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('pwd');" style="cursor: pointer;"><span class="commandsList">pwd</span><br />
			<div id="pwd" class="commandDesc" style="display: none">
			Return the current working directory.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cd');" style="cursor: pointer;"><span class="commandsList">cd</span><br />
			<div id="cd" class="commandDesc" style="display: none">
			The command cd directory means change the current working directory to 'directory'. The current working directory may be thought of as the directory you are in, i.e. your current position in the file-system tree. To change to the directory you have just made, type the command. Cd directory means change the current working directory to 'directory'. The current working directory may be thought of as the directory you are in, i.e. your current position in the file-system tree. To change to the directory you have just made, type 'cd'.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cat');" style="cursor: pointer;"><span class="commandsList">cat</span><br />
			<div id="cat" class="commandDesc" style="display: none">
			The cat command prints out ( to the screen ) the contents of the named file. It can also be used to concatenate files. Say you want file1 and file2 to be all together in one file named file3. If file1 is first, then "cat file1 file2 > file3" will produce the correct file3.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('head');" style="cursor: pointer;"><span class="commandsList">head</span><br />
			<div id="head" class="commandDesc" style="display: none">
			The head command displays the first few lines of files.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('tail');" style="cursor: pointer;"><span class="commandsList">tail</span><br />
			<div id="tail" class="commandDesc" style="display: none">
			Deliver the last part of a file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('less');" style="cursor: pointer;"><span class="commandsList">less</span><br />
			<div id="less" class="commandDesc" style="display: none">
			The alias command creates or removes a pseudonym or shorthand for a command or series of commands.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('vi');" style="cursor: pointer;"><span class="commandsList">vi</span><br />
			<div id="vi" class="commandDesc" style="display: none">
			Runs the screen oriented text editor named "vi". If a filename is specified, you will be editing that file. Type "[ESC]:q!" to exit without making any changes. 
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cp');" style="cursor: pointer;"><span class="commandsList">cp</span><br />
			<div id="cp" class="commandDesc" style="display: none">
			The cp command Copies files from one directory/filename to another. "cp f1 f2" makes a file "f2" identical to "f1". "cp *.c src/" copies all files that end in ".c" into the "src" subdirectory.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('mv');" style="cursor: pointer;"><span class="commandsList">mv</span><br />
			<div id="mv" class="commandDesc" style="display: none">
			Moves "filename" to "path". This might consist of a simple renaming of the file, "mv file1 file2", moving the file to a new directory, "mv file1 /tmp/", or both "mv file1 /tmp/file2".
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('rm');" style="cursor: pointer;"><span class="commandsList">rm</span><br />
			<div id="rm" class="commandDesc" style="display: none">
			Removes files. Careful with this one - it is irreversible. It is usually aliased ( in a user"s .cshrc file ) to "rm -i" which insures that "rm" asks you if you are sure that you want to remove the named file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('mkdir');" style="cursor: pointer;"><span class="commandsList">mkdir</span><br />
			<div id="mkdir" class="commandDesc" style="display: none">
			Makes a sub-directory named "dirname" in the current directory.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('rmdir');" style="cursor: pointer;"><span class="commandsList">rmdir</span><br />
			<div id="rmdir" class="commandDesc" style="display: none">
			Removes the directory "dirname".
			</div>
			</li>

			<li class="commandsList" onclick="changeState('grep');" style="cursor: pointer;"><span class="commandsList">grep</span><br />
			<div id="grep" class="commandDesc" style="display: none">
			The grep command searches a file for a pattern.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('chmod');" style="cursor: pointer;"><span class="commandsList">chmod</span><br />
			<div id="chmod" class="commandDesc" style="display: none">
			Changes the permission modes of a file. If you type "ls -l" in a directory, you might get something like this:<br />
    		drwx------ 3 ertle 512 Jul 16 13:38 LaTeX/<br />
    		drwxr-xr-- 2 ertle 512 Jun22 12:26 X/<br />
    		drwxr-xr-x 3 ertle 512 Jul 13 16:29 Xroff/<br />
    		-rw-r--r-- 1 ertle 373 Oct 3 1992 o.me<br />
    		-rw-r--r-- 1 ertle 747 Nov 21 1992 profile<br />
    		-rwxr-xr-x 1 ertle 244 Jul 16 23:44 zap*<br />
			<br />
			The first part of the line tells you the file's permissions. For example, the "X" file permissions start with a "d" which tells that it is a directory. The next three characters, "rwx" show that the owner has read, write, and execute permissions on this file. The next three characters, "r-x" shows that people in the same group have read and execute permission on the file. Finally, the last three characters "r-" show that everyone else only has read permission on that file ( To be able to enter a directory, you need read AND execute permission ). Users can use "chmod" to change these permissions. If the user didn"t want anybody else to be able to enter the "X" directory, they would change the permissions to look like those of the LaTeX directory, like this : "chmod og-rx X" - this means remove the read ("r" ) and execute ("x") permissions from the group ("g") and others ("o").
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('chown');" style="cursor: pointer;"><span class="commandsList">chown</span><br />
			<div id="chown" class="commandDesc" style="display: none">
			The chown command changes file ownership.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('chgrp');" style="cursor: pointer;"><span class="commandsList">chgrp</span><br />
			<div id="chgrp" class="commandDesc" style="display: none">
			The chgrp command changes file group ownership.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('diff');" style="cursor: pointer;"><span class="commandsList">diff</span><br />
			<div id="diff" class="commandDesc" style="display: none">
			The diff command displays line-for-line the differences between pairs of text files.
			</div>
			</li>

			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="process" class="alphabetList">Process Management</p>
		<ul>
			<li class="commandsList" onclick="changeState('ps');" style="cursor: pointer;"><span class="commandsList">ps</span><br />
			<div id="ps" class="commandDesc" style="display: none">
			"ps" reports that status of some or all of the processes currently running on the system. With no command line parameters, "ps" only shows processes that belong to you and that are attached to a controlling terminal.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('top_command');" style="cursor: pointer;"><span class="commandsList">top command</span><br />
			<div id="top_command" class="commandDesc" style="display: none">
			The batch command executes commands at a later time.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('nice');" style="cursor: pointer;"><span class="commandsList">nice</span><br />
			<div id="nice" class="commandDesc" style="display: none">
			Invoke a command with an altered scheduling priority
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('kill');" style="cursor: pointer;"><span class="commandsList">kill</span><br />
			<div id="kill" class="commandDesc" style="display: none">
			The kill command terminates or signal processes.
			</div>
			</li>	
						
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="c" class="alphabetList">Printing</p>
	
		<ul>
			<li class="commandsList" onclick="changeState(a2ps');" style="cursor: pointer;"><span class="commandsList">a2ps</span><br />
			<div id="a2ps" class="commandDesc" style="display: none">
			Printing text files.  ex: a2ps [options] files
			</div>
			</li>	
			
			<li class="commandsList" onclick="changeState('lp');" style="cursor: pointer;"><span class="commandsList">lp</span><br />
			<div id="lp" class="commandDesc" style="display: none">
			Submit print request.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('lpstat');" style="cursor: pointer;"><span class="commandsList">lpstat</span><br />
			<div id="lpstat" class="commandDesc" style="display: none">
			Checking printer status
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cancel');" style="cursor: pointer;"><span class="commandsList">cancel</span><br />
			<div id="cancel" class="commandDesc" style="display: none">
			The cancel command cancels a print request.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="d" class="alphabetList">Email on UNIX</p>
		<ul>
			<li class="commandsList" onclick="changeState('pine');" style="cursor: pointer;"><span class="commandsList">pine</span><br />
			<div id="pine" class="commandDesc" style="display: none">
			Type `man pine' for the man page. `pine' also has its own online help. After you type `pine' you will put into a menu system. Type ? to enter the internal help system.

`pine' is a good mail program. It is powerful but very `user-friendly', in that it has lots of menus and help messages. It is a good choice for new UNIX users. 
			</div>
			</li>			
			
			<li class="commandsList" onclick="changeState('mutt');" style="cursor: pointer;"><span class="commandsList">mutt</span><br />
			<div id="mutt" class="commandDesc" style="display: none">
			    mutt<br />
    mutt email-address<br />
    mutt -s "subject" email-address &lt; file<br />

Type `man mutt' for information on invoking `mutt'. A complete manual is available on the web at http://www.cs.hmc.edu/~me/mutt/manual.html.

If you invoke `mutt' with no arguments you will enter into an index of any waiting email you may have. Use this invocation to read your mail.

If you invoke `mutt' with only an email address, you will be put into mutt's send mode where you will be asked for subject and then put into your favorite editor to actually compose the email. Once you quit the editor, you are put into a menu mode, where you can choose to send the mail directly, add file attachments, pgp sign or encrypt the mail, edit any of the header information (like who its being sent to and the subject line), or simply quit without sending the mail.

The third invocation shown above is a quick way to avoid the interactive part of `mutt'. `mutt' in this case will send the requested file to the email address specified with the requested subject line. 			</div>
			</li>
			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="e" class="alphabetList">UNIX and the Internet</p>
		<ul>
			<li class="commandsList" onclick="changeState('ssh');" style="cursor: pointer;"><span class="commandsList">ssh</span><br />
			<div id="ssh" class="commandDesc" style="display: none">
			Remotely logging into other machines.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('ftp');" style="cursor: pointer;"><span class="commandsList">ftp</span><br />
			<div id="ftp" class="commandDesc" style="display: none">
			Transferring files across the network.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('lynx');" style="cursor: pointer;"><span class="commandsList">lynx</span><br />
			<div id="lynx" class="commandDesc" style="display: none">
			A text-based web browser.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('netscape');" style="cursor: pointer;"><span class="commandsList">netscape</span><br />
			<div id="netscape" class="commandDesc" style="display: none">
			A graphical web browser.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	</div>
<?php include("../footer.inc.php"); ?>
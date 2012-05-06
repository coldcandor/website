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
	<h3 id="top" style="text-align:center">Alaphabetical Command Listing</h3>
		<div id="commandABC">
	<ul>
	<li style="width:25px;font-size:10pt; padding-left:23px;"><a href="#a">A</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#b">B</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#c">C</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#d">D</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#e">E</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#f">F</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#g">G</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#h">H</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#i">I</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#j">J</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#k">K</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#l">L</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#m">M</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#n">N</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#o">O</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#p">P</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#q">Q</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#r">R</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#s">S</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#t">T</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#u">U</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#v">V</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#w">W</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#x">X</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#y">Y</a></li>
	<li style="width:25px;font-size:10pt;"><a href="#z">Z</a></li>
  </ul>	</div>

	
	<p id="a" class="alphabetList">A</p>
		<ul>
			<li class="commandsList" onclick="changeState('admin');" style="cursor: pointer;"><span class="commandsList">admin</span><br />
			<div id="admin" class="commandDesc" style="display: none">
			The admin command creates and administers SCCS history files.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('alias');" style="cursor: pointer;"><span class="commandsList">alias</span><br />
			<div id="alias" class="commandDesc" style="display: none">
			The alias command creates or removes a pseudonym or shorthand for a command or series of commands.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('ar');" style="cursor: pointer;"><span class="commandsList">ar</span><br />
			<div id="ar" class="commandDesc" style="display: none">
			The ar command maintains portable archive or library.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('asa');" style="cursor: pointer;"><span class="commandsList">asa</span><br />
			<div id="asa" class="commandDesc" style="display: none">
			The asa command converts FORTRAN carriage-control output to printable form.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('at');" style="cursor: pointer;"><span class="commandsList">at</span><br />
			<div id="at" class="commandDesc" style="display: none">
			The at command executes commands at a later time.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('awk');" style="cursor: pointer;"><span class="commandsList">awk</span><br />
			<div id="awk" class="commandDesc" style="display: none">
			The awk command does pattern scanning and processing language.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="b" class="alphabetList">B</p>
		<ul>
			<li class="commandsList" onclick="changeState('basename');" style="cursor: pointer;"><span class="commandsList">basename</span><br />
			<div id="basename" class="commandDesc" style="display: none">
			The basename command delivers portions of path names.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('batch');" style="cursor: pointer;"><span class="commandsList">batch</span><br />
			<div id="batch" class="commandDesc" style="display: none">
			The batch command executes commands at a later time.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('bc');" style="cursor: pointer;"><span class="commandsList">bc</span><br />
			<div id="bc" class="commandDesc" style="display: none">
			The bc command is an arbitrary precision arithmetic language.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('bg');" style="cursor: pointer;"><span class="commandsList">bg</span><br />
			<div id="bg" class="commandDesc" style="display: none">
			The bg command controls process execution.
			</div>
			</li>	
						
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="c" class="alphabetList">C</p>
		<ul>
			<li class="commandsList" onclick="changeState('calendar');" style="cursor: pointer;"><span class="commandsList">calendar</span><br />
			<div id="calendar" class="commandDesc" style="display: none">
			The calendar command displays a calendar of the current month.
			</div>
			</li>	
			
			<li class="commandsList" onclick="changeState('cancel');" style="cursor: pointer;"><span class="commandsList">cancel</span><br />
			<div id="cancel" class="commandDesc" style="display: none">
			The cancel command cancels a print request.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cat');" style="cursor: pointer;"><span class="commandsList">cat</span><br />
			<div id="cat" class="commandDesc" style="display: none">
			The cat command prints out ( to the screen ) the contents of the named file. It can also be used to concatenate files. Say you want file1 and file2 to be 		all together in one file named file3. If file1 is first, then "cat file1 file2 > file3" will produce the correct file3.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cc');" style="cursor: pointer;"><span class="commandsList">cc</span><br />
			<div id="cc" class="commandDesc" style="display: none">
			The cc command is a compiler for the "C" programming language. "cc" is ANSI compatible on the SGI, IBM, and newer Sun machines. You might try also try "gcc", GNU CC, which is also available on the SGI, SUN, and IBM machines. A typical invocation might be "cc -g file.c -o executablename -llib".
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('cd');" style="cursor: pointer;"><span class="commandsList">cd</span><br />
			<div id="cd" class="commandDesc" style="display: none">
			The command cd directory means change the current working directory to 'directory'.
			The current working directory may be thought of as the directory you are in,
			i.e. your current position in the file-system tree. 
			To change to the directory you have just made, type the command. Cd directory means change 
			the current working directory to 'directory'. The current working directory may be
			thought of as the directory you are in, i.e. your current position in the file-system tree.
			To change to the directory you have just made, type 'cd'.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('chgrp');" style="cursor: pointer;"><span class="commandsList">chgrp</span><br />
			<div id="chgrp" class="commandDesc" style="display: none">
			The chgrp command changes file group ownership.
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
			
			<li class="commandsList" onclick="changeState('cp');" style="cursor: pointer;"><span class="commandsList">cp</span><br />
			<div id="cp" class="commandDesc" style="display: none">
			The cp command Copies files from one directory/filename to another. "cp f1 f2" makes a file "f2" identical to "f1". "cp *.c src/" copies all files that end in ".c" into the "src" subdirectory.
			</div>
			</li>
						
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="d" class="alphabetList">D</p>
		<ul>
			<li class="commandsList" onclick="changeState('date');" style="cursor: pointer;"><span class="commandsList">date</span><br />
			<div id="date" class="commandDesc" style="display: none">
			The date command shows the current date and time.
			</div>
			</li>			
			
			<li class="commandsList" onclick="changeState('dd');" style="cursor: pointer;"><span class="commandsList">dd</span><br />
			<div id="dd" class="commandDesc" style="display: none">
			The dd command allows you to convert and copy a file.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('df');" style="cursor: pointer;"><span class="commandsList">df</span><br />
			<div id="df" class="commandDesc" style="display: none">
			The df command displays the number of free disk blocks and files.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('diff');" style="cursor: pointer;"><span class="commandsList">diff</span><br />
			<div id="diff" class="commandDesc" style="display: none">
			The diff command displays line-for-line the differences between pairs of text files.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('dirname');" style="cursor: pointer;"><span class="commandsList">dirname</span><br />
			<div id="dirname" class="commandDesc" style="display: none">
			The dirname command displays portions of path names.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="e" class="alphabetList">E</p>
		<ul>
			<li class="commandsList" onclick="changeState('ed');" style="cursor: pointer;"><span class="commandsList">ed</span><br />
			<div id="ed" class="commandDesc" style="display: none">
			The ed command displays a text editor.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('elm');" style="cursor: pointer;"><span class="commandsList">elm</span><br />
			<div id="elm" class="commandDesc" style="display: none">
			The elm command displays a screen oriented mail reader. With a "login-name", starts elm to send mail to "login-name". Otherwise, it starts elm for an interactive session.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('env');" style="cursor: pointer;"><span class="commandsList">env</span><br />
			<div id="env" class="commandDesc" style="display: none">
			The env command prints out the values for all the current environment variables. Some typical environment variables are "DISPLAY", "EDITOR", and "PRINTER".
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('expand');" style="cursor: pointer;"><span class="commandsList">expand</span><br />
			<div id="expand" class="commandDesc" style="display: none">
			The expand command expands TAB characters to SPACE characters, and vice versa.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="f" class="alphabetList">F</p>
		<ul>
			<li class="commandsList" onclick="changeState('fc');" style="cursor: pointer;"><span class="commandsList">fc</span><br />
			<div id="fc" class="commandDesc" style="display: none">
			The fc command processes the command history list.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('fg');" style="cursor: pointer;"><span class="commandsList">fg</span><br />
			<div id="fg" class="commandDesc" style="display: none">
			The fg command controls process execution.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('file');" style="cursor: pointer;"><span class="commandsList">file</span><br />
			<div id="file" class="commandDesc" style="display: none">
			The file command manipulates file names and attributes. Looks at "filename(s)" and tells what type of files they are. This is useful in checking a file to be sure that it is text before you "cat" it out ( using "cat" on binary files can be a bummer ). Example:<br /> 
			ertle@newton (55)> file *<br /> 
			useful.dvi: data<br /> 
			useful.hlp: English text<br /> 
			useful.tex: ascii text<br /> 
			xwin.dvi: data<br /> 
			xwin.tex: English text<br /> 
			ertle@newton (56)><br /> 
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('find');" style="cursor: pointer;"><span class="commandsList">find</span><br />
			<div id="find" class="commandDesc" style="display: none">
			The find command finds files.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('ftp');" style="cursor: pointer;"><span class="commandsList">ftp</span><br />
			<div id="ftp" class="commandDesc" style="display: none">
			The ftp command accesses a file transfer program.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="g" class="alphabetList">G</p>
		<ul>
			<li class="commandsList" onclick="changeState('get');" style="cursor: pointer;"><span class="commandsList">get</span><br />
			<div id="get" class="commandDesc" style="display: none">
			The get command retrieves a version of an SCCS file.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('getconf');" style="cursor: pointer;"><span class="commandsList">getconf</span><br />
			<div id="getconf" class="commandDesc" style="display: none">
			The getconf command get configuration values.
			</div>
			</li>	
			
			<li class="commandsList" onclick="changeState('grep');" style="cursor: pointer;"><span class="commandsList">grep</span><br />
			<div id="grep" class="commandDesc" style="display: none">
			The grep command searches a file for a pattern.
			</div>
			</li>			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="h" class="alphabetList">H</p>
		<ul>
			<li class="commandsList" onclick="changeState('hash');" style="cursor: pointer;"><span class="commandsList">hash</span><br />
			<div id="hash" class="commandDesc" style="display: none">
			The hash command evaluates the internal hash table of the contents of directories.
			</div>
			</li>	
			
			<li class="commandsList" onclick="changeState('head');" style="cursor: pointer;"><span class="commandsList">head</span><br />
			<div id="head" class="commandDesc" style="display: none">
			The head command displays the first few lines of files.
			</div>
			</li>	
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="i" class="alphabetList">I</p>
		<ul>
			<li class="commandsList" onclick="changeState('id');" style="cursor: pointer;"><span class="commandsList">id</span><br />
			<div id="id" class="commandDesc" style="display: none">
			The id command returns a users identity.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('ipcrm');" style="cursor: pointer;"><span class="commandsList">ipcrm</span><br />
			<div id="ipcrm" class="commandDesc" style="display: none">
			The ipcrm command removes a message queue, semaphore set, or shared memory IDs.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('ipcs');" style="cursor: pointer;"><span class="commandsList">ipcs</span><br />
			<div id="ipcs" class="commandDesc" style="display: none">
			The ipcs command reports inter-process communication facilities status.
			</div>
			</li>
			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="j" class="alphabetList">J</p>
		<ul>
			<li class="commandsList" onclick="changeState('jobs');" style="cursor: pointer;"><span class="commandsList">jobs</span><br />
			<div id="jobs" class="commandDesc" style="display: none">
			The jobs command controls process execution.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('join');" style="cursor: pointer;"><span class="commandsList">join</span><br />
			<div id="join" class="commandDesc" style="display: none">
			The join command creates a string by joining together list elements.
			</div>
			</li>
			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
		
	<p id="k" class="alphabetList">K</p>
		<ul>
			<li class="commandsList" onclick="changeState('kill');" style="cursor: pointer;"><span class="commandsList">kill</span><br />
			<div id="kill" class="commandDesc" style="display: none">
			The kill command terminates or signal processes.
			</div>
			</li>
			
			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="l" class="alphabetList">L</p>
		<ul>
			<li class="commandsList" onclick="changeState('lex');" style="cursor: pointer;"><span class="commandsList">lex</span><br />
			<div id="lex" class="commandDesc" style="display: none">
			Generate programs for lexical tasks.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('list');" style="cursor: pointer;"><span class="commandsList">list</span><br />
			<div id="list" class="commandDesc" style="display: none">
			Link and unlink files and directories.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('ln');" style="cursor: pointer;"><span class="commandsList">ln</span><br />
			<div id="ln" class="commandDesc" style="display: none">
			Make hard or symbolic links to files.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('logname');" style="cursor: pointer;"><span class="commandsList">logname</span><br />
			<div id="logname" class="commandDesc" style="display: none">
			Return user's login name.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('lp');" style="cursor: pointer;"><span class="commandsList">lp</span><br />
			<div id="lp" class="commandDesc" style="display: none">
			Submit print request.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('ls');" style="cursor: pointer;"><span class="commandsList">ls</span><br />
			<div id="ls" class="commandDesc" style="display: none">
			Shows directory listing. If no "directory" is specified, "ls" prints the names of the files in the current directory.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('ls-l');" style="cursor: pointer;"><span class="commandsList">ls -l</span><br />
			<div id="ls-l" class="commandDesc" style="display: none">
			Shows long directory listing. If you type "ls -l" in a directory, you might get something like this:<br />
    		drwx------ 3 ertle 512 Jul 16 13:38 LaTeX/<br />
    		drwxr-xr-- 2 ertle 512 Jun 22 12:26 X/<br />
    		drwxr-xr-x 3 ertle 512 Jul 13 16:29 Xroff/<br />
    		-rw-r--r-- 1 ertle 373 Oct 3 1992 o.me<br />
    		-rw-r--r-- 1 ertle 747 Nov 21 1992 profile<br />
    		-rwxr-xr-x 1 ertle 244 Jul 16 23:44 zap*<br />
The first part of the line tells you the file"s permissions. For example, the "X" file permissions start with a "d" which tells that it is a directory. The next three characters, "rwx" show that the owner has read, write, and execute permissions on this file. The next three characters, "r-x" shows that people in the same group have read and execute permission on the file. Finally, the last three characters "r-" show that everyone else only has read permission on that file ( To be able to enter a directory, you need read AND execute permission ).
			</div>
			</li>

			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="m" class="alphabetList">M</p>
		<ul>
			<li class="commandsList" onclick="changeState('mail');" style="cursor: pointer;"><span class="commandsList">mail</span><br />
			<div id="mail" class="commandDesc" style="display: none">
			Read or send mail messages. If no "login-name" is specified, "mail" checks to see if you have any mail in your mail box. With a "login-name", "mail" will let you type in a message to send to that person. For more advanced mail processing, you might try "elm" or "pine" at the command line, or "M-x mail" in emacs.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('mailx');" style="cursor: pointer;"><span class="commandsList">mailx</span><br />
			<div id="mailx" class="commandDesc" style="display: none">
			Interactive message processing system.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('make');" style="cursor: pointer;"><span class="commandsList">make</span><br />
			<div id="make" class="commandDesc" style="display: none">
			Make utility to maintain groups of programs.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('mkdir');" style="cursor: pointer;"><span class="commandsList">mkdir</span><br />
			<div id="mkdir" class="commandDesc" style="display: none">
			Makes a sub-directory named "dirname" in the current directory.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('mv');" style="cursor: pointer;"><span class="commandsList">mv</span><br />
			<div id="mv" class="commandDesc" style="display: none">
			Moves "filename" to "path". This might consist of a simple renaming of the file, "mv file1 file2", moving the file to a new directory, "mv file1 /tmp/", or both "mv file1 /tmp/file2".
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="n" class="alphabetList">N</p>
		<ul>
			<li class="commandsList" onclick="changeState('netstat');" style="cursor: pointer;"><span class="commandsList">netstat</span><br />
			<div id="netstat" class="commandDesc" style="display: none">
			Show network status.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('newgrp');" style="cursor: pointer;"><span class="commandsList">newgrp</span><br />
			<div id="newgrp" class="commandDesc" style="display: none">
			Log in to a new group.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('nm');" style="cursor: pointer;"><span class="commandsList">nm</span><br />
			<div id="nm" class="commandDesc" style="display: none">
			Print name list of an object file.
			</div>
			</li>

			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="o" class="alphabetList">O</p>
		<ul>
			<li class="commandsList" onclick="changeState('od');" style="cursor: pointer;"><span class="commandsList">od</span><br />
			<div id="od" class="commandDesc" style="display: none">
			Octal dump.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="p" class="alphabetList">P</p>
		<ul>
			<li class="commandsList" onclick="changeState('pack');" style="cursor: pointer;"><span class="commandsList">pack</span><br />
			<div id="pack" class="commandDesc" style="display: none">
			Obsolete syntax for packer geometry manager.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('paste');" style="cursor: pointer;"><span class="commandsList">paste</span><br />
			<div id="paste" class="commandDesc" style="display: none">
			Merge corresponding or subsequent lines of files.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('patch');" style="cursor: pointer;"><span class="commandsList">patch</span><br />
			<div id="patch" class="commandDesc" style="display: none">
			Apply changes to files.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pathchk');" style="cursor: pointer;"><span class="commandsList">pathchk</span><br />
			<div id="pathchk" class="commandDesc" style="display: none">
			Check path names.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pax');" style="cursor: pointer;"><span class="commandsList">pax</span><br />
			<div id="pax" class="commandDesc" style="display: none">
			Portable archive interchange.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pcat');" style="cursor: pointer;"><span class="commandsList">pcat</span><br />
			<div id="pcat" class="commandDesc" style="display: none">
			Compress and expand files.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pg');" style="cursor: pointer;"><span class="commandsList">pg</span><br />
			<div id="pg" class="commandDesc" style="display: none">
			Files perusal filter for CRTs.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pr');" style="cursor: pointer;"><span class="commandsList">pr</span><br />
			<div id="pr" class="commandDesc" style="display: none">
			Print files.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('printf');" style="cursor: pointer;"><span class="commandsList">printf</span><br />
			<div id="printf" class="commandDesc" style="display: none">
			Write formatted output.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('prs');" style="cursor: pointer;"><span class="commandsList">prs</span><br />
			<div id="prs" class="commandDesc" style="display: none">
			Display selected portions of an SCCS history.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('ps');" style="cursor: pointer;"><span class="commandsList">ps</span><br />
			<div id="ps" class="commandDesc" style="display: none">
			"ps" reports that status of some or all of the processes currently running on the system. With no command line parameters, "ps" only shows processes that belong to you and that are attached to a controlling terminal.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('pwd');" style="cursor: pointer;"><span class="commandsList">pwd</span><br />
			<div id="pwd" class="commandDesc" style="display: none">
			Return the current working directory.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="q" class="alphabetList">Q</p>
		<ul>
			<li class="commandsList" onclick="changeState('quota-v');" style="cursor: pointer;"><span class="commandsList">quota -v</span><br />
			<div id="quota-v" class="commandDesc" style="display: none">
			Shows current disk usage and limits.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="r" class="alphabetList">R</p>
		<ul>
			<li class="commandsList" onclick="changeState('read');" style="cursor: pointer;"><span class="commandsList">read</span><br />
			<div id="read" class="commandDesc" style="display: none">
			Read from a channel.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('renice');" style="cursor: pointer;"><span class="commandsList">renice</span><br />
			<div id="renice" class="commandDesc" style="display: none">
			Alter priority of running processes.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('rm');" style="cursor: pointer;"><span class="commandsList">rm</span><br />
			<div id="rm" class="commandDesc" style="display: none">
			Removes files. Careful with this one - it is irreversible. It is usually aliased ( in a user"s .cshrc file ) to "rm -i" which insures that "rm" asks you if you are sure that you want to remove the named file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('rmdel');" style="cursor: pointer;"><span class="commandsList">rmdel</span><br />
			<div id="rmdel" class="commandDesc" style="display: none">
			Remove a delta from an SCCS file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('rmdir');" style="cursor: pointer;"><span class="commandsList">rmdir</span><br />
			<div id="rmdir" class="commandDesc" style="display: none">
			Removes the directory "dirname".
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="s" class="alphabetList">S</p>
		<ul>
			<li class="commandsList" onclick="changeState('sh');" style="cursor: pointer;"><span class="commandsList">sh</span><br />
			<div id="sh" class="commandDesc" style="display: none">
			Standard and job control shell and command interpreter.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('spell');" style="cursor: pointer;"><span class="commandsList">spell</span><br />
			<div id="spell" class="commandDesc" style="display: none">
			Checks the spelling of the words in the standard input by default, checks words in "filename" if a name is supplied on the command line. If a word is misspelled it is printed to stdout ( usually the screen ).
			</div>
			</li>

			<li class="commandsList" onclick="changeState('split');" style="cursor: pointer;"><span class="commandsList">split</span><br />
			<div id="split" class="commandDesc" style="display: none">
			Split a string into a proper Tcl list.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('strings');" style="cursor: pointer;"><span class="commandsList">strings</span><br />
			<div id="strings" class="commandDesc" style="display: none">
			Find printable strings in an object or binary file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('strip');" style="cursor: pointer;"><span class="commandsList">strip</span><br />
			<div id="strip" class="commandDesc" style="display: none">
			Strip symbol table, debugging and line number information from an object file.
			</div>
			</li>			
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="t" class="alphabetList">T</p>
		<ul>
			<li class="commandsList" onclick="changeState('tabs');" style="cursor: pointer;"><span class="commandsList">tabs</span><br />
			<div id="tabs" class="commandDesc" style="display: none">
			Set tabs on a terminal.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tail');" style="cursor: pointer;"><span class="commandsList">tail</span><br />
			<div id="tail" class="commandDesc" style="display: none">
			Deliver the last part of a file.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('talk');" style="cursor: pointer;"><span class="commandsList">talk</span><br />
			<div id="talk" class="commandDesc" style="display: none">
			Talk to another user.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tar');" style="cursor: pointer;"><span class="commandsList">tar</span><br />
			<div id="tar" class="commandDesc" style="display: none">
			Create tape archives and add or extract files.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tee');" style="cursor: pointer;"><span class="commandsList">tee</span><br />
			<div id="tee" class="commandDesc" style="display: none">
			Replicate the standard output.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('telnet');" style="cursor: pointer;"><span class="commandsList">telnet</span><br />
			<div id="telnet" class="commandDesc" style="display: none">
			User interface to a remote system using the TELNET protocol.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('test');" style="cursor: pointer;"><span class="commandsList">test</span><br />
			<div id="test" class="commandDesc" style="display: none">
			Evaluate condition(s) or make execution of actions dependent upon the evaluation of condition(s).
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('time');" style="cursor: pointer;"><span class="commandsList">time</span><br />
			<div id="time" class="commandDesc" style="display: none">
			Time the execution of a script.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('touch');" style="cursor: pointer;"><span class="commandsList">touch</span><br />
			<div id="touch" class="commandDesc" style="display: none">
			Change file access and modification times.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tput');" style="cursor: pointer;"><span class="commandsList">tput</span><br />
			<div id="tput" class="commandDesc" style="display: none">
			Initialize a terminal or query terminfo database.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tr');" style="cursor: pointer;"><span class="commandsList">tr</span><br />
			<div id="tr" class="commandDesc" style="display: none">
			Translate characters.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('true');" style="cursor: pointer;"><span class="commandsList">true</span><br />
			<div id="true" class="commandDesc" style="display: none">
			Provide truth values.
			</div>
			</li>	

			<li class="commandsList" onclick="changeState('tty');" style="cursor: pointer;"><span class="commandsList">tty</span><br />
			<div id="tty" class="commandDesc" style="display: none">
			Return user's terminal name.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('type');" style="cursor: pointer;"><span class="commandsList">type</span><br />
			<div id="type" class="commandDesc" style="display: none">
			Write a description of command type.
			</div>
			</li>	
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="u" class="alphabetList">U</p>
		<ul>
			<li class="commandsList" onclick="changeState('ulimit');" style="cursor: pointer;"><span class="commandsList">ulimit</span><br />
			<div id="ulimit" class="commandDesc" style="display: none">
			Set or get limitations on the system resources available to the current shell and its descendents.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('umask');" style="cursor: pointer;"><span class="commandsList">umask</span><br />
			<div id="umask" class="commandDesc" style="display: none">
			Get or set the file mode creation mask.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('unalias');" style="cursor: pointer;"><span class="commandsList">unalias</span><br />
			<div id="unalias" class="commandDesc" style="display: none">
			Create or remove a pseudonym or shorthand for a command or series of commands.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('uncompress');" style="cursor: pointer;"><span class="commandsList">uncompress</span><br />
			<div id="uncompress" class="commandDesc" style="display: none">
			Compress, uncompress files or display expanded files.
			</div>
			</li>
		
			<li class="commandsList" onclick="changeState('unexpand');" style="cursor: pointer;"><span class="commandsList">unexpand</span><br />
			<div id="unexpand" class="commandDesc" style="display: none">
			Expand TAB characters to SPACE characters, and vice versa.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('unget');" style="cursor: pointer;"><span class="commandsList">unget</span><br />
			<div id="unget" class="commandDesc" style="display: none">
			Undo a previous get of an SCCS file.
			</div>
			</li>


			<li class="commandsList" onclick="changeState('uniq');" style="cursor: pointer;"><span class="commandsList">uniq</span><br />
			<div id="uniq" class="commandDesc" style="display: none">
			Report or filter out repeated lines in a file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('unlink');" style="cursor: pointer;"><span class="commandsList">unlink</span><br />
			<div id="unlink" class="commandDesc" style="display: none">
			Link and unlink files and directories.
			</div>
			</li>
		
			<li class="commandsList" onclick="changeState('unpack');" style="cursor: pointer;"><span class="commandsList">unpack</span><br />
			<div id="unpack" class="commandDesc" style="display: none">
			Compress and expand files.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="v" class="alphabetList">V</p>
		<ul>
			<li class="commandsList" onclick="changeState('val');" style="cursor: pointer;"><span class="commandsList">val</span><br />
			<div id="val" class="commandDesc" style="display: none">
			Validate an SCCS file.
			</div>
			</li>
		
			<li class="commandsList" onclick="changeState('vi');" style="cursor: pointer;"><span class="commandsList">vi</span><br />
			<div id="vi" class="commandDesc" style="display: none">
			Runs the screen oriented text editor named "vi". If a filename is specified, you will be editing that file. Type "[ESC]:q!" to exit without making any changes.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="w" class="alphabetList">W</p>
		<ul>
			<li class="commandsList" onclick="changeState('wait');" style="cursor: pointer;"><span class="commandsList">wait</span><br />
			<div id="wait" class="commandDesc" style="display: none">
			Await process completion.
			</div>
			</li>
		
			<li class="commandsList" onclick="changeState('wc');" style="cursor: pointer;"><span class="commandsList">wc</span><br />
			<div id="wc" class="commandDesc" style="display: none">
			Display a count of lines, words and characters in a file.
			</div>
			</li>
			
			<li class="commandsList" onclick="changeState('what');" style="cursor: pointer;"><span class="commandsList">what</span><br />
			<div id="what" class="commandDesc" style="display: none">
			Extract SCCS version information from a file.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('which');" style="cursor: pointer;"><span class="commandsList">which</span><br />
			<div id="which" class="commandDesc" style="display: none">
			Reports the directory from which the {command} would be run if it was given as a command line argument.
			</div>
			</li>

			<li class="commandsList" onclick="changeState('who');" style="cursor: pointer;"><span class="commandsList">who</span><br />
			<div id="who" class="commandDesc" style="display: none">
			Shows who is currently logged on the system. The "w" command does the same thing, but gives slightly different info.
			</div>
			</li>
		
			<li class="commandsList" onclick="changeState('write');" style="cursor: pointer;"><span class="commandsList">write</span><br />
			<div id="write" class="commandDesc" style="display: none">
			Send a message to another user. Each line will be sent to the other person as you hit the carriage-return. Press &lt;CTRL&gt;-D to end the message. Write won"t work if the other user has typed "mesg n".
			</div>
			</li>

			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="x" class="alphabetList">X</p>
		<ul>
			<li class="commandsList" onclick="changeState('xargs');" style="cursor: pointer;"><span class="commandsList">xargs</span><br />
			<div id="xargs" class="commandDesc" style="display: none">
			Construct argument lists and invoke utility.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="y" class="alphabetList">Y</p>
		<ul>
			<li class="commandsList" onclick="changeState('yacc');" style="cursor: pointer;"><span class="commandsList">yacc</span><br />
			<div id="yacc" class="commandDesc" style="display: none">
			Yet another compiler-compiler.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
		<br /><br />
	<p id="z" class="alphabetList">Z</p>
		<ul>
			<li class="commandsList" onclick="changeState('zcat');" style="cursor: pointer;"><span class="commandsList">zcat</span><br />
			<div id="zcat" class="commandDesc" style="display: none">
			Compress or expand files.
			</div>
			</li>
			
			<li style="list-style:none; margin: 7px 0 0 12px;"><a class="plainLinks" href="#top">Back to top</a></li>
		</ul>
    
	</div>

<?php include("../footer.inc.php"); ?>
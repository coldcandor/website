<?php include("header.inc.php"); ?>

	<script type="text/javascript">
	var start=false;
	function showDivs()
	{
		if(start)
		{
			killIntro();
		}
		else
		{
			start=true;
			setTimeout("showDivs()",1000*5);
		}
	}
	
	function killIntro()
	{
		document.getElementById("introImage").style.display="none";
		document.getElementById("skipIntro").style.display="none";
		document.getElementById("content").style.visibility="";

	}
	
	showDivs();
	</script>
	
	
	
	<div id="subnav" style="text-align: center;">
	  <span style="position: relative; top: 4px; font-size: 12pt; font-weight: bold; color: #EEEEEE;">Welcome to the best UNIX tutorial site!</span>
	</div>
	
	
	<img src="images/intro.gif" id="introImage" alt="Intro Image" style="position:absolute;left:100px;top:200px;"/>
	<span id="skipIntro" style="cursor:pointer;position:relative; left: 300px; top:288px;" onclick="killIntro();">Skip Intro</span>
	
	
	<div id="content" style="padding-right: 10px; visibility:hidden;"><br />
	<h3 style="text-align:center; padding:0px; margin: 0px;">Here's what you'll find inside:</h3>
	<div id="indexImages">
			<img src="images/pc_people.jpg" alt="Workstations" width="134" height="106"/>
	</div>
    <div style="width:400px;position:absolute;left:195px;top:45px;">

<div class="indexPage">	
	<ul>
	<li>Tutorials</li>
	</ul>
	<p>For the user new to UNIX, looking to brush up on commands, or wanting to publish a website. We'll take you through the basics of UNIX, terminals, commands, and text editors. You'll find everything you need on the &nbsp;<a class="plainLinks" href="<?php echo $subDirectory ?>/tutorials/index.php">tutorials</a> page.</p>
		
	<ul>
		<li>Quizzes</li>
	</ul>
	<p>We'll make you feel like you're in school with <a class="plainLinks" href="<?php echo $subDirectory ?>/quizzes/index.php">quizzes</a> at the end of each tutorial section!  The quizzes are there for you to use to see if you've learned the important aspects of the tutorial.  If you're not new to UNIX, they can also determine where you should start.</p>
	
	<ul>
		<li>Commands</li>
	</ul>	
	<p>For the advanced UNIX user who needs a quick reference on a command or a person new to UNIX that wants to know what a certain command does, you'll find it on the &nbsp;<a class="plainLinks" href="<?php echo $subDirectory ?>/commands/index.php">commands</a> page.</p>
	</div>
	</div>
</div>
<?php
	//Don't show intro
	if(isset($_GET['intro']))
	{
	?>
		<script type="text/javascript">
		killIntro();
		</script>

	<?php
	}
	?>
<?php include("footer.inc.php"); ?>                       


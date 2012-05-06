<?php
$subDirectory='/409/webjunkies';
$javascriptRollOver="onmouseover=\"doRollOver(this);\" onmouseout=\"doRollOut(this);\"";
$linkClickStyle="style=\"background-color:#6BC0DD\"";
$host='http://'.$_SERVER['HTTP_HOST'];


$homeLink="<li onclick=\"window.location='$host$subDirectory/index.php?intro=false'\" $javascriptRollOver><a href='$subDirectory/index.php?intro=false'>Home</a></li>";
$tutorialsLink="<li onclick=\"window.location='$host$subDirectory/tutorials/index.php'\" $javascriptRollOver><a href='$subDirectory/tutorials/index.php'>Tutorials</a></li>";
$quizzesLink="<li onclick=\"window.location='$host$subDirectory/quizzes/index.php'\" $javascriptRollOver><a href='$subDirectory/quizzes/index.php'>Quizzes</a></li>";
$commandLookupLink="<li onclick=\"window.location='$host$subDirectory/commands/index.php'\" $javascriptRollOver><a href='$subDirectory/commands/index.php'>Commands</a></li>";
$aboutLink="<li onclick=\"window.location='$host$subDirectory/about_us.php'\" $javascriptRollOver><a href='$subDirectory/about_us.php'>About Us</a></li>";
$title='';


$file=$_SERVER['PHP_SELF'];

if($file=="$subDirectory/index.php")
{
	$homeLink="<li $linkClickStyle><a href='$subDirectory/index.php?intro=false'>Home</a></li>";
	$title=createTitle('Home',$file);

}
elseif(strstr($file,'tutorials')!=false)
{
	$section='Tutorials';
	if(strstr($file,'tutorial_1')!=false)
	{
		$section.=' : Getting Started With Unix';
	}
	elseif(strstr($file,'tutorial_2')!=false)
	{
		$section.=' : Advanced Commands';
	}
	elseif(strstr($file,'tutorial_3')!=false)
	{
		$section.=' : Editing Files with Pico and VI';
	}
	elseif(strstr($file,'tutorial_4')!=false)
	{	
		$section.=' : Publishing Website';
	}	
	
	
	$tutorialsLink="<li $linkClickStyle><a href='$subDirectory/tutorials/index.php'>Tutorials</a></li>";
	$title=createTitle($section,$file);

}
elseif(strstr($file,'quizzes')!=false)
{
	$quizzesLink="<li $linkClickStyle><a href='$subDirectory/quizzes/index.php'>Quizzes</a></li>";
	$title=createTitle('Quizzes',$file);
	
	
	
}
elseif(strstr($file,'commands')!=false)
{
	$commandLookupLink="<li $linkClickStyle><a href='$subDirectory/commands/index.php'>Commands</a></li>";
	$title='Commands';		

}	
elseif($file=="$subDirectory/about_us.php")
{
	$aboutLink="<li $linkClickStyle><a href='$subDirectory/about_us.php'>About Us</a></li>";
	$title='About Us';			

}
elseif($file=="$subDirectory/site_map.php")
{
	$title='Site Map';			

}
elseif($file=="$subDirectory/contact_us.php")
{
	$title='Contact Us';			
}
else if($file=="$subDirectory/sources.php")
{
	$title='Sources';		
}



function createTitle($section, $filePath)
{
	
	//Check to see if filePath is not an index page
	if(!(strstr($filePath,'index.php')!=false))
	{		
		//Get file name
		$fileName=substr($filePath,strrpos($filePath,'/')+1);
		
		//Strip out .php
		$fileName=ereg_replace('.php','',$fileName);
		
		//convert underscores to ' '
		$fileName=ereg_replace('_',' ',$fileName);
		
		//capitalize first letter of each word and return
		return ucwords($section.' : '.$fileName);
	
	}
	
	return $section;
	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title><?php echo 'Web Junkies : '.$title; ?></title>
	<link rel="stylesheet" href="<?php echo $subDirectory; ?>/style.css" type="text/css" />
	
	
	<script type="text/JavaScript">
	<!--
		function doRollOver(objRef)
		{
			objRef.style.backgroundColor="#6BC0DD";
		}
		
		function doRollOut(objRef)
		{
			objRef.style.backgroundColor="";
		}
		
	//-->
	</script>
	</head>
<body>
<div id="main">
	<div id="breadcrumbs">
	<?php echo $title; ?>
	</div>
	<div id="logo">
	<a href="<?php echo $subDirectory; ?>/index.php?intro=false"><img src="<?php echo $subDirectory; ?>/images/logo.jpg" alt="Web Junkies Logo" style="border-width:0px" /></a>
	</div>
	

	
	<div id="nav">
	<ul>
	<?php
	echo "$homeLink\n";
	echo "\t$tutorialsLink\n";
	echo "\t$quizzesLink\n";
	echo "\t$commandLookupLink\n";
	echo "\t$aboutLink\n";
	?>
	</ul>
	</div>
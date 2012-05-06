<?php include("header.inc.php"); ?>
	
	<script type="text/javascript">
	<!--
	
	function checkInput()
	{
		var name=document.forms[0].elements.contactName.value;
		var email=document.forms[0].elements.email.value;
		var subject=document.forms[0].elements.subject.value;
		var comments=document.forms[0].elements.comments.value;

		if (name=="" || email=="" || subject=="" || comments=="")
		{
			alert("You did not fill in all the fields");
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	//-->
	</script>
	<div id="subnav">
	<!--Create an unordered list with links for sub navigation-->	
	</div>
	
	<div id="content">
	<h3 style="text-align:center">Contact Us</h3>
	
	<?php
	if(isset($_POST['contactName']))
	{
	?>
		<p style="width:70%;margin: 0 auto">Thank you for contacting us. We look fowarding to reading your e-mail and will respond if necessary.<br />
		<br />
		Below is the message sent:
		</p>
		<br />
		<p style="width:70%;margin: 0 auto">
		<b>Your Name: </b><?php echo $_POST['contactName']; ?><br />	
		<b>Your E-mail: </b><?php echo $_POST['email']; ?><br />
		<b>Subject: </b><?php echo $_POST['subject']; ?><br />
		<b>Message: </b><?php echo nl2br($_POST['comments']); ?><br />
		</p>
		
		
	<?php

$headers = "From: $_POST[email]\r\n" .
       'X-Mailer: PHP/' . phpversion() . "\r\n" .
       "MIME-Version: 1.0\r\n" .
       "Content-Type: text/html; charset=utf-8\r\n" .
       "Content-Transfer-Encoding: 8bit\r\n\r\n";

mail('me@chrismuench.com', $_POST['subject'], nl2br($_POST['comments']), $headers);
	
	
	
	}
	else
	{
	?>
		<p style="width:70%;margin: 0 auto">Your feedback and questions are very important to us.  Please feel out
		the form below with your questions/comments, and we will get back to you as soon
		as possible.
		</p>
		<br /><br />
		<form method="post" action="contact_us.php" onsubmit="return checkInput()">
		<div style="width:70%; margin: 0 auto;">
		
		<span class="formLabel">Name:</span>
		<span><input type="text" name="contactName" /></span><br />
		
		<span class="formLabel">E-Mail:</span>
		<span><input type="text" name="email" /></span><br />
	
		
		<span class="formLabel">Subject:</span>
		<span><input type="text" name="subject" /></span><br />
		
		<span class="formLabel">Question/Comments:</span>
		<span><textarea name="comments" rows="5" cols="30"></textarea></span><br /><br />
		
			<div style="margin:0 auto; text-align:right;"><input type="submit" value="Send Question/Feedback" /></div>
		</div>
		</form>
	
	<?php
	}
	?>
	</div>

<?php include("footer.inc.php"); ?>
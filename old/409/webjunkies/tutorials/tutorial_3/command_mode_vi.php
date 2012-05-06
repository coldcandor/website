<?php include ("../../header.inc.php"); ?>
<?php include ("../subnavigation.php"); ?>
<?php include ("subnavigation.php"); ?>

<div id="content">
	
	<div id="tutorialContent">
	<p class="tutorialSubtitle"><img src="../images/dot.gif" alt="dot" />&nbsp; Command mode</p>

<div class="tutorialParagraph">Command mode is where you can move about, search for text, cut and paste, and save.  Commands can apply to more than one object by adding a number to the beginning of it.
<br /><br />
<b>Movement</b>
<em>h : moves one space left<br />
l : moves one space right<br />
j : moves one space down<br />
k : moves one space up<br />
backspace : moves one space back<br />
0 : moves to the beginning of a line<br />
$ : moves to the end of a line<br />
Return : moves to the first character of the next line<br />
w : moves forward one word<br />
b : moves back one word<br />
e : moves to the end of a word<br />
CTRL - f : moves forward one screen<br />
CTRL - b : moves back one screen</em><br /><br />

<b>Manipulating Text</b><br />
<em>r : replace one character<br />
cw : change a single word<br />
cc : change a line of text<br />
R : replace text a tthe cursor<br />
ye : copy to the end of a word<br />
yy : copy your current line<br />
p : paste copied text<br />
x : delete at cursor position<br />
X : delete back one space<br />
dw : delete a word<br />
D : delete the rest of a line<br />
dd : delete current line<br />
dG : delete the rest of the document(after the cursor)<br />
u : undo<br />
U : restore the line</em><br /><br />

<b>Searching for Text</b><br />
<em>/text : searches for text forwards<br />
?text: searches for text backwards<br />
n : repeats the last search<br />
N : repeats the lastsearch, but in the opposite direction</em><br /><br />



</div>
	<br />
	


</div></div>
<?php include ("../../footer.inc.php"); ?>
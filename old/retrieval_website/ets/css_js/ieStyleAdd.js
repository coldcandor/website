/* ieStyleAdd.js - javascript file to determine if browser is MS IE and if so */
/* adjust the positioning of the footer ruled separater line                  */

if(navigator.appName == "Microsoft Internet Explorer")
{
	document.writeln("<style type=text/css>");
	document.writeln("#headrule");
	document.writeln("{");
	document.writeln("	position:absolute;");
	document.writeln("	top:105px;");
	document.writeln("	left:0px;");
	document.writeln("}");
	document.writeln("</style>");
}


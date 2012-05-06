/* date.js - javascript that defines date formats for Inside Honeywell CSS-based template */

var dayName = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var monName = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var now = new Date;

function writeFormattedDate()
{
	document.write("<div class='date'>" + dayName[now.getDay()]+" "+monName[now.getMonth()]+" "+now.getDate()+", "+now.getFullYear()+"</div>");
}

function writeUnformattedDate()
{
	document.write(dayName[now.getDay()] + monName[now.getMonth()] + now.getFullYear());
}

function writeDayName()
{
	document.write(dayName[now.getDay()]);
}


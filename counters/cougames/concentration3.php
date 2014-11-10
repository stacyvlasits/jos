<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- THREE STEPS TO INSTALL CONCENTRATION:

  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the onLoad event handler into the BODY tag
  3.  Put the last coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->


<title>JOSHU - Japanese Online Self-Help Utility</title>
<script type="text/javascript">
<!-- Original:  Brian Gosselin (bgaudiodr@aol.com) -->
<!-- Web Site:  http://www.bgaudiodr.iwarp.com -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var pics = new Array();
for (i = 0; i <= 18; i++) {
pics[i] = new Image();
pics[i].src = 'image' + i + '.gif';
}
var map=new Array(1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8);
var theName = ['image1', 'text1', 'image2', 'text2', 'image3', 'text3', 'image4', 'text4', 'image5', 'text5', 'image6', 'text6', 'image7', 'text7', 'image8', 'text8'];
var user = new Array();
var temparray = new Array();
var clickarray = new Array(0, 0);
var ticker, sec, min, ctr, id, oktoclick, finished;
var randomI;
var randomName, savedName;
function init() {
clearTimeout(id);
for (i = 0; i <= 15 ;i++) {
user[i] = 0;
}
ticker = 0;
min = 0;
sec = 0;
ctr = 0;
oktoclick = true;
finished = 0;
document.f.b.value = "";
scramble();
runclk();
for (i = 0; i <= 15; i++) {
document.f[('img'+i)].src = "images3/image0.gif";
   }
}
function runclk() {
min = Math.floor(ticker/60);
sec = (ticker-(min*60))+'';
if(sec.length == 1) {sec = "0"+sec};
ticker++;
document.f.b.value = min+":"+sec;
id = setTimeout('runclk()', 1000);
}
function scramble() {
for (z = 0; z < 5; z++) {
for (x = 0; x <= 15; x++) {
temparray[0] = Math.floor(Math.random()*16);
randomI = temparray[0];
temparray[1] = map[temparray[0]];
randomName = theName[randomI];
temparray[2] = map[x];
savedName = theName[x];
map[x] = temparray[1];
theName[x] = randomName;
map[temparray[0]] = temparray[2];
theName[randomI] = savedName;
      }
   }
}
function showimage(but) {
	if (oktoclick) {
	oktoclick = false; 
	document.f[('img'+but)].src = 'images3/'+theName[but]+'.gif';
	if (ctr == 0) {
	ctr++;
	clickarray[0] = but;
	oktoclick = true;
	} else {
		clickarray[1] = but;
		ctr = 0;
		setTimeout('returntoold()', 1000);
      }
   }
}
function returntoold() {
if ((clickarray[0] == clickarray[1]) && (!user[clickarray[0]])) {
document.f[('img'+clickarray[0])].src = "images3/image0.gif";
oktoclick = true;
} else {
if (map[clickarray[0]] != map[clickarray[1]]) {
if (user[clickarray[0]] == 0) {
document.f[('img'+clickarray[0])].src = "images3/image0.gif";
}
if (user[clickarray[1]] == 0) {
document.f[('img'+clickarray[1])].src = "images3/image0.gif";
   }
}
if (map[clickarray[0]] == map[clickarray[1]]) {
if (user[clickarray[0]] == 0&&user[clickarray[1]] == 0) { finished++; }
user[clickarray[0]] = 1;
user[clickarray[1]] = 1;
}
if (finished >= 8) {
alert('You did it in '+document.f.b.value+' !');
init();
} else {
oktoclick = true;
      }
   }
}
//  End -->
</script>
</HEAD>

<!-- STEP TWO: Insert the onLoad event handler into your BODY tag  -->

<BODY OnLoad="init()">

<!-- STEP THREE: Copy this code into the BODY of your HTML document  -->
<img src="../../images/joshuhome.gif" alt="image_file" width=130 height=58 align=top border=0>
<center>
<h2>Memory Game with Counters 3 (# and counters)</h2>
drawings by A. Statis<br /><br />
 <form name="f"> 
<table cellpadding="0" cellspacing="0" border="0">
<script language="javascript">
<!-- Begin
for (r = 0; r <= 3; r++) {
document.write('<tr>');
for (c = 0; c <= 3; c++) {
document.write('<td align="center">');
document.write('<a href="javascript:showimage('+((4*r)+c)+')" onClick="document.f.b.focus()">');
document.write('<img src="images3/image0.gif" name="img'+((4*r)+c)+'" border="0">');
document.write('</a></td>');
}
document.write('</tr>');
}
// End -->
</script>
</table>
<br><br>
<input type="button" value="         " name="b" onClick="init()">
</form>
</center>

</body>
</html>
var inside;
var showlink;
var hidelink;
//var numCounters; // is assigned in .htm

function showToggle(show,hide,i) {
	if(document.getElementById) {
		document.writeln('<big><a href="javascript:toggle('+i+')" class="internal">' +
		'<span id="showlink'+i+'" >'  +'&nbsp;&nbsp;'+show+'&nbsp;&nbsp;'+  '</span>' +
		'<span id="hidelink'+i+'" style="display:none;">' +'&nbsp;&nbsp;'+hide+'&nbsp;&nbsp;'+ '</span>'
		+ '</a></big>');
	}
}


function toggle(i) {
	 inside = document.getElementById('inside'+i);
	 showlink=document.getElementById('showlink'+i);
	 hidelink=document.getElementById('hidelink'+i);
	if(inside.style.display == 'none') {
		inside.style.display = '';
		hidelink.style.display='';
		showlink.style.display='none';

	} else {
		inside.style.display = 'none';
		hidelink.style.display='none';
		showlink.style.display='';

	}
}


function showAll() {
	for (i=0; i<numCounters; ++i)
	{
		inside = document.getElementById('inside'+i);
		showlink=document.getElementById('showlink'+i);
		hidelink=document.getElementById('hidelink'+i);

		inside.style.display = '';
		hidelink.style.display='';
		showlink.style.display='none';
	}

}


function clearAll() {
	for (i=0; i<numCounters; ++i)
	{
		inside = document.getElementById('inside'+i);
		showlink=document.getElementById('showlink'+i);
		hidelink=document.getElementById('hidelink'+i);

		inside.style.display = 'none';
		hidelink.style.display='none';
		showlink.style.display='';
	}
}

function showAllHideAll(show,hide) {
	if(document.getElementById) {
		document.writeln('<big><a href="javascript:toggleShow()" class="internal">' +
		'<span id="showAllLinks" >'  +'&nbsp;&nbsp;'+show+'&nbsp;&nbsp;'+  '</span>' +
		'<span id="hideAllLinks" style="display:none;">' +'&nbsp;&nbsp;'+hide+'&nbsp;&nbsp;'+ '</span>'
		+ '</a></big>');
	}
}

function toggleShow() {
	var showAllLinks=document.getElementById('showAllLinks');
	var hideAllLinks=document.getElementById('hideAllLinks');
	var insideAllLinks=document.getElementById('insideAllLinks');

	if(insideAllLinks.style.display == 'none') {
		insideAllLinks.style.display = '';
		hideAllLinks.style.display='';
		showAllLinks.style.display='none';
		showAll();

	} 
	else {
		insideAllLinks.style.display = 'none';
		hideAllLinks.style.display='none';
		showAllLinks.style.display='';
		clearAll();
	}
	
}


/* .htm
<FORM NAME="f_bottom">
<input class=viewbutton type="button" value="View All" name="showAllButton_bottom" onClick="showAll()">
<input class=viewbutton type="button" value="Clear All" name="clearAllButton_bottom" onClick="clearAll()">
</FORM>

or

<script type='text/javascript'>showAllHideAll("Show All","Clear All")</script>
<TR id="insideAllLinks"><TD>hi im here&nbsp;</TD></TR>
*/
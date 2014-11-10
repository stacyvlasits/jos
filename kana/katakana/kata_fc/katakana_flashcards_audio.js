// variables
var kanaA = new Array();
var audioA = new Array();
var numFlashcards;
var map = new Array ();
var mapIndex;
var timeOutEng;

// functions
function init() {
	for (i=0; i<numFlashcards; i++)
		{
			map[i] = i;
		}
	document.getElementById("kana").innerHTML = "";
	document.getElementById("audio").innerHTML = "";
	mapIndex = -1;
	scramble();
	nextKana();
}

function nextKana() {
	if (mapIndex < numFlashcards-1)
		{
			clearTimeout(timeOutEng);
			mapIndex++;
			document.getElementById("kana").innerHTML = kanaA[map[mapIndex]];
			document.getElementById("audio").innerHTML = "";
			//if (eval("document.f.displayF.checked") == true)
			if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('playSound()', document.f.delay.value*1000);
				}
		}
	else
		{
			done();
		}
}

function previousKana() {
	if (mapIndex > 0)
		{
			clearTimeout(timeOutEng);
			mapIndex--;
			document.getElementById("kana").innerHTML = kanaA[map[mapIndex]];
			document.getElementById("audio").innerHTML = "";
			if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('playSound()', document.f.delay.value*1000);
				}
		}
	else
		{
			done();
		}
}


function showEnglish() {
	document.getElementById("english").innerHTML = audioA[map[mapIndex]];
}

function playSound(soundfile) {
	var engArray = audioA[map[mapIndex]].split("audio/");
	document.getElementById("audio").innerHTML=engArray[1]+"<embed src=\""+audioA[map[mapIndex]]+".mp3\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
}

function done() {
	alert('Click START for a new game.');
}

function scramble() {
	for (z = 0; z < 2; z++) {
		for (x = 0; x < numFlashcards; x++) {
			randomI = Math.floor(Math.random()*numFlashcards);
			randomVal = map[randomI];
			savedVal = map[x];
			map[x] = randomVal;
			map[randomI] = savedVal;
		}
	}
}

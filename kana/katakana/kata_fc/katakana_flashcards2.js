// variables
var kanaA = new Array();
var englishA = new Array();
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
	document.getElementById("english").innerHTML = "";
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
			document.getElementById("english").innerHTML = "";
			//if (eval("document.f.displayF.checked") == true)
			if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('showEnglish()', document.f.delay.value*1000);
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
			document.getElementById("english").innerHTML = "";
			if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('showEnglish()', document.f.delay.value*1000);
				}
		}
	else
		{
			done();
		}
}


function showEnglish() {
	document.getElementById("english").innerHTML = englishA[map[mapIndex]];
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

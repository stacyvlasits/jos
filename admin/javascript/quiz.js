/*
Written by Jonathan Snook, http://www.snook.ca/jonathan
Add-ons by Robert Nyman, http://www.robertnyman.com
*/

function getElementsByClassName(oElm, strTagName, strClassName){
	var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName);
	var arrReturnElements = [];
	strClassName = strClassName.replace(/-/g, "\-");
	var oRegExp = new RegExp("(^|\s)" + strClassName + "(\s|$)");
	var oElement;
	for(var i=0; i<arrElements.length; i++){
		oElement = arrElements[i];
		if(oRegExp.test(oElement.className)){
			arrReturnElements.push(oElement);
		}
	}
	return (arrReturnElements);
}

numCorrect = 0;

function checkAnswers() {
	checkboxes = getElementsByClassName(document,'*','checkbox');
	usrAns = getElementsByClassName(document,'*','usrAns');
	
	numCorrect = 0;
	
	for (i=0;i<checkboxes.length;++i) {
		if (usrAns[i].value==answers[i]) {
			++numCorrect;
			checkboxes[i].checked=true;
		}
	}
	
	document.getElementById('correctBlank').innerHTML = numCorrect;
	document.getElementById('score').innerHTML = Math.round(100*(numCorrect/answers.length));
}

function reloadQuiz() {
	checkboxes = getElementsByClassName(document,'*','checkbox');
	answers = getElementsByClassName(document,'*','usrAns');
	for (i=0;i<checkboxes.length;++i) {checkboxes[i].checked = false;answers[i].value='';}
}

function submitPrep() {
	checkAnswers();
	document.getElementById('formScore').value = Math.round(100*(numCorrect/answers.length));
	
	var a = getElementsByClassName(document,'*','usrAns');
	var b = '';
	for (i=0;i<a.length;++i) b += a[i].value+"\r\n";
	document.getElementById('formAnswers').value = b;
}
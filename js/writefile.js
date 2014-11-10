
function writeit() {
/*
	alert("hi");
	x = new File("file://D:\names.txt");
		alert("hi");
	fileIsOpen = x.open("r");
	x.write('bob');
		alert("hi");

	if (fileIsOpen) {
		alert("file is open");
		write("file name: " + x + "<BR>");

		while (!x.eof()) 
		{
			line = x.readln();
			if (!x.eof())
			write(line+"<br>");
		}

		if (x.error() != 0) 
			write("error reading file" + "<BR>");
		x.close();
	}
	else
		alert("file is not open");
*/

var TristateFalse = 0;
var ForWriting = 2;
myActiveXObject = new ActiveXObject("Scripting.FileSystemObject");
myActiveXObject.CreateTextFile("file://D:\names3.txt");
file = myActiveXObject.GetFile("file://D:\names3.txt");
text = file.OpenAsTextStream(ForWriting, TristateFalse);
text.Write("Hello World");
text.Close();

//Notice that you have to define the constants by yourself.



}





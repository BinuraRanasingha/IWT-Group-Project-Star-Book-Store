function changeInformation(data)
{
	if (data == "per")
	{
		document.getElementById("pid").innerHTML = "Permanent marker pen";
		
		document.getElementById("pid1").innerHTML = "Price: Rs.60";

		document.getElementById("img1").src = "images/Permanent marker pen.jpg";
	}
	else 
	{
		document.getElementById("pid").innerHTML = "Normal marker pen";
		
		document.getElementById("pid1").innerHTML = "Price: Rs.110";

		document.getElementById("img1").src = "images/Marker pen.jpg";
	}
}

function displayInformation(data)
{
	if (data == "CR")
	{
		document.getElementById("pid2").innerHTML = "CR book";
		
		document.getElementById("pid3").innerHTML = "Price: Rs.50";

		document.getElementById("img2").src = "images/CR single rule.jpg";
	}
	else if (data == "note")
	{
		document.getElementById("pid2").innerHTML = "Note book";
		
		document.getElementById("pid3").innerHTML = "Price: Rs.40";

		document.getElementById("img2").src = "images/notebook.jpg";
	}
	else
	{
		document.getElementById("pid2").innerHTML = "Maths book";
		
		document.getElementById("pid3").innerHTML = "Price: Rs.80";

		document.getElementById("img2").src = "images/maths book.jpg";
	}
}

function rulerinformation(data)
{
	if (data == "wooden")
	{
		document.getElementById("pid4").innerHTML = "Wooden ruler";
		
		document.getElementById("pid5").innerHTML = "Price: Rs.50";

		document.getElementById("img3").src = "images/wooden ruler.jpg";
	}
	else if (data == "plastic")
	{
		document.getElementById("pid4").innerHTML = "Plastic ruler";
		
		document.getElementById("pid5").innerHTML = "Price: Rs.20";

		document.getElementById("img3").src = "images/plastic ruler.jpg";
	}
	else
	{
		document.getElementById("pid4").innerHTML = "Metal ruler";
		
		document.getElementById("pid5").innerHTML = "Price: Rs.100";

		document.getElementById("img3").src = "images/metal ruler.jpg";
	}
}

function glueInformation(data)
{
	if (data == "stick")
	{
		document.getElementById("pid6").innerHTML = "Glue stick";
		
		document.getElementById("pid7").innerHTML = "Price: Rs.90";

		document.getElementById("img4").src = "images/glue stick.jpg";
	}
	else if (data == "super")
	{
		document.getElementById("pid6").innerHTML = "Super glue";
		
		document.getElementById("pid7").innerHTML = "Price: Rs.130";

		document.getElementById("img4").src = "images/super glue.jpg";
	}
	else
	{
		document.getElementById("pid6").innerHTML = "Binder gum";
		
		document.getElementById("pid7").innerHTML = "Price: Rs.330";

		document.getElementById("img4").src = "images/binder gum.jpg";
	}
}

function fileInformation(data)
{
	if (data == "plastic")
	{
		document.getElementById("pid8").innerHTML = "Plastic file";
		
		document.getElementById("pid9").innerHTML = "Price: Rs.200";

		document.getElementById("img5").src = "images/plastic files.jpg";
	}
	else if (data == "cardboard")
	{
		document.getElementById("pid8").innerHTML = "Cardboard file";
		
		document.getElementById("pid9").innerHTML = "Price: Rs.120";

		document.getElementById("img5").src = "images/cardboard files.jpg";
	}
	else
	{
		document.getElementById("pid8").innerHTML = "Clearfiles";
		
		document.getElementById("pid9").innerHTML = "Price: Rs.330";

		document.getElementById("img5").src = "images/clear files.jpg";
	}
}

function calcInformation(data)
{
	if (data == "normal")
	{
		document.getElementById("pid10").innerHTML = "Normal calculator";
		
		document.getElementById("pid11").innerHTML = "Price: Rs.600";

		document.getElementById("img6").src = "images/normal calculator.jpg";
	}
	else
	{
		document.getElementById("pid10").innerHTML = "Scientific calaculator";
		
		document.getElementById("pid11").innerHTML = "Price: Rs.4400";

		document.getElementById("img6").src = "images/scientific calculator.jpeg";
	}
}
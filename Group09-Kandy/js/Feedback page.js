function enableButton()
{	
	if (document.getElementById("c1").checked)
	{
		document.getElementById("btnsubmit").disabled = false;
	}
	else 
	{
		document.getElementById("btnsubmit").disabled = true;
	}
}


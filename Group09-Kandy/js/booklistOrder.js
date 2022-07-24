function enableButton()
{
	if (document.getElementById("check1").checked)
	{
		document.getElementById("btnsub1").disabled = false;
	}
	else
	{
		document.getElementById("btnsub1").disabled = true;
	}
	
}
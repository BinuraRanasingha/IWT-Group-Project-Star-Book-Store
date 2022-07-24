var selectedRow = null

function onFormSubmit(){
	if (validate()){
	var formData =  readFormData();
	if(var selectedRow == null){
		insertNewRecord(formData);
	}
	else{
		updateRecord(formData); 
	}
    }
    resetForm();
}

function readFormData(){
	var formData={};
	formData["customerName"] = document.getElementById("customerName").value;
	formData["NIC"] = document.getElementById("NIC").value;
	formData["address"] = document.getElementById("address").value;
	formData["giftVoucherPrice"] = document.getElementById("giftVoucherPrice").value;
	formData["giftVoucherType"] = document.getElementById("giftVoucherType").value;
	formData["mobileNumber"] = document.getElementById("mobileNumber").value;
	return formData;

}	

function insertNewRecord(data){
	var table=document.getElementById("giftVoucherList").getElementsByTagName('tbody')[0];
	var newRow=table.insertRow(table.length);  
	cell1=newRow.insertCell(0);
	cell1.innerHTML=data.customerName;
	cell2=newRow.insertCell(1);
	cell2.innerHTML=data.NIC;
	cell3=newRow.insertCell(2);
	cell3.innerHTML=data.address;
	cell4=newRow.insertCell(3);
	cell4.innerHTML=data.giftVoucherPrice;
	cell5=newRow.insertCell(4);
	cell5.innerHTML=data.giftVoucherType;
	cell6=newRow.insertCell(5);
	cell6.innerHTML=data.mobileNumber;
	cell6=newRow.insertCell(6);
	cell6.innerHTML= `<a onClick="onEdit(this)">Edit</a>
	                  <a onClick="onDelete"(this)>Delete</a>`;
}


function resetForm(){
	document.getElementById("customerName").value = "";
	document.getElementById("NIC").value = "";
	document.getElementById("address").value = "";
	document.getElementById("giftVoucherPrice").value = "";
	document.getElementById("giftVoucherType").value = "";
	document.getElementById("mobileNumber").value = "";
	selectedRow = null;

}  

function onEdit(td){
	selectedRow = td.parentElement.parentElement;
	document.getElementById("customerName").value = selectedRow.cells[0].innerHTML;
	document.getElementById("NIC").value = selectedRow.cells[1].innerHTML;
	document.getElementById("address").value = selectedRow.cells[2].innerHTML;
	document.getElementById("giftVoucherPrice").value = selectedRow.cells[3].innerHTML;
	document.getElementById("giftVoucherType").value = selectedRow.cells[4].innerHTML;
	document.getElementById("mobileNumber").value = selectedRow.cells[5].innerHTML;
}

function updateRecord(formData){
	selectedRow.cells[0].innerHTML = formData.customerName;
	selectedRow.cells[1].innerHTML = formData.NIC;
	selectedRow.cells[2].innerHTML = formData.address;
	selectedRow.cells[3].innerHTML = formData.giftVoucherPrice;
	selectedRow.cells[4].innerHTML = formData.giftVoucherType;
	selectedRow.cells[5].innerHTML = formData.mobileNumber;

}

function onDelete(td){
	if (confirm('Are you sure you want to delete this record ? ')) {
	row = td.parentElement.parentElement;
	document.getElementById("giftVoucherList").deleteRow(row.rowIndex);
	resetForm();
	}
}

function validate(){
	isValid = true;
	if (document.getElementById("customerName").value == ""){
		isValid = false;
		document.getElementById("customerNameValidationError").classList.remove("hide");
	}
	else {
		isValid = true;
		if (!document.getElementById("customerNameValidationError").classList.contains("hide"))
			document.getElementById("customerNameValidationError").classList.add("hide");
	}
	return isValid;
}
var nameError = document.getElementById('name_error');
var durationError = document.getElementById('duration_error');
var numberError = document.getElementById('number_error');



//-------------------------------------------------validate report name----------------------------------------------------
function validateName(){
	var name = document.getElementById('report_name').value;
	
	if(name.length == 0){
		nameError.innerHTML = "Name is required";
		return false;
	}
	
	if(name.length <= 5){
		nameError.innerHTML = "Cannot enter short form. Please enter the Full name";
		return false;
	}
	
	//if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
	//	nameError.innerHTML = "Please enter the standardd name";
	//	return false;
	//}
	
	nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}





//------------------------------------------------- validate duration period--------------------------------------------------
function validateTime(){
	var time = document.getElementById('report_time').value;
	
	if(time.length == 0){
		durationError.innerHTML = "Duration is required";
		return false;
	}
	
	if(!time.match(/^[0-9]+$/)){
		durationError.innerHTML = "Only numbers can be entered";
		return false;
	}
	
	if(time >= 120){
		durationError.innerHTML = "The time should be less than 120 hours";
		return false;
	}
	
	durationError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}






//-----------------------------------------------valide price digits----------------------------------------------------
function validatePrice(){
	var price = document.getElementById('report_price').value;
	
	if(price.length == 0){
		numberError.innerHTML = "Price is required";
		return false;
	}
	
	if(!price.match(/^[0-9]+$/)){
		numberError.innerHTML = "Only numbers can be entered";
		return false;
	}
	
	numberError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
	return true;
}
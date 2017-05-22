function validateNum1(){
			
	var num1check = document.getElementById("num1").value;
	var num2check = document.getElementById("num2").value;
	
		if (isNaN(num1check)){
			document.getElementById("error").innerHTML="Please enter a number.";
			document.calculate.num1.style.backgroundColor="yellow";
			document.calculate.submit.disabled=true;
		}
		else{ 
			document.calculate.num1.style.backgroundColor="white";
			document.getElementById("error").innerHTML="";
			document.calculate.submit.disabled=false;
		}
}



function validateNum2(){
	
	var num2check = document.getElementById("num2").value;
	var num1check = document.getElementById("num1").value;

		if (isNaN(num2check)){
			document.getElementById("error").innerHTML="Please enter a number";
			document.calculate.num2.style.backgroundColor="yellow";
			document.calculate.submit.disabled=true;
		}
		else{ 
			document.calculate.num2.style.backgroundColor="white";
			document.getElementById("error").innerHTML="";
			document.calculate.submit.disabled=false;
		}

}
     
var xhr;

function calc(){
	if (validateAge() && validateCont() && validateInt()){
		var f=document.getElementById("f").value;
		var a=document.getElementById("a").value;
		var c=document.getElementById("c").value;
		var i=document.getElementById("i").value;
	    xhr = new XMLHttpRequest();
	    xhr.onreadystatechange = processResponse;
	    xhr.open("GET", "hw6.php?a=" + a + "&c=" + c + "&i=" + i + "&f=" +f, true);
	    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	    xhr.send();
	  }
}
function processResponse() {
	  if (xhr.readyState==4 && xhr.status==200) {
	    document.getElementById("result").innerText = xhr.responseText;
	  }
}
	
	
function validateAge(){
	var acheck=document.getElementById("a").value;
		if (isNaN(acheck)){
			document.getElementById("aerror").innerHTML="Invalid Input Please enter a number";
			document.calculate.a.style.backgroundColor="yellow";
			return false;
			}
		else if (acheck<=0){
			document.getElementById("aerror").innerHTML="Please enter a positive non zero number";
			document.calculate.a.style.backgroundColor="yellow";
			return false;
			}
		else if (acheck>=65){
			document.getElementById("aerror").innerHTML="You're past retirement age! Enter an age below 65";
			document.calculate.a.style.backgroundColor="yellow";
			return false;
			}
		else{ 
			document.calculate.a.style.backgroundColor="white";
			document.getElementById("aerror").innerHTML="";
			return true;
			}			
}                             
function validateCont(){
	var ccheck=document.getElementById("c").value;
		if (isNaN(ccheck)){
			document.getElementById("cerror").innerHTML="Invalid Input Please enter a number";
			document.calculate.c.style.backgroundColor="yellow";
           	return false;
           	}
		else if (ccheck<=0){
			document.getElementById("cerror").innerHTML="Please enter a positive non zero number";
			document.calculate.c.style.backgroundColor="yellow";
			return false;
			} 
		else{ 
			document.calculate.c.style.backgroundColor="white";
			document.getElementById("cerror").innerHTML="";
			return true;
			}			
}
function validateInt(){
	var icheck=document.getElementById("i").value;
		if (isNaN(icheck)){
			document.getElementById("ierror").innerHTML="Invalid Input Please enter a number";
			document.calculate.i.style.backgroundColor="yellow";
            return false;
            }
		else if (icheck<=0 || icheck>100){
			document.getElementById("ierror").innerHTML="Please enter a positive non zero number between 0 and 100";
			document.calculate.i.style.backgroundColor="yellow";
			return false;
			} 
		else{ 
			document.calculate.i.style.backgroundColor="white";
			document.getElementById("ierror").innerHTML="";
			return true;
			}			
}
function validateAge(){
			var acheck=document.getElementById("a").value;
					if (isNaN(acheck)){
					document.getElementById("aerror").innerHTML="Invalid Input Please enter a number";
					document.calculate.a.style.backgroundColor="yellow";
					document.calculate.reset.focus();
					document.calculate.submit.disabled=true;
					return false;}
					else if (acheck<=0){
					document.getElementById("aerror").innerHTML="Please enter a positive non zero number";
					document.calculate.a.style.backgroundColor="yellow";
					document.calculate.reset.focus();
					document.calculate.submit.disabled=true;
					return false;}
					else if (acheck>=65){
					document.getElementById("aerror").innerHTML="You're past retirement age! Enter an age below 65";
					document.calculate.a.style.backgroundColor="yellow";
					document.calculate.reset.focus();
					document.calculate.submit.disabled=true;
					return false;}
					else{ 
					document.calculate.a.style.backgroundColor="white";
					document.getElementById("aerror").innerHTML="";
					document.calculate.submit.disabled=false;
					return true;}			
}                             
function validateCont(){
			var ccheck=document.getElementById("c").value;
					if (isNaN(ccheck)){
					document.getElementById("cerror").innerHTML="Invalid Input Please enter a number";
					document.calculate.c.style.backgroundColor="yellow";
					document.calculate.reset.focus();
					document.calculate.submit.disabled=true;
           			return false;}
					else if (ccheck<=0){
					document.getElementById("cerror").innerHTML="Please enter a positive non zero number";
					document.calculate.c.style.backgroundColor="yellow";
					document.calculate.reset.focus();
					document.calculate.submit.disabled=true;
					return false;} 
					else{ 
					document.calculate.c.style.backgroundColor="white";
					document.getElementById("cerror").innerHTML="";
					document.calculate.submit.disabled=false;
					return true;}			
}
function validateInt(){
	var icheck=document.getElementById("i").value;
			if (isNaN(icheck)){
			document.getElementById("ierror").innerHTML="Invalid Input Please enter a number";
			document.calculate.i.style.backgroundColor="yellow";
			document.calculate.reset.focus();
			document.calculate.submit.disabled=true;
            return false;}
			else if (icheck<=0 || icheck>100){
			document.getElementById("ierror").innerHTML="Please enter a positive non zero number between 0 and 100";
			document.calculate.i.style.backgroundColor="yellow";
			document.calculate.reset.focus();
			document.calculate.submit.disabled=true;
			return false;} 
			else{ 
			document.calculate.i.style.backgroundColor="white";
			document.getElementById("ierror").innerHTML="";
			document.calculate.submit.disabled=false;
			return true;}			
}
function reloadPage(){
   window.location.reload();
}
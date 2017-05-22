var xhr;
function add(){
	var a = document.getElementById("a").value;
	var b = document.getElementById("b").value;

	if (isValid(a) && isValid(b)){
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange = processResponse;
	    xhr.open("POST", "ajaxrev.php", true);
	    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	    xhr.send("a=" + a + "&b=" + b);
	}
}

function processResponse(){
		if (xhr.ready State==4 && xhr.status==200){
			document.getElementById("result").innerText=xhr.responseText;
		}
}

function isValid(x){
		return !isNaN(x);
}
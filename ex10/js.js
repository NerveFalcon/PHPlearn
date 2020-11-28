function display(){
	var r = document.getElementById("registration");
	var a = document.getElementById("authorization");
	if(r.style.display == "none"){
		r.style.display = "block";
		a.style.display = "none";
	}else{
		r.style.display = "none";
		a.style.display = "block";
	}
}
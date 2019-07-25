function insert(num) {
	document.form.textview.value = document.form.textview.value + num
};

function equal () {
	var exp = document.form.textview.value;
	if (exp) {
		document.form.textview.value = eval (exp);
	}
};

$('form').submit(
	(e)=>{
		equal();
		return false;
 	}
);

function clean () {
	document.form.textview.value = "";
};

function back () {
	var exp = document.form.textview.value;
	document.form.textview.value = exp.substring (0,exp.length-1);
}

$ (".button").css ("width", "50px")
$ (".button").css ("height", "50px")
$ (".button").css ("font-size", "25px")
$ (".button").css ("margin", "2px")
$ (".button").css ("cursor", "pointer")
$ (".button").css ("color", "darkolivegreen")

$ ("#result").css ("height", "107px")
$ ("#result").css ("rowspan", "10")
function cI() {
		var cI = document.getElementById('clockIn');
		cI = Date();
		document.getElementById('timeIn').innerHTML = cI;
}	
function cO(){
		var cO = document.getElementById('clockOut');
		cO = Date();
			document.getElementById('timeOut').innerHTML = cO;
}
function bO(){
	var bO = document.getElementById('breakOut');
	bO = Date();
	document.getElementById('breakTimeOut').innerHTML = bO;
}
function bI(){
	var bI = document.getElementById('breakIn');
	bI = Date();
	document.getElementById('breakTimeIn').innerHTML = bI;		
}

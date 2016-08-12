var logForm = document.getElementById('logForm');
var logFormContainer = document.getElementById('logFormContainer');

var main = document.getElementById('mainContainer');

if(logForm !== null){
	function getData(){
		var name = logForm.elements.namedItem('usrName');
		var pass = logForm.elements.namedItem('usrPass');
		
		var obj = {};
		
		obj[name.name] = name.value;
		obj[pass.name] = pass.value;
		return obj;
	}

	logForm.addEventListener("submit",function(event){
		event.preventDefault();

		Ajax.request('POST','logValidate.php', true, function(response){
			console.log(response);
			if(response == "empty"){

			}else{
				console.log("here");
				logFormContainer.style.display = "none";
				main.style.display = "block";
			}
		}, getData());
	})
}
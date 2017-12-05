$(document).ready(function(){
	$("#login").click(function(e){
	e.preventDefault();
	var username = $("#username").val();
	var password = $("#password").val();

		// Checking for blank fields.
		if( username =='' || password ==''){
			$('input[type="text"],input[type="password"]').css("border","2px solid red");
			$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
			alert("Please fill all fields...!!!!!!");
		}else {
		$.post("php/login.php",{ username: username, password:password},
		function(data) {
			if(data=='Invalid Email.......') {
				$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
				$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
				alert(data);
			}else if(data=='Email or Password is wrong...!!!!'){
				$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
				alert(data);
			} else if(data=='Successfully Logged in...'){
				localStorage.setItem("user_login", username);
				alert ("user yang login =" + localStorage.getItem("user_login"));
				window.location.replace("http://localhost/user_futsal/home.html");
				/*$("form")[0].reset();
				$('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
				alert(data);*/
			} else{
				alert(data);
			}
		});

		}
	});
	$("#logout").click(function() {
		window.location.replace("http://localhost/user_futsal/");
		localStorage.login="false";
	});
});
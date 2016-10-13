<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css">
</head>

<body>

<!-- BACKGROUND ANIMATION -->
	<ul class="bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

	<div id="container">

		<div class="header">
			<h1> Os Três Mosqueteiros </h1>
		</div>

		<div id="login">
			<form  action="javascript:void(0);">
				<label for="login"> Please Login or Register </label>
				<input type="textbox" id="usertxt" name="username" placeholder="Username">
				<input type="password" id="userpwd" name="password" placeholder="Password">
				<button class="btn-register pull-left regbtn"> Register </button>
				<button class="btn-login pull-right" id="loginbtn"> Login </button> 
			</form>
		</div>

	
		<div id="signup" style="display:none;">
			<form action="javascript:void(0);">
				<label for="signup"> Fill the form to complete the Signup </label>
				<input type="textbox" name="username" id="reguser" placeholder="Username">
				<input type="password" name="password" id="regpwd" placeholder="Password">
				<input type="password" name="reenter password" id="regpwd2" placeholder="Reenter the password">
				<input type="textbox" name="email" placeholder="Email">
				<button id="btn-cancel" class="pull-left regbtn" > Cancel </button>
				<button class="pull-right" id="reg-btn"> Register </button>
			</form>
		</div>

	</div>


<!-- <script>
	document.getElementById("signup").style.display = "block";
</script> -->

</body>

<script>

$('#reg-btn').click(function regUser(){
				var reguser = $('#reguser').val();
				var regpwd = $('#regpwd').val();
				var verpwd = $('#regpwd2').val();
				if(regpwd == verpwd){

						$.ajax({
								type: "POST",
								url: "php/regscript.php",
								data: {username:reguser,userpwd:regpwd}
							}).done(function( result ) {
								if(result != null){
									alert(result);
									//dialog.dialog("close");
									$('#reguser').val("");
									$('#regpwd').val("");						
								}
					});
				}else{
					alert("as passwords nao coincidem");
				}
				
			});

$('.regbtn').click(function(){

			
			$('#signup').toggle();

		});

$('#loginbtn').click(function(){
		var usertxt = $('#usertxt').val();
		var userpwd = $('#userpwd').val();

		
		$.ajax({
							type: "POST",
							url: "php/security.php",
							data: {usertxt:usertxt,userpwd:userpwd}
						}).done(function( result ) {
							if(result != null){
								
								if(result == 1){
									alert("Bem vindo!");
									window.location.href = "index.php";
								}else if(result == 0){
									alert('Username ou Password errados!');
								}
								//alert(result);					
							}
						});

	//alert(usertxt + userpwd);
		});
/*
	$(function(){
		var dialog = $("#dialog-form").dialog({
			autoOpen: false
		});

		

		

		

		
		
});


	
*/
	
</script>

</html>
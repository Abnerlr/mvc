$(document).ready(function(){
	var url="http://localhost/mvc/controller/AuthController.php";
    
    //Login Function
    $("#login").click(function(){
    	
    	var email=$("#email").val();
    	var password=$("#password").val();
    	var dataString="email="+email+"&password="+password+"&login=";
    	if($.trim(email).length>0 & $.trim(password).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#login").html('Procesando...');},
				success: function(data){

					console.log(data);
					if(data=="success")
					{
						localStorage.login="true";
						localStorage.email=email;
						window.location.href = "index.php";
					}
					else if(data="failed")
					{
						alert("Login error");
						$("#login").html('Login');
						$('#err').html(data);
					}
				}
			});
		}return false;

    });

    //signup function
    $("#signup").click(function(){
    	var fullname=$("#rfullname").val();
    	var email=$("#remail").val();
    	var password=$("#rpassword").val();
    	var dataString="fullname="+fullname+"&email="+email+"&password="+password+"&signup=";

    	if($.trim(fullname).length>0 & $.trim(email).length>0 & $.trim(password).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#signup").val('Connecting...');},
				success: function(data){
					if(data=="success")
					{
						alert("Gracias por registrarse con nosotros! Ahora ya puede ingresar!");
					}
					else if(data="exist")
					{
						alert("Parece que ya tienes cuenta, intenta loguear de nuevo!");
					}
					else if(data="failed")
					{
						alert("Algo ha salido mal, intenta más tarde.");
					}
				}
			});
		}return false;

    });

    //Change Password
    $("#change_password").click(function(){
    	var email=localStorage.email;
    	var old_password=$("#old_password").val();
    	var new_password=$("#new_password").val();
    	var dataString="old_password="+old_password+"&new_password="+new_password+"&email="+email+"&change_password=";
    	if($.trim(old_password).length>0 & $.trim(old_password).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#change_password").val('Connecting...');},
				success: function(data){
					if(data=="incorrect")
					{
						alert("Your old password is incorrect");
					}
					else if(data="success")
					{
						alert("Contraseña cambiada exitosamente!");
					}
					else if(data="failed")
					{
						alert("Algo ha salido mal!");
					}
				}
			});
		}return false;

    });

    //Forget Password
    $("#forget_password").click(function(){
    	var email=$("#email").val();
    	var dataString="email="+email+"&forget_password=";
    	if($.trim(email).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#forget_password").val('Connecting...');},
				success: function(data){
					if(data=="invalid")
					{
						alert("No estás registrado con nosotros!");
					}
					else if(data="success")
					{
						alert("Tu nueva contraseña ha sido enviada al correo electrónico asociado a tu cuenta.");
					}
				}
			});
		}return false;

    });


    //logout function
    $("#logout").click(function(){
    	localStorage.login="false";
    	window.location.href = "login.html";
    });

    //Displaying user email on home page
    $("#email1").html(localStorage.email);
    var imageHash="http://www.gravatar.com/avatar/"+md5(localStorage.email);
    $("#profilepic").attr('src',imageHash);

    $('#prueba').click(function(){
    	alert('js auht');
    });
});
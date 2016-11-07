$(function(){
	$(document).on('click', '#logout', function(event) {
		event.preventDefault();

		localStorage.login="false";

		var dataString="logout=false";

		$.ajax({
				type: "POST",
				url: 'http://localhost/mvc/controller/AuthController.php',
				data: dataString,
				crossDomain: true,
				cache: false,
				success: function(data){

					console.log(data);
					if(data=="success")
					{
						window.location.href = "index.php";
					}
					else if(data="failed")
					{
						alert("Login error");
					}
				}
			});
	});
});
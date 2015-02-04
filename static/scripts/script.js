$(document).ready(function(){
	//console.log('document ready');
	var url = document.URL;
	console.log('url: ' + url);
	$('#logout_button').hide();
	//Display current page
	if(url.indexOf("/") > -1)
	{
		$('#home').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("profile") > -1)
	{
		$('#profile').addClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("timesheet") > -1)
	{

		$('#timesheet').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("settings") > -1)
	{
		$('#settings').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
	}
	if(url.indexOf("about") > -1)
	{
		$('#about').addClass('active');
		$('#profile').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#contact').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}
	if(url.indexOf("contact") > -1)
	{
		$('#contact').addClass('active');
		$('#profile').removeClass('active');
		$('#about').removeClass('active');
		$('#timesheet').removeClass('active');
		$('#home').removeClass('active');
		$('#settings').removeClass('active');
	}

/* LOGIN STATUS CHECK */
	$.ajax({
		type: 'GET', 
		url: 'php/check_user_status.php',
		success: function(data)
		{
			console.log("check user response: " + data);
			if(JSON.parse(data) == "fail")
			{
				$('#login_button').removeClass('btn-danger');
				$('#login_button').removeClass('btn-success');
				$('#login_button').addClass('btn-danger');
				
				console.log("user is not logged in");
				// Pages in which user must be logge in, in order to see
				var secure_pages = ['timesheet', 'profile', 'settings'];
				
				console.log("URL: " + url);
				if(url.indexOf('index') > -1)
				{
					console.log("index loaded");
				}
				else if(url.indexOf(secure_pages[0]) > -1)
				{
					console.log("Must be logged in to view this page");
					window.location.replace('index.php');
				}
				else if(url.indexOf(secure_pages[1]) > -1)
				{
					console.log("Must be logged in to view this page");
					window.location.replace('index.php');
				}
				else if(url.indexOf(secure_pages[2]) > -1)
				{
					console.log("Must be logged in to view this page");
					window.location.replace('index.php');
				}
			}
			else
			{
				console.log("user is logged in");
				$('#logout_button').show();
				$('#login_button').removeClass('btn-danger');
				$('#login_button').addClass('btn-success');
			}
		}
	});//ajax end


/* LOGOUT SCRIPT */
	$('#logout_form').submit(function(){
		$.ajax({
			type: 'GET', 
			url: 'logout.php',
			success: function(data)
			{
				console.log("LOGOUT RESPONSE: " + data);
				if(JSON.parse(data) == "success")
				{
					console.log("USER IS LOGGED OUT");
					//Remove all possible classes
					$('#login_button').removeClass('btn-danger');
					$('#login_button').removeClass('btn-success');
					$('#login_button').addClass('btn-danger');
				}
			}
		});//ajax end
	});//submit end

});










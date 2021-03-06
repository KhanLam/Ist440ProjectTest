<html>
<head>
<?php include 'templates/header.html'; ?>
<style>
#settings_container
{
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	padding: 20px;
	width: 600px;
}
#settings_container h1
{
	margin-bottom: 10px;
}
#settings_container button
{
	margin-bottom: 15px;
}
</style>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>
<link rel="stylesheet" type="text/css" href="static/css/index_style.css">

<div class="page_container">
	<?php include 'templates/banner.php'; ?>
	<div id="settings_container">
		<h1>Account Settings</h1>
		<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="collapse" data-target="#change_email_container" aria-expanded="false" aria-controls="change_email_container">Change your Username</button>
		<!-- Change username form -->
		<div id="change_email_container" class="collapse">
			<form id="change_email_form" method="POST" action="change_email.php">
				<h1>Change your Email</h1>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" name="change_email" class="form-control" id="change_email" placeholder="Enter your new email address">
				</div>
				<button id="email_submit" type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<!-- End username form -->
		<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="collapse" data-target="#change_password_container" aria-expanded="false" aria-controls="change_password_container">Change your Password</button>
		<!-- Change password form -->
		<div id="change_password_container" class="collapse">
			<form id="change_password_form" method="POST" action="change_password.php" >
				<h1>Change your Password</h1>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter your new password">
				</div>
				<button id="password_submit" type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<!-- End password form -->

		<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="collapse" data-target="#edit_company_info_container" aria-expanded="false" aria-controls="edit_company_info_container" >Edit Company Info</button>
		<!-- Edit company info form -->
		<div id="edit_company_info_container" class="collapse">
			<form id="change_password_form">
				<h1>Edit your Company Info</h1>
				<div class="form-group">
					<label for="name">Company Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Edit your company's name">
				</div>

				<div class="form-group">
					<label for="name">Company Address</label>
					<input type="text" class="form-control" id="address" name="address" placeholder="Edit your company's address">
				</div>
				<button id="company_submit" type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<!--  end company form -->
	</div>
</div>
<!-- End page container -->
</body>
<?php include 'templates/footer.html' ?>
<script type="text/javascript" src="static/scripts/script.js"></script>
<script type="text/javascript" src="static/scripts/settings.js"></script>
</html>
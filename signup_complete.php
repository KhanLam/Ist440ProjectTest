
<html>
<head>
<?php include 'templates/header.html'; ?>
<link rel="stylesheet" type="text/css" href="static/css/index_style.css">
<style>
#signup_complete
{
  padding: 7px;
  text-align: center;
  border-radius: 12px;
}
</style>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>

<div class="page_container">
<?php include 'templates/banner.php'; ?>

<!-- Signup was successful -->
  <div id="signup_complete" class="jumbotron">
    <h1>Congradulations, you are now signed up!</h1>
    <p>You can now login with your new credentials</p>
  </div>

</div>
<!-- End page container -->
<!-- Begin page level scripts -->
<script type="text/javascript" src="static/scripts/script.js"></script>
</body>
</html>
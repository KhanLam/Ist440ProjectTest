
<html>
<head>
<?php include 'templates/header.html'; ?>
<link rel="stylesheet" type="text/css" href="static/css/index_style.css">
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>

<div class="page_container">
<?php include 'templates/banner.php'; ?>

<!-- Signup form -->
<form id="signup_form" method="POST" action="signup.php">
  <div id="status">
    <h1>Just a few clicks away...</h1>
  </div>
  <div id="email_container" class="form-group has-feedback">
    <label>Email address</label>
    <input id="email" type="email" name="username" class="form-control" placeholder="Enter email">
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
  </div>
  <div id="password_container" class="form-group has-feedback">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <i class="glyphicon glyphicon-exclamation-sign form-control-feedback"></i>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
</form>

</div>
<!-- End page container -->

<!-- Begin page level scripts -->
<script type="text/javascript" src="static/scripts/script.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#signup_form").validate({
  rules: {
    password: {
      required: true,
      minlength: 6,
    },

    username: {
    required: true,
    email: true
    }

  },
  messages: {
    password: {
      required: "Password is a required field",
      minlength: "Password must be at least 8 characters"
    },
    username: {
    required: "Email is a required field",
    email: "Your email address must be in the format of name@domain.com"
    }
  }
}); //end validation
});//doc
</script>
</body>
</html>
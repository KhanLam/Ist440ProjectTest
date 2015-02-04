<html>
<head>
<?php include 'templates/header.html'; ?>
</head>
<body>
<?php include 'templates/main_navigation.html'; ?>

<div class="page_container">	
<?php include 'templates/banner.php'; ?>
<div class="day">
	<h1><?php $jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y")); echo(jddayofweek($jd,1)); ?></h1>
</div>

<div id="dp"></div>

<table id="week_details_table" class="table table-bordered table-striped table-hover" style="margin-top: 10px;">
    <thead>
        <tr>
            <th data-field="work-item">Work Item</th>
            <th data-field="start">Start Time</th>
            <th data-field="end">End Time</th>
            <th data-field="total">Total Time</th>
            <th data-field="details">Details</th>
            <th data-field="complete">Completed</th>
        </tr>
    </thead>
    <tbody>
      <!-- Retrieve timesheet data from DB -->
    	<?php include_once 'get_timesheet.php' ?>
    </tbody>
</table>
<!-- Start / Stop Buttons -->
<div id="time_container">
  <div class="btn-group" role="group">
      <button id="start" type="button" class="btn btn-success btn-lg">Start</button>
      <button id="stop" type="button" class="btn btn-danger btn-lg">Stop</button>
  </div>
</div>

<div id="totals_banner">
  <h1>My Totals</h1>
</div>
 <!-- Table totals for the week -->
<table id="totals_table" class="table table-bordered table-striped table-hover" style="margin-top: 10px;">
  <thead>
    <tr>
      <th data-field="work-item">Today's Hours</th>
      <th data-field="start">Total Hours this Week</th>
      <th data-field="end">Total Hours YTD</th>
      <th data-field="complete">Completed Tasks</th>
    </tr>
  </thead>
<!-- Test data for totals columns -->
  <tbody>
    <tr>
      <td>8.5 hours</td>
      <td class="warning">54 hours</td>
      <td>1298 hours</td>
      <td>32 tasks completed</td>
    </tr>
  </tbody>
</table>
<!-- End totals table -->

</div><!-- page container -->
<script type="text/javascript" src="static/scripts/script.js"></script>
<!-- scripts go here -->
<script type="text/javascript">
$(document).ready(function(){

	var path = 'http://localhost/IST440Project/';

	$('tbody tr').hover(function(){
		console.log("HOVER");
		$(this).addClass("success");
	});

	$('tr').mouseout(function(){
		$(this).removeClass("success");
	});

	$('#start').click(function(){
		console.log('start clicked');
		var crnt_time = (new Date()).getTime();
		$.ajax({
			type: 'post',
			url: path+'log_time.php',
			data: {'type': 0},
			success: function(response){
				console.log('timer started');
				console.log(response);
			},
		});
	});

	$('#stop').click(function(){
		console.log('stop clicked');
		var crnt_time = (new Date()).getTime();
		$.ajax({
			type: 'post',
			url: path+'log_time.php',
			data: {'type': 1},
			success: function(response){
				console.log('timer started');
				console.log(response);
			},
		});
	});
});
</script>
</body>
<?php include 'templates/footer.html' ?>
</html>

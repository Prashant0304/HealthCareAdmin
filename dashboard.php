<?php
require 'scripts/config.php';
require 'scripts/session.php';
require 'scripts/adminaccess.php';
require 'scripts/idtoname.php';



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Curilux - Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.2/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <style>
    .dataTables_info  {
		display:block !important;
	}
    .pagination  {
		display:flex !important;
	}
    </style>
  </head>
  <body>
    <div class="main-wrapper">
	  <?php
	  include('scripts/header.php');
	  include('scripts/nav.php');
	  
	  
	  ?>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="https://cdn.datatables.net/rowreorder/1.3.2/js/dataTables.rowReorder.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script>
	$('#processing').html('<?php echo $totalprocessing;?>');
	$('#total').append('<?php echo $totaltasks;?>');
	$('#pending').append('<?php echo $totalpending;?>');
	$('#rescheduled').append('<?php echo $totalresheduled;?>');
	</script>
    <script src="assets/js/app.js"></script>
    <script>
		
	$('#alltasks').DataTable( {
		 "bDestroy": true,
		 "bPaginate":true,
		 "sPaginationType":"full_numbers",
		 "bLengthChange": true,
		 "bInfo" : true,
		 "responsive": true,
	
	} );
		
		
		
    if ($('#donut-chart-dash').length > 0) {
	var donutChart = {
		chart: {
			height: 290,
			type: 'donut',
			toolbar: {
			  show: false,
			}
		},
		 plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '50%'
			},
		},
		dataLabels: {
			enabled: false
		},
		series: [<?php echo mysqli_num_rows($completed);?>, <?php echo mysqli_num_rows($pending);?>,<?php echo mysqli_num_rows($processing);?>, <?php echo mysqli_num_rows($following);?>],
		labels: [
			'Completed',
			'Pending',
			'Processing',
			'Rescheduled',
		],
		colors: [
			'#198754',
			'#dc3545',
			'#ebcd38',
			'#009efb',
		],
		responsive: [{
			breakpoint: 480,
			options: {
				chart: {
					width: 200
				},
				legend: {
					position: 'bottom'
				}
			}
		}],
		legend: {
			position: 'bottom',
		}
	}

	var donut = new ApexCharts(
		document.querySelector("#donut-chart-dash"),
		donutChart
	);

	donut.render();
	}



	if ($('#apexcharts-area').length > 0) {
		var options = {
			chart: {
				height: 200,
				type: "line",
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: "smooth"
			},
			series: [{
				name: "Expenses Rs",
				color: '#2E37A4',
				data: <?php echo json_encode($exparray); ?>
			}],
			xaxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			}
		}
		var chart = new ApexCharts(
			document.querySelector("#apexcharts-area"),
			options
		);
		chart.render();
	}

if ($('#patient-chart').length > 0) {
	var sColStacked = {
		chart: {
			height: 230,
			type: 'line',
			stacked: true,
		
		},
		// colors: ['#4361ee', '#888ea8', '#e3e4eb', '#d3d3d3'],
		responsive: [{
			breakpoint: 480,
			options: {
				legend: {
					position: 'bottom',
					offsetX: -10,
					offsetY: 0
				}
			}
		}],
		plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '15%'
			},
		},
		dataLabels: {
			enabled: false
		},
		yaxis: {
		  labels: {
			formatter: function(val) {
			  return Math.floor(val)
			}
		  }
		},
		series: [
		{
			name: 'Pending',
			color: '#dc3545',
			data: <?php echo json_encode($pendingarray); ?>
		},
		{
			name: 'Processing',
			color: '#ebcd38',
			data: <?php echo json_encode($parray); ?>
		},
		{
			name: 'Completed',
			color: '#198754',
			data: <?php echo json_encode($completedarray); ?>
		},
		{
			name: 'Resheduled',
			color: '#009efb',
			data: <?php echo json_encode($rdarray); ?>
		}
		
		],
		xaxis: {
			categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		},
		
	}

	var chart = new ApexCharts(
		document.querySelector("#patient-chart"),
		sColStacked
	);

	chart.render();
}


    </script>
  </body>
 
</html>

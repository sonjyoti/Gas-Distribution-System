<?php 
	include 'includes/auth.php';
	include 'dashboardTab_logic.php';
	include 'distributorTab_logic.php';
	include 'consumerTab_logic.php';
	include 'feedbackTab_logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Dashboard</title>
	<link rel="icon" href="../assets/img/logo.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
	<header>
		<!-- ---- Navbar Section ---- -->
		<nav class="navbar navbar-default" style="background-color: black; border-radius: 0%; height: 70px; display: flex; align-items: center;">
			<div class="container-nav">
				<a class="navbar-brand" style="color: white; padding-left: 50px;"><b>ADMIN DASHBOARD</b></a>
				<ul class="navbar-nav" style="list-style: none; display: flex; justify-content: flex-end;">
					<div class="button-container" style="padding-left: 1100px; padding-top: 10px;">
						<button style="height: 30px; width: 100px; background-color: green; border-radius: 4px; color: white; border: 1px solid black; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.backgroundColor='rgba(255, 0, 0, 0.684)'" onmouseout="this.style.backgroundColor='green'">
							<a href="logout.php" style="color: white; text-decoration: none;"><b>Log-Out <i class="fa-solid fa-right-from-bracket"></i></b></a>
						</button>
					</div>
				</ul>
			</div>
		</nav>
	</header><br>
	
	<section style="padding-left: 130px; padding-top: 40px; padding-bottom: 60px; overflow-x: hidden;">
        <div class="tabs" style="width: 1250px;">
          <button class="tablinks" onclick="openTab('dashboard')" id="defaultOpen"><b>Dashboard</b></button>
          <button class="tablinks" onclick="openTab('distributor')"><b>Manage Distributor</b></button>
		  <button class="tablinks" onclick="openTab('consumer')"><b>Manage Consumers</b></button>
          <button class="tablinks" onclick="openTab('feedback')"><b>Complaints/Feedback</b></button>
        </div>

        <div id="dashboardTab" class="tabPanel active" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Admin Dashboard -</b></h4>
		  	<div class="container" style="padding-top: 10px; height: 400px;">
			  <div class="row">
				<div class="col-md-4">
					<div style="padding-left: 20px; padding-top: 20px;">
						<div style="padding-bottom: 10px;">
							<div class="square-service-block">
								<a href="d_prof.php" class="btn btn-info btn-lg" style="width: 300px; height: 100px;">
									<br><span class="glyphicon glyphicon-user"></span><br><b>Total Consumers: 15<b>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div style="padding-left: 20px; padding-top: 20px;">
						<div style="padding-bottom: 10px;">
							<div class="square-service-block">
								<a href="view_fc.php" class="btn btn-danger btn-lg" style="width: 300px; height: 100px;">
									<br><span class="glyphicon glyphicon-edit"></span><br><b>Feedback & Complaints: 15<b>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div style="padding-bottom: 10px; padding-top: 20px;">
						<div class="square-service-block">
							<a href="add_con.php" class="btn btn-success btn-lg" style="width: 300px; height: 100px;">
								<br><span class="glyphicon glyphicon-copy"></span><br><b>Total Distributors: 15<b>
							</a>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>

        <div id="distributorTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          	<h4 style="padding-left: 10px;"><b>Manage Distribution -</b></h4><br>
		  	<div class="container" style="padding-top: 10px; height: 380px;">
				<div class="panel panel-default" style=" border: none;">
					<div class="panel-heading"><h4><b>Manage Distribution -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%;">
								<thead>
								<tr>
									<th>Distributor Id</th>
									<th>Name</th>
									<th>Address</th>
									<th>City</th>
									<th>Mobile no.</th>
									<th>Email</th>
									<th>Account Status</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>View Consumers</th>
								</tr>
								</thead>
								<tbody id="myTable">
									<tr>
										<?php
										if (mysqli_num_rows($disT_result) == 0) {
											?><strong>
												<?php echo htmlentities("No Students to show!"); ?>
											</strong>
											<?php
										} else {
											while ($disT_row = mysqli_fetch_assoc($disT_result)) {
												?>
												<tr>
													<td>
														<?php echo htmlentities($disT_row['id']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['name']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['address']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['city']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['phn_no']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['email']); ?>
													</td>
													<td>
														<?php echo htmlentities($disT_row['status']); ?>
													</td>
													<td>
														<p data-placement="top" data-toggle="tooltip" title="Edit">
															<a href="edit_distributor.php"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" id='.$r[0].' onclick="return up_data_form(this.id)">
																<span class="glyphicon glyphicon-pencil"></span>
															</button></a>
														</p>
													</td>
													<td>
														<p data-placement="top" data-toggle="tooltip" title="Delete">
															<a href="deletepagedis.php"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id='.$r[0].' onclick="return Deleteqry('.$r[0].');">
																<span class="glyphicon glyphicon-trash"></span>
															</button></a>
														</p>
													</td>
													<td>
														<p data-placement="top" data-toggle="tooltip" title="View Consumers of '.$r[1].'">							
															<a href="view_consumer.php"><button class="btn btn-info btn-xs" data-title="Delete" data-toggle="modal" data-target="#view_con" id='.$r[0].' value="'.$r[1].'" onclick="return con_fetch(this.id,this.value)">
																<span class="glyphicon glyphicon-list-alt"></span>
															</button></a>
														</p>								
													</td>	
												<?php
											}
										}
										?>
									</tr>						
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
        </div>

		<div id="consumerTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          	<h4 style="padding-left: 10px;"><b>Manage Consumers -</b></h4><br>
		  	<div class="container" style="padding-top: 10px; height: 380px;">
				<div class="panel panel-default" style=" border: none;">
					<div class="panel-heading"><h4><b>Manage Consumers -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%;">
								<thead>
								<tr>
									<th>Consumer Id</th>
									<th>Name</th>
									<th>Address</th>
									<th>City</th>
									<th>Mobile no.</th>
									<th>Email</th>
									<th>Account Status</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>View Distributor</th>
								</tr>
								</thead>
								<tbody id="myTable">
								<?php
								if (mysqli_num_rows($disT_result) == 0) {
									?><strong>
										<?php echo htmlentities("No Students to show!"); ?>
									</strong>
									<?php
								} else {
									while ($conT_row = mysqli_fetch_assoc($conT_result)) {
										?>
										<tr>
											<td>
												<?php echo htmlentities($conT_row['id']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['name']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['address']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['city']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['phn_no']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['email']); ?>
											</td>
											<td>
												<?php echo htmlentities($conT_row['status']); ?>
											</td>
											<td>
												<p data-placement="top" data-toggle="tooltip" title="Edit">
													<a href="edit_consumer.php"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" id='.$r[0].' onclick="return up_data_form(this.id)">
														<span class="glyphicon glyphicon-pencil"></span>
													</button></a>
												</p>
											</td>
											<td>
												<p data-placement="top" data-toggle="tooltip" title="Delete">
													<a href="deletepagecons.php"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" id='.$r[0].' onclick="return Deleteqry('.$r[0].');">
														<span class="glyphicon glyphicon-trash"></span>
													</button></a>
												</p>
											</td>
											<td>
												<p data-placement="top" data-toggle="tooltip" title="View Consumers of '.$r[1].'">							
													<a href="view_distributor.php"><button class="btn btn-info btn-xs" data-title="Delete" data-toggle="modal" data-target="#view_con" id='.$r[0].' value="'.$r[1].'" onclick="return con_fetch(this.id,this.value)">
														<span class="glyphicon glyphicon-list-alt"></span>
													</button></a>
												</p>								
											</td>	
										</tr>
										<?php
									}
								}
								?>							
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
        </div>

        <div id="feedbackTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          	<h4 style="padding-left: 10px;"><b>Complaints/Feedback -</b></h4>
			<div class="container" style="padding-top: 10px; height: 380px;">
				<div class="panel panel-default">
					<div class="panel-heading"><h4><b>Consumer Complaints & Feedback -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%">
								<thead>
									<tr>
										<th>Consumer Id</th>
										<th>Consumer Name</th>
										<th>Distributor Id</th>
										<th>Distributor Name</th>
										<th>Date</th>
										<th>Time</th>
										<th>Type</th>
										<th>Subject</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody id="myTable">
								<?php
								if (mysqli_num_rows($feedT_result) == 0) {
									?><strong>
										<?php echo htmlentities("No Students to show!"); ?>
									</strong>
									<?php
								} else {
									while ($feedT_row = mysqli_fetch_assoc($feedT_result)) {
										?>
										<tr>
											<td>
												<?php echo htmlentities($feedT_row['con_id']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['con_name']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['dis_id']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['dis_name']); ?>
											</td>
											<td>
												<?php echo htmlentities(date('d/m/Y', strtotime($feedT_row['feed_date']))); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['feed_time']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['feed_type']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['feed_subject']); ?>
											</td>
											<td>
												<?php echo htmlentities($feedT_row['feed_des']); ?>
											</td>	
										</tr>
										<?php
									}
								}
								?>							
								</tbody>
							</table>
						</div>						
					</div>
				</div>
			</div>
		</div>
    </section>

	

    <!-- --- Footer Section --- -->
	<footer class="site-footer" style="background-color: black; height: 50px; display: flex; align-items: center; justify-content: center;">
		<h7 style="color: white;"><b>Online Gas Distribution System | Copyright © Pritviraj Keot & Hirokjyoti Kalita</b></h7>
	</footer>

	<script>
		function openTab(tabName) {
			let i;
			const tabContent = document.getElementsByClassName('tabPanel');
			const tablinks = document.getElementsByClassName('tablinks');
  
			for (i = 0; i < tabContent.length; i++) {
				tabContent[i].style.display = 'none';
				tablinks[i].classList.remove('active');
			}
  
			document.getElementById(tabName + 'Tab').style.display = 'block';
  
			for (i = 0; i < tabLabels.length; i++) {
				if (tabLabels[i].id === tabName) {
					tabLabels[i].classList.add('active');
				}
			}
		}
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Data for the pie chart
			var data = {
			datasets: [{
				data: [20, 40, 40],
				backgroundColor: ['#00FFFF', 'green', 'red'],
			}],
			};


			var ctx = document.getElementById('myPieChart').getContext('2d');

			var myPieChart = new Chart(ctx, {
			type: 'pie',
			data: data,
			});
		});
	</script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="''/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
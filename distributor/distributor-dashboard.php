<?php 
    include 'includes/auth.php';
	include 'dashboardTab_logic.php';
	include 'consumerTab_logic.php';
	include 'ordersTab_logic.php';
	include 'feedbackTab_logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Distributor-Dashboard</title>
	<link rel="icon" href="../assets/img/logo.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
	<style>
		#Logout {
			display: none;
			position: fixed;
			top: 20%;
			left: 88%;
			width: 300px;
			transform: translate(-50%, -50%);
			padding: 20px;
			background-color: white;
			color: white;
			text-align: center;
			border-radius: 6px;
		}

		#overlay {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
		}

		#closeModalBtn {
			cursor: pointer;
			color: black;
			font-size: 20px;
			font-weight: bold;
			margin-top: 10px;
			background: none;
			position: absolute;
			top: -15px;
			right: 10px;
		}

	</style>
</head>
<body>
	<header>
		<!-- ---- Navbar Section ---- -->
		<nav class="navbar navbar-default" style="background-color: black; border-radius: 0%; height: 70px; display: flex; align-items: center;">
			<div class="container-nav">
				<a class="navbar-brand" style="color: white; padding-left: 50px;"><b>DISTRIBUTOR DASHBOARD</b></a>
				<ul class="navbar-nav" style="list-style: none; display: flex; justify-content: flex-end;">
					<div class="button-container" style="padding-left: 1050px; padding-top: 10px;">
						<button style="height: 30px; width: 100px; background-color: green; border-radius: 4px; color: white; border: 1px solid black; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.backgroundColor='rgba(255, 0, 0, 0.684)'" onmouseout="this.style.backgroundColor='green'">
							<a href="logout.php"  style="color: white; text-decoration: none;"><b>Log-Out <i class="fa-solid fa-right-from-bracket"></i></b></a>
						</button>
					</div>
				</ul>
			</div>
		</nav>
	</header><br>
	
	<section style="padding-left: 130px; padding-top: 40px; padding-bottom: 80px;">
        <div class="tabs" style="width: 1250px;">
          <button class="tablinks" onclick="openTab('dashboard')" id="defaultOpen"><b>Dashboard</b></button>
          <button class="tablinks" onclick="openTab('consumers')"><b>Manage Consumers</b></button>
          <button class="tablinks" onclick="openTab('orders')"><b>Check Orders</b></button>
          <button class="tablinks" onclick="openTab('feedback')"><b>Complaints/Feedback</b></button>
        </div>

        <div id="dashboardTab" class="tabPanel active" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Distributor Dashboard -</b></h4>
			<div class="panel panel-default" style="border: none; background-color: white;">
				<div class="panel-heading" style=" background-color: white;">
					<div class="panel-body" style=" background-color: white;">
						<div class="row">
				  			<div class="col-sm-6">
								<div class="table-responsive">  
									<table class="table  table-striped">
										<thead>
											<tr>
												<th colspan=2 class="text-center" style="background-color: green; color: white; border-radius: 5px;">Distributor Details</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Distributor ID : <?php echo htmlentities($dis_id); ?></th>
												<td></td>
											</tr>
											<tr>
												<th>Distributor Name : <?php echo htmlentities($dashT_row['name']); ?></th>
												<td></td>
											</tr>
											<tr>
												<th>Registered Address : <?php echo htmlentities($dashT_row['address']); ?></th>
												<td></td>
											</tr>
											<tr>
												<th>Registered Mobile No. : <?php echo htmlentities($dashT_row['phn_no']); ?></th>
												<td></td>
											</tr>	
											<tr>
												<th>Registered Email : <?php echo htmlentities($dashT_row['email']); ?></th>
												<td></td>
											</tr>								
										</tbody>
									</table>
								</div>
							</div>

							<div class="col-sm-6">
								<div style="padding-left: 50px;">
									<div style="padding-bottom: 10px;">
										<div class="square-service-block">
											<a href="d_prof.php" class="btn btn-info btn-lg" style="width: 500px;">
											<span class="glyphicon glyphicon-user"></span> 
											<br><b>Profile<b>
											</a>
										</div>
									</div>
									<div style="padding-bottom: 10px;">
										<div class="square-service-block">
											<a href="add_con.php" class="btn btn-success btn-lg" style="width: 500px;">
											<span class="glyphicon glyphicon-copy"></span> 
											<br><b>Add Connection<b>
											</a>
										</div>
									</div>
									<div style="padding-bottom: 10px;">
										<div class="square-service-block">
											<a href="man_con.php" class="btn btn-primary btn-lg" style="width: 500px;">
												<span class="glyphicon glyphicon-tasks"></span>
												<br><b>Manage Consumers<b>
											</a>
										</div>
									</div>
									<div style="padding-bottom: 10px;">
										<div class="square-service-block">
											<a href="chk_ord.php" class="btn btn-warning btn-lg" style="width: 500px;">
											<span class="glyphicon glyphicon-retweet"></span> 
											<br><b>Check Orders<b>
											</a>
										</div>
									</div>
									<div style="padding-bottom: 10px;">
										<div class="square-service-block">
											<a href="view_fc.php" class="btn btn-danger btn-lg" style="width: 500px;">
											<span class="glyphicon glyphicon-edit"></span> 
											<br><b>View Feedback & Complaint<b>
											</a>
										</div>
									</div>						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>							
        </div>

        <div id="consumersTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
            <h4 style="padding-left: 10px;"><b>Manage Consumer -</b></h4><br>
			<div class="container" style="height: 400px;">
				<div class="panel panel-default">
					<div class="panel-heading"><h4><b> Manage Consumer -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%">
								<thead>
								<tr>
									<th>Consumer Id</th>
									<th>Name</th>
									<th>Address</th>
									<th>Contact</th>
									<th>Email</th>
									<th>Online Registration Date</th>
									<th>Account Status</th>
								</tr>
								</thead>
								<tbody id="myTable">
								<?php
								if (mysqli_num_rows($conT_result) == 0) {
									?><strong>
										<?php echo htmlentities("No Subjects to show!"); ?>
									</strong>
									<?php
								} else {
									while ($conT_row = mysqli_fetch_assoc($conT_result)) {
										?>
										<tr>
											<td><?php echo htmlentities($conT_row['id']); ?></td>
											<td><?php echo htmlentities($conT_row['name']); ?></td>
											<td><?php echo htmlentities($conT_row['address']); ?></td>
											<td><?php echo htmlentities($conT_row['phn_no']); ?></td>
											<td><?php echo htmlentities($conT_row['email']); ?></td>
											<td><?php echo htmlentities(date('d/m/Y', strtotime($conT_row['reg_date']))); ?></td>
											<td><?php echo htmlentities($conT_row['status']); ?></td>
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

        <div id="ordersTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
            <h4 style="padding-left: 10px;"><b>Orders' Status-</b></h4><br>
			<div class="container">
				<div class="panel panel-default" id="runOrd">
					<div class="panel-heading"><h4><b>Pending Orders -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">	
							<table class="table table-striped" style="font-size:95%">
								<thead>
								<tr>
									<th>Order Id</th>
									<th>Consumer Id</th>
									<th>Consumer Name</th>
									<th>Order Date</th>
									<th>Order Time</th>
									<th>Amount</th>
									<th>Delivery Status</th>
								</tr>
								</thead>
								<tbody id="myTable">
									<?php
										if (!$pendingOrders) {
											?><strong>
												<?php echo htmlentities("No consumers to show!"); ?>
											</strong>
											<?php
										} else {
											foreach ($pendingOrders as $ordPenT_row) {
												?>
												<tr>
													<td><?php echo htmlentities($ordPenT_row['order_id']); ?></td> 
													<td><?php echo htmlentities($ordPenT_row['con_id']); ?></td> 
													<td><?php echo htmlentities($ordPenT_row['con_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordPenT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordPenT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordPenT_row['order_amount']); ?></td> 
													<td>
														<p data-placement="top" data-toggle="tooltip" title="Edit">
															<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" id='.$r[0].' onclick="return up_data_form(this.id)">
																<span class="glyphicon glyphicon-pencil"></span>
															</button>
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

				<div class="panel panel-default" id="delOrd">
					<div class="panel-heading"><h4><b>Out for Delivery Orders -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%">
								<thead>
									<tr>
										<th>Order Id</th>
										<th>Consumer Id</th>
										<th>Consumer Name</th>
										<th>Order Date</th>
										<th>Order Time</th>
										<th>Amount</th>
										<th>Delivery Status</th>
									</tr>
								</thead>
								<tbody id="com_ord">
									<?php
										if (!$runningOrders) {
											?><strong>
												<?php echo htmlentities("No consumers to show!"); ?>
											</strong>
											<?php
										} else {
											foreach ($runningOrders as $ordRunT_row) {
												?>
												<tr>
													<td><?php echo htmlentities($ordRunT_row['order_id']); ?></td> 
													<td><?php echo htmlentities($ordRunT_row['con_id']); ?></td> 
													<td><?php echo htmlentities($ordRunT_row['con_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordRunT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordRunT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordRunT_row['order_amount']); ?></td> 
													<td>
														<p data-placement="top" data-toggle="tooltip" title="Edit">
															<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" id='.$r[0].' onclick="return up_data_form(this.id)">
																<span class="glyphicon glyphicon-pencil"></span>
															</button>
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

				<div class="panel panel-default" id="delOrd">
					<div class="panel-heading"><h4><b>Delivered Orders -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped" style="font-size:95%">
								<thead>
									<tr>
										<th>Order Id</th>
										<th>Consumer Id</th>
										<th>Consumer Name</th>
										<th>Order Date</th>
										<th>Order Time</th>
										<th>Amount</th>
										<th>Delivery Status</th>
									</tr>
								</thead>
								<tbody id="com_ord">
									<?php
										if (!$deliveredOrders) {
											?><strong>
												<?php echo htmlentities("No consumers to show!"); ?>
											</strong>
											<?php
										} else {
											foreach ($deliveredOrders as $ordDelT_row) {
												?>
												<tr>
													<td><?php echo htmlentities($ordDelT_row['order_id']); ?></td> 
													<td><?php echo htmlentities($ordDelT_row['con_id']); ?></td> 
													<td><?php echo htmlentities($ordDelT_row['con_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordDelT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordDelT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordDelT_row['order_amount']); ?></td> 
													<td>
														<p data-placement="top" data-toggle="tooltip" title="Edit">
															<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" id='.$r[0].' onclick="return up_data_form(this.id)">
																<span class="glyphicon glyphicon-pencil"></span>
															</button>
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
          	<h4 style="padding-left: 10px;"><b>Complaints & Feedback -</b></h4>
		  	<div class="container" style="padding-top: 30px; height: 380px;">
				<div class="panel panel-default" style="border: none;">
					<div class="panel-heading"><h4><b>Complaints & Feedback (By Consumers) -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Sl no.</th>
										<th>Name</th>
										<th>Date</th>
										<th>Time</th>
										<th>Type</th>
										<th>Subject</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
								<?php
								if (mysqli_num_rows($feedT_result) == 0) {
									?><strong>
										<?php echo htmlentities("No Subjects to show!"); ?>
									</strong>
									<?php
								} else {
									while ($feedT_row = mysqli_fetch_assoc($feedT_result)) {
										?>
										<tr>
											<td><?php echo htmlentities(++$count); ?></td>
											<td><?php echo htmlentities($feedT_row['cus_name']); ?></td>
											<td><?php echo htmlentities(date('d/m/Y', strtotime($feedT_row['feed_date']))); ?></td>
											<td><?php echo htmlentities(date('H:i:s', strtotime($feedT_row['feed_time']))); ?></td>
											<td><?php echo htmlentities($feedT_row['feed_type']); ?></td>
											<td><?php echo htmlentities($feedT_row['feed_sub']); ?></td>
											<td><?php echo htmlentities($feedT_row['feed_des']); ?></td>
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

	<!-- -- Incorrect Password Modal -- -->
	<button onclick="showlogout()">Try Incorrect Password</button>

	<div id="overlay"></div>
	<div id="Logout">
		<p style="color: rgba(236, 12, 12, 0.908); padding-top: 10px;"><b>You've been logged out succesfully!</b></p>
		<button id="closeModalBtn" onclick="hidelogout()">&times</button>
	</div>
	<!-- -- Incorrect Password Modal Ends -- -->

    <!-- --- Footer Section --- -->
	<footer class="site-footer" style="background-color: black; height: 50px; display: flex; align-items: center; justify-content: center;">
		<h7 style="color: white;"><b>Online Gas Distribution System | Copyright © Pritviraj Keot & Hirokjyoti Kalita</b></h7>
	</footer>

	<!-- -- JS for Incorrect Password Modal -- -->
	<script>
        function showlogout() {
            document.getElementById('Logout').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function hidelogout() {
            document.getElementById('Logout').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>

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

    <script src="../assets/js/jquery.min.js"></script>
    <script src="''/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
mysqli_stmt_close($stmt);
mysqli_close($conn);
exit();
?>
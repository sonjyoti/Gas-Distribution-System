<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

    include 'includes/auth.php';
	include 'dashboardTab_logic.php';
	include 'refillTab_logic.php';
	include 'historyTab_logic.php';
	include 'ordersTab_logic.php';
	include 'feedbackTab_logic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consumer-Dashboard</title>
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
				<a class="navbar-brand" style="color: white; padding-left: 50px;"><b>CONSUMER DASHBOARD</b></a>
				<ul class="navbar-nav" style="list-style: none; display: flex; justify-content: flex-end;">
					<div class="button-container" style="padding-left: 1080px; padding-top: 10px;">
						<button style="height: 30px; width: 100px; background-color: green; border-radius: 4px; color: white; border: 1px solid black; display: flex; align-items: center; justify-content: center;" onmouseover="this.style.backgroundColor='rgba(255, 0, 0, 0.684)'" onmouseout="this.style.backgroundColor='green'">
							<a href="logout.php" style="color: white; text-decoration: none;"><b>Log-Out <i class="fa-solid fa-right-from-bracket"></i></b></a>
						</button>
					</div>
				</ul>
			</div>
		</nav>
	</header><br>
	
	<section style="padding-left: 130px; padding-top: 40px; padding-bottom: 80px;">
        <div class="tabs" style="width: 1250px;">
          <button class="tablinks" onclick="openTab('dashboard')" id="defaultOpen"><b>Dashboard</b></button>
          <button class="tablinks" onclick="openTab('orders')" id="defaultOpen"><b>Book-Orders</b></button>
          <button class="tablinks" onclick="openTab('refill')" id="defaultOpen"><b>Refills</b></button>
          <button class="tablinks" onclick="openTab('history')"><b>Order History</b></button>
          <button class="tablinks" onclick="openTab('feedback')"><b>Complaints/Feedback</b></button>
        </div>

        <div id="dashboardTab" class="tabPanel active" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Consumer Dashboard -</b></h4>
			<div class="panel panel-default" style="border: none; background-color: white;">
				<div class="panel-heading" style=" background-color: white;">
					<div class="panel-body" style=" background-color: white;">
						<div class="row">
				  			<div class="col-sm-6">
								<div class="table-responsive">  
									<table class="table  table-striped">
										<thead>
											<tr>
												<th colspan=2 class="text-center" style="background-color: green; color: white; border-radius: 5px;">Consumer Details</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Consumer ID : <?php echo htmlentities($con_id); ?></th>
												<td></td>
											</tr>
											<tr>
												<th>Consumer Name : <?php echo htmlentities($dashT_row['name']); ?></th>
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
									<table class="table table-striped">
										<thead>
											<tr>
												<th colspan=2 class="text-center" style="background-color: green; color: white; border-radius: 5px;">Linked Distributor Details</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Distributor ID : <?php echo htmlentities($dis_id); ?></th>
												<td></td>
											</tr>
											<tr>
												<th>Distributor Name : <?php echo htmlentities($dashT_row['dis_name']); ?></th>
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

        <div id="ordersTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
          <h4 style="padding-left: 10px;"><b>Book Orders -</b></h4>
		  	<div class="container"><br>
				<form onSubmit="return t_sub();" id="orderForm" method="post">
					<div class="form-group">
						<label><b>Terms & Conditions *</b></label>
						<div style="border: 1px solid #e5e5e5; height: 300px; overflow: auto; padding: 10px;">
							<p><i class="glyphicon glyphicon-chevron-right"></i> Current price for single gas-cylinder is <span class="text-success">&#x20B9;975.</span></p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Order cannot be canceled once you place order.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Prices may be change as per government rules.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> You cannot place order for more than one gas cylinder.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Once your order will deliver then and then you can place order for another refill.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Order will be delivered to registered address.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Order status update will be drop via SMS(Linked mobile no.) & Email(Linked email address).</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Order will be delivered with week, If not then you can write complain to us.</p>
							<p><i class="glyphicon glyphicon-chevron-right"></i> Product delivery is strictly on first come first served basis.</p>
						</div>
					</div>
						
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input id="co_cb" onChange="return chk(this);" type="checkbox" name="agree" value="agree"/> Agree with the terms and conditions
							</label>
						</div>
					</div>
						
					<div class="form-group">
						<button type="submit" id="submit" name="book" class="btn" style="background-color: green; color: white;" disabled>Confirm Order</button>				
					</div>
				</form>
				<?php if($submit) { ?>
					<p id="oc_msg" class="text-success">Order Confirmed.</p>
				<?php } ?>
			</div>
        </div>

        <div id="refillTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
            <h4 style="padding-left: 10px;"><b>Track Your Refiils -</b></h4><br>
			<div class="container">
				<div class="panel panel-default" id="runOrd">
					<div class="panel-heading"><h4><b>Pending Orders -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">	
							<table class="table table-striped" style="font-size:95%">
								<thead>
									<tr>
										<th>Order Id</th>
										<th>Distributor Id</th>
										<th>Distributor Name</th>
										<th>Order Date</th>
										<th>Order Time</th>
										<th>Amount</th>
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
													<td><?php echo htmlentities($ordPenT_row['dis_id']); ?></td> 
													<td><?php echo htmlentities($ordPenT_row['dis_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordPenT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordPenT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordPenT_row['order_amount']); ?>/-</td> 
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
			
				<div class="panel panel-default" id="runOrd">
					<div class="panel-heading"><h4><b>Out for delivery Orders -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">	
							<table class="table table-striped" style="font-size:95%">
								<thead>
									<tr>
										<th>Order Id</th>
										<th>Distributor Id</th>
										<th>Distributor Name</th>
										<th>Order Date</th>
										<th>Order Time</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody id="myTable">
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
													<td><?php echo htmlentities($ordRunT_row['dis_id']); ?></td> 
													<td><?php echo htmlentities($ordRunT_row['dis_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordRunT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordRunT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordRunT_row['order_amount']); ?>/-</td> 
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
										<th>Distributor Id</th>
										<th>Distributor Name</th>
										<th>Order Date</th>
										<th>Order Time</th>
										<th>Amount</th>
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
													<td><?php echo htmlentities($ordDelT_row['dis_id']); ?></td> 
													<td><?php echo htmlentities($ordDelT_row['dis_name']); ?></td>
													<td><?php echo htmlentities(date('d/m/Y', strtotime($ordDelT_row['order_date']))); ?></td>
													<td><?php echo htmlentities($ordDelT_row['order_time']); ?></td>
													<td><?php echo htmlentities($ordDelT_row['order_amount']); ?>/-</td> 
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

        <div id="historyTab" class="tabPanel" style="background-color: white; width: 1250px; padding-top: 30px;">
            <h4 style="padding-left: 10px;"><b>History -</b></h4>
			<div class="container" style="padding-top: 30px; height: 500px;">
			<div class="panel panel-default" id="runOrd">
				<div class="panel-heading"><h4><b> Orders History -</b></h4></div>
					<div class="panel-body">
						<div class="table-responsive">	
							<table class="table table-striped" style="font-size:95%">
							<thead>
								<tr>
									<th>Order Id</th>
									<th>Date of order placed</th>
									<th>Time of order placed</th>
									<th>Payable amount</th>
									<th>Order Status</th>
								</tr>
							</thead>
							<tbody>
							<?php
							if (mysqli_num_rows($hisT_result) == 0) {
								?><strong>
									<?php echo htmlentities("No Students to show!"); ?>
								</strong>
								<?php
							} else {
								while ($hisT_row = mysqli_fetch_assoc($hisT_result)) {
									?>
									<tr>
										<th>
											<?php echo htmlentities($hisT_row['order_id']); ?>
										</th>
										<th>
											<?php echo htmlentities($hisT_row['order_date']); ?>
										</th>
										<th>
											<?php echo htmlentities($hisT_row['order_time']); ?>
										</th>
										<th>
											<?php echo htmlentities($hisT_row['order_amount']); ?>
										</th>
										<th>
											<?php 
												if ($hisT_row['order_status'] === "Ordered") {
													echo htmlentities("Order Placed"); 
												} elseif ($hisT_row['order_status'] === "Running") {
													echo htmlentities("Out for Delivery");
												}
												elseif ($hisT_row['order_status'] === "Delivered") {
													echo htmlentities("Delivered");
												}
											?>
										</th>
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
          <h4 style="padding-left: 10px;"><b>Complaints/Feedback -</b></h4><br>
		  <div class="container">
			<div class="panel panel-default" style="border: none;">
				<div class="panel-body">
					<form method="post">
						<div class="form-group row">
							<label for="type" class="col-sm-2 col-form-label"><b>Type:</b></label>
								<div class="col-sm-10">
									<label class="radio-inline"><input type="radio" name="type" value="Feedback" checked required><b>Feedback</b></label>
									<label class="radio-inline"><input type="radio" name="type" value="Complaint"><b>Complaint</b></label>
								</div>
						</div>
							
						<div class="form-group row">
							<label for="sub" class="col-sm-2 col-form-label"><b>Subject:</b></label>
							<div class="col-sm-10">
								<select class="form-control" id="f_sub" name="subject" onchange="other_show(this.value)">
									<option value="Product related">Product related</option>
									<option value="Website related">Website related</option>
									<option value="Delivery related">Delivery related</option>
									<option value="Other">-Other-</option>
								</select><br>
							</div>
						</div>

						<div class="form-group row">
							<label for="sub" class="col-sm-2 col-form-label"><b>Subject Title:</b></label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3" id="msg" name="sub_tit" placeholder="Subject title..." maxlength=30 required></textarea>
							</div>
						</div>
							
						<div class="form-group row">
							<label for="msg" class="col-sm-2 col-form-label"><b>Message:</b></label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3" id="msg" name="msg" placeholder="Your message..." maxlength=300 required></textarea>
							</div>
						</div>
							
						<div class="form-group row">
							<div class="col-sm-12" style="padding-left: 205px;">
							<button type="submit" class="btn" name="submitFeedback" style="background-color: green; color: white; border: none; height:40px; width: 920px;"><b>Submit your response</b></button>
							</div>
						</div>
					</form>
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
  
			for (i = 0; i < tablinks.length; i++) {
				if (tablinks[i].id === tabName) {
					tabLinks[i].classList.add('active');
				}
			}
		}
	</script>

	<script>
		function chk(co_cb)
		{
			if(co_cb.checked==false)
			{
				document.getElementById("submit").disabled=true;
			}
			else if(co_cb.checked==true)
			{
				document.getElementById("submit").disabled=false;
			}
			return false;
		}

		function t_sub()
		{
			$.ajax({
				type: "POST",
				url: "",
				data: "",
				beforeSend: function() { 
					document.getElementById("preload").style="display:inline;";
				},
				success: function(html)
				{
					document.getElementById("preload").style="display:none;";
					$("#oc_msg").html(html);								
				}
			});
			return true;
		}
	</script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Distributor</title>
	<link rel="icon" href="../assets/img/logo.jpg" type="image/x-icon"> 
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        .container {
        background-color: #fff;
        height: 550px;
        width: 700px;
        padding: 20px;
        margin-top: 8%;
        margin-bottom: 5%;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button{
            color: white;
            width: 150px;
            border: none;
        }
    </style>
</head>
<body style="background-color: grey;">
    <div class="container" style="padding-top: 30px;">
    
        <p style="text-align: center;"><b>Distributor's Details -</b></p><hr>
        <a href="admin-dashboard.php"><button type="button" class="close-button" style="position: absolute; top: 30px; right: 30px; background: grey; border: none; font-size: 30px; width:50px; border-radius: 50px; cursor: pointer;"><b>&times;</b></button></a>
        <form action="#" method="post">
            <label for="consumer_id"><b>Distributor ID:</b></label>
            <input type="text" id="distributor_id" name="distributor_id" required>

            <label for="name"><b>Name:</b></label>
            <input type="text" id="name" name="name" required>

            <label for="address"><b>Address:</b></label>
            <input type="text" id="address" name="address" required>

            <label for="city"><b>City:</b></label>
            <input type="text" id="city" name="city" required>

            <label for="mobile"><b>Mobile No.:</b></label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" required>

            <!-- <label for="status"><b>Account Status:</b></label>
            <select id="status" name="status" style="height: 40px;" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select><br>
            <input type="submit" value="Update" style="background-color: green; color: white;"> -->
        </form>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="''/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
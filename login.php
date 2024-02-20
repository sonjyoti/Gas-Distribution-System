<?php 
  include 'includes/auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/popup.css">
	  <link rel="icon" href="assets/img/logo.jpg" type="image/png">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
      #incorrectPasswordModal {
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
    <!-- ---- Navbar Section starts ---- -->
    <?php 
    include 'includes/navbar.php';
    ?>
    <!-- ---- Navbar Section ends ---- -->
    
    <!-- ---- Login Form ---- -->
    <h3 style="padding-left: 80px; padding-top: 50px;"><b>Login Page -</b></h3>

    <section style="padding-left: 480px; padding-top: 80px; padding-bottom: 150px; ">
      <div class="tabs" style="width: 600px; background-color: rgba(0, 0, 0, 0.622); color: white; border-radius: 8px 8px 0 0;">
        <button class="tablinks" onclick="openTab('consumer')" id="defaultOpen" style="background-color: rgba(0, 0, 0, 0.023);"><b>Consumer</b></button>
        <button class="tablinks" onclick="openTab('distributor')" style="background-color: rgba(0, 0, 0, 0.023);"><b>Distributor</b></button>
        <button class="tablinks" onclick="openTab('admin')" style="background-color: rgba(0, 0, 0, 0.023);"><b>Admin</b></button>
      </div>

      <div id="consumerTab" class="tabPanel active" style="background-color: white; width: 600px; padding-top: 30px; border-radius: 0 0 8px 8px;">
        <h4 style="padding-left: 10px;"><b>Consumer Login -</b></h4>
          <form style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " method="post" action="consumer_login.php">
            <label class="control-label" for="password-input" ><b>Consumer ID: </b></label>
            <input type="text" name="cid">

            <label class="control-label" for="password-input" ><b>Password: </b></label>
            <input type="password" name="cpwd">

            <div class="remember-forgot text-center" style="font-size: 14px;">
              <a href="password-recovery.php"><b>Forgot Password?</b></a>
            </div><br>
            
            <button type="submit" name="con_submit" style="background-color: green; color: white; border-radius: 6px;"><b>Login as Consumer</b></button>
            <div class="login-register text-center" style="font-size: 14px;">
              <p><b>Haven't registered yet? </b><a href="register.php" class="register-link"><b>Register Here</b></a></p>
            </div>
          </form>
      </div>
      <div id="distributorTab" class="tabPanel" style="background-color: white; width: 600px; padding-top: 30px; border-radius: 0 0 8px 8px;">
        <h4 style="padding-left: 10px;"><b>Distributor Login -</b></h4>
          <form style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " method="post" action="distributor_login.php">

              <label class="control-label" for="password-input" ><b>Distributor ID: </b></label>
              <input type="text" name="did">

              <label class="control-label" for="password-input" ><b>Password: </b></label>
              <input type="password" name="dpwd">

              <div class="remember-forgot text-center" style="font-size: 14px;">
                <a href="password-recovery.php"><b>Forgot Password?</b></a>
              </div><br>
              
              <button type="submit" name="dis_submit" style="background-color: green; color: white; border-radius: 6px;"><b>Login as Distributor</b></button>
              <div class="login-register text-center" style="font-size: 14px;">
                <p><b>Haven't registered yet? </b><a href="register.php" class="register-link"><b>Register Here</b></a></p>
              </div>
          </form>
      </div>
      <div id="adminTab" class="tabPanel" style="background-color: white; width: 600px; padding-top: 30px; border-radius: 0 0 8px 8px;"><br>
        <h4 style="padding-left: 10px;"><b>Admin Login -</b></h4><br>
          <form style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; " method="post" action="admin_login.php">
              
            <label class="control-label" for="password-input" ><b>Admin ID: </b></label>
            <input type="text" name="aid">

            <label class="control-label" for="password-input" ><b>Password: </b></label>
            <input type="password" name="apwd">
            
            <button type="submit" name="ad_submit" style="background-color: green; color: white; border-radius: 6px;"><b>Login as Admin</b></button>
          </form><br>
      </div>
    </div>
  </section>

  <!-- -- Incorrect Password Modal -- -->
  <button onclick="showIncorrectPasswordModal()">Try Incorrect Password</button>

  <div id="overlay"></div>
    <div id="incorrectPasswordModal">
      <p style="color: rgba(236, 12, 12, 0.908); padding-top: 10px;"><b>Incorrect Password! Try Again</b></p>
      <p style="color: green; padding-top: 10px;"><b>You've been successfully logged in!</b></p>
      <button id="closeModalBtn" onclick="hideIncorrectPasswordModal()">&times</button>
    </div>
  <!-- -- Incorrect Password Modal Ends -- -->

  <!-- --- Footer Section --- -->
  <?php 
    include 'includes/footer.php';
  ?>
  <!-- --- Footer Section --- -->

    <!-- -- JS for Incorrect Password Modal -- -->
      <script>
        function showIncorrectPasswordModal() {
            document.getElementById('incorrectPasswordModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function hideIncorrectPasswordModal() {
            document.getElementById('incorrectPasswordModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
      </script>

    <!-- -- JS for Tabs -- -->
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
</body>
</html>





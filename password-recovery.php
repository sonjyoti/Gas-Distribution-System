<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password-Recovery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="icon" href="assets/img/logo.jpg" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
   <!-- ---- Navbar Section starts ---- -->
   <?php 
    include 'includes/navbar.php';
    ?>
    <!-- ---- Navbar Section ends ---- -->


  <!-- ---- Login Form ---- -->
  <section style="padding-left: 450px; padding-top: 80px; padding-bottom: 80px;">
    <div class="tabs" style="width: 600px;">
      <button class="tablinks" onclick="openTab('consumer')" id="defaultOpen"><b>Consumer</b></button>
      <button class="tablinks" onclick="openTab('distributor')"><b>Distributor</b></button>
    </div>

    <div id="consumerTab" class="tabPanel active" style="background-color: white; width: 600px; padding-top: 30px;">
      <h4 style="padding-left: 10px;"><b>Reset Password (Consumer) -</b></h4>
      <form style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; ">
        <label class="control-label" for="password-input" ><b>Consumer ID: </b></label>
        <input type="text">

        <label class="control-label" for="text-input" ><b>Registered Mobile No.: </b></label>
        <input type="text" maxlength=10 required />

        <label class="control-label" for="password-input" ><b>Password: </b><i><b>(* Please set a password you haven't used before.)</b></i></label>
        <input type="password" required maxlength=16/>
            
        <label class="control-label" for="password-input" ><b>Confirm Password: </b></label>
        <input type="password" required maxlength=16/>

        <button type="submit" style="background-color: green; color: white;"><b>RESET PASSWORD</b></button>
        <div class="login-register text-center" style="font-size: 14px;">
          <p><b>Ready to Login? </b><a href="login.html" class="register-link"><b>Login Here</b></a></p>
        </div>
    </form>
    </div>
    <div id="distributorTab" class="tabPanel" style="background-color: white; width: 600px; padding-top: 30px;">
      <h4 style="padding-left: 10px;"><b>Reset Password (Distributor) -</b></h4>
        <form style="padding-top: 20px; padding-left: 50px; padding-right: 50px; padding-bottom: 60px; ">
            <label class="control-label" for="password-input" ><b>Distributor ID: </b></label>
            <input type="text">

            <label class="control-label" for="text-input" ><b>Registered Mobile No.: </b></label>
            <input type="text" maxlength=10 required />

            <label class="control-label" for="password-input" ><b>Password: </b><i><b>(* Please set a password you haven't used before.)</b></i></label>
            <input type="password" required maxlength=16/>
                
            <label class="control-label" for="password-input" ><b>Confirm Password: </b></label>
            <input type="password" required maxlength=16/>

            <button type="submit" style="background-color: green; color: white;"><b>RESET PASSWORD</b></button>
            <div class="login-register text-center" style="font-size: 14px;">
              <p><b>Ready to Login? </b><a href="login.html" class="register-link"><b>Login Here</b></a></p>
            </div>
        </form>
      </div>
    </div>
  </section>

  <!-- --- Footer Section --- -->
  <?php 
    include 'includes/footer.php';
  ?>
  <!-- --- Footer Section --- -->

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

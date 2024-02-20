<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/main.css">
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
    
    <!-- ---- Register Section ---- -->
    <h3 style="padding-left: 60px; padding-top: 50px;"><b>Registration Page -</b></h3>

   <section style="padding-left: 160px; padding-top: 70px; padding-bottom: 150px;">
    <div class="tabs"  style="width: 1200px; padding-left: 20px; background-color: rgba(0, 0, 0, 0.622); color: white; border-radius: 8px 8px 0 0;">
        <button class="tablinks" onclick="openTab(event, 'consumerTab')" id="defaultOpen" style="background-color: rgba(0, 0, 0, 0.023);"><b>New Consumer</b></button>
        <button class="tablinks" onclick="openTab(event, 'distributorTab')" style="background-color: rgba(0, 0, 0, 0);"><b>New Distributor</b></button>
    </div>

    <div id="consumerTab" class="tabcontent" style="background-color: white; width: 1200px; padding-left: 100px; padding-top: 50px; padding-bottom: 80px; border-radius: 0 0 8px 8px;">
        <h4><b>New Consumer Registration -</b></h4>
        <p class='text-success' style="width: 1000px; color: #0066b2;"><b>Please ensure you give a correct mobile number that mapped with your Customer ID as all future notifications will be sent to this mobile number only.</b></p><br>
        <form action="consumer_registration.php" method="post" id="conRegistrationForm" style="width: 1000px;">
            <div class="form-group">
                <label class="control-label" for="text-input"><b>Consumer Name: </b></label>
                <input class="form-control" type="text" name="cname" id="cname" maxlength=20 required />
            </div>
            <div class="form-group">
                <label class="control-label" for="textarea-input"><b>Address: </b></label>
                <textarea class="form-control" name="cadd" id="cadd" maxlength=100 required></textarea>
            </div>
            <div class="form-group">
                <label for="inputState"><b>City: </b></label>
                <select id="dcity" name="dcity" class="form-control" required>
                    <option value='Guwahati'>Guwahati</option>
                    <option value='Dibrugarh'>Dibrugarh</option>
                    <option value='Boko'>Boko</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputZip"><b>Pin-Code: </b></label>
                <input type="text" class="form-control" id="cpin" name="cpin" pattern=".{6,}" title="Six Digits" maxlength=6 required>
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input"><b>Email: </b></label>
                <input class="form-control" type="email" name="cemail" id="cemail" maxlength=30 required />
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input" ><b>Mobile: </b><small> (Without Country Code & Only 10 Digits.)</small></label>
                <input class="form-control" type="text" name="cphone" id="cphone" pattern="[1-9]{1}[0-9]{9}" title="At least Ten Digits" maxlength=10 required/>         
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input" ><b>Password Input: </b></label><small> (Must contain at least 6 or more characters)</small>
                <input class="form-control" type="password" name="cpassword" id="password" maxlength=16 pattern=".{6,}" title="Six or more characters" required/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input" ><b>Confirm Password: </b></label> 
                <input class="form-control" type="password" name="ccpassword" id="confirmPassword" maxlength=16 required />
            </div>
            <p id='password_message' class="text-danger"></p>
            <div class="form-group">
                <button type="submit" name="con_submit" style="background-color: darkgreen; color: white; border-radius: 6px; width: 1000px;"><b>Submit</b></button>
            </div>
        </form>
    </div>


    <div id="distributorTab" class="tabcontent" style="display: none; background-color: white; width: 1200px; padding-left: 100px; padding-top: 50px; padding-bottom: 80px; border-radius: 0 0 8px 8px;">
        <h4><b>New Distributor Registration -</b></h4>
        <p class='text-success' style="color: #0066b2;"><b>After this process we will verify you.</b></p><br>
        <form action="distributor_registration.php" method="post" style="width: 1000px;" id="disRegistrationForm">
            <div class="form-group">
                <label class="control-label" for="text-input"><b>Distributor Name: </b></label>
                <input class="form-control" type="text" name="dname" id="dname" maxlength=20 required />
            </div>
            <div class="form-group">
                <label class="control-label" for="textarea-input"><b>Address: </b></label>
                <textarea class="form-control" name="dadd" id="dadd" maxlength=100 required></textarea>
            </div>
            <div class="form-group">
                <label for="inputState"><b>City: </b></label>
                <select id="dcity" name="dcity" class="form-control" required>
                    <option value='Guwahati'>Guwahati</option>
                    <option value='Dibrugarh'>Dibrugarh</option>
                    <option value='Boko'>Boko</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputZip"><b>Pin-Code: </b></label>
                <input type="text" class="form-control" id="dpin" name="dpin" pattern=".{6,}" title="Six Digits" maxlength=6 required>
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input"><b>Email: </b></label>
                <input class="form-control" type="email" name="demail" id="demail" maxlength=30 required />
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input" ><b>Mobile: </b><small> (Without Country Code & Only 10 Digits.)</small></label>
                <input class="form-control" type="text" name="dmno" id="dmno" pattern="[1-9]{1}[0-9]{9}" title="At least Ten Digits" maxlength=10 required/>         
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input" ><b>Password Input: </b></label><small> (Must contain at least 6 or more characters)</small>
                <input class="form-control" type="password" name="dpass" id="password" maxlength=16 pattern=".{6,}" title="Six or more characters" required/>
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input" ><b>Confirm Password: </b></label> 
                <input class="form-control" type="password" name="dcpass" id="confirmpassword" maxlength=16 required />
            </div>
            <p id='password_message' class="text-danger"></p>
            <div class="form-group">
                <button type="submit" name="dis_submit" style="background-color: darkgreen; color: white; border-radius: 6px; width: 1000px;"><b>Submit</b></button>
            </div>
        </form>
    </div>
    </section>

    <!-- -- Incorrect Password Modal -- -->
    <button onclick="showIncorrectPasswordModal()">Try Incorrect Password</button>

    <div id="overlay"></div>
    <div id="incorrectPasswordModal">
        <p style="color: green; padding-top: 10px;"><b>You've been registered successfully!</b></p>
        <button id="closeModalBtn" onclick="hideIncorrectPasswordModal()">&times</button>
    </div>
    <!-- -- Incorrect Password Modal Ends -- -->

    <!-- --- Footer Section --- -->
    <?php 
        include 'includes/footer.php';
    ?>
    <!-- --- Footer Section ends --- -->

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

    <script>
        document.getElementById("defaultOpen").click();
    
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <script>
        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirmPassword");
        const passwordMessage = document.getElementById("password_message");

        passwordInput.addEventListener("keyup", validatePassword);
        confirmPasswordInput.addEventListener("keyup", validatePassword);

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            if (password === confirmPassword) {
                passwordMessage.textContent = "Passwords match";
                passwordMessage.style.color = "green";
            } else {
                passwordMessage.textContent = "Passwords do not match";
                passwordMessage.style.color = "red";
            }
        }

        document.getElementById("conRegistrationForm").addEventListener("con_submit", function(event) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                event.preventDefault(); 
                alert("Password and Confirm Password do not match. Please try again.");
            }
        });

        document.getElementById("disRegistrationForm").addEventListener("dis_submit", function(event) {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            if (password !== confirmPassword) {
                event.preventDefault(); 
                alert("Password and Confirm Password do not match. Please try again.");
            }
        });
    </script>
</body>
</html>
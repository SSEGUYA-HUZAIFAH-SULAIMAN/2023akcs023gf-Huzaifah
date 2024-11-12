<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: logIn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logIn.php");
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Disease Checker System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #8dfff5;
            background-blend-mode: #8dfff5;
        }
        .header {
            background-color: #51009c;
            color: rgb(255, 255, 255);
            padding: 5px 0;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            
        }
        .container {
            margin-top: 10px;
           
        }
        .card {
            margin-bottom: 10px;
        }
    </style>
</head>
<body background="ttt.jpeg" >

<div class="header">
    <h1>Disease Checker System</h1>
    <p>Your health at your fingertips</p>
</div>

	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>

<div class="container">
    <!-- User Authentication Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Authentication</h5>
                </div>
                <div class="card-body text-center">
                    <p>Please click the button to confirm that your not a robot.</p>
                    <button class="btn btn-primary">Authenticate</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Health Monitoring Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Health Metrics</h5>
                </div>
                <div class="card-body">
                    <form>
                     <!--   <div class="form-group">  -->
                        <label for="Age Range">Age Range</label>
                        <select class="form-control" id="bloodType">
                            <option value="">Select your Age Range</option>
                            <option value="10 - 15">10 - 15</option>
                            <option value="15 - 25">15 - 25</option>
                            <option value="25 - 35">25 - 35</option>
                            <option value="35 - 50">35 - 50</option>
                            <option value="50 - Above">50 - Above</option>

                        </select>
                         
                        <div class="form-group">
                            <label for="bloodType">Blood Type</label>
                            <select class="form-control" id="bloodType">
                                <option value="">Select your blood type</option>
                                <option value="O">O</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>

                            </select>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    

      <!-- Symptom Checker Section -->
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Symptom Checker</h5>
                </div>
                <div class="card-body">
                    <form>
                        <h6>Select Symptoms:</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fever" id="symptom1">
                            <label class="form-check-label" for="symptom1">Fever</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cough" id="symptom2">
                            <label class="form-check-label" for="symptom2">Cough</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fatigue" id="symptom3">
                            <label class="form-check-label" for="symptom3">Fatigue</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Shortness of Breath" id="symptom4">
                            <label class="form-check-label" for="symptom4">Shortness of Breath</label>
                        </div>
          
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="OTHERS" id="symptom9">
                            <label class="form-check-label" for="symptom8">OTHERS</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Check Diseases</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Disease Identification Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Potential Diseases</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <a href='LogOut.php' ><strong style="color: red;"> LOG OUT</strong>     </a>     
            </div>
        </div>
    </div>
</div>



</body>
</html>

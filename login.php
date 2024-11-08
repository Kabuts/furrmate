<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'includes/layout/head.php'; ?>
    
    <!-- Toggle Password CSS -->
    <link rel="stylesheet" href="css/eye-icon.css">

    <!-- Form CSS -->
    <link rel="stylesheet" href="css/forms.css">
    
    <!-- Title Name -->
    <title>FurrMate - Login</title>
    
</head>

<body>
    
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #6e4d36;">
                <div class="featured-image mb-3">
                    <img src="img/login.png" class="img-fluid" style="width: 300px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Welcome BARK!</p>
            </div> 

            <!--------------------------- Right Box ---------------------------->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                        <div class="header-text mb-4 text-center">
                            <a href="index.php" class="d-flex justify-content-center text-decoration-none mb-2">
                                <i class="fa-solid fa-paw fa-3x" style="color: #6e4d36;"></i>
                            </a>
                            <h2>Login to FurrMate</h2>
                            <p>We are happy to have you back.</p>
                        </div>
                        
                        <!-- Login Form -->
                        <form action="home.php" method="post" needs-validation>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control form-control-lg bg-light fs-6" name="email" id="email" placeholder="Email address" required>
                                <label for="email" class="text-secondary">
                                    <i class="fa-solid fa-envelope mx-1"></i> 
                                    Email address
                                </label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" id="password" placeholder="Password" required>
                                <i class="fa-solid fa-eye toggle-password text-secondary mx-1" id="eye"></i>
                                <label for="password" class="text-secondary">
                                    <i class="fa-solid fa-lock mx-1"></i>
                                    Password
                                </label>
                            </div>
                            <div class="input-group mb-5 d-flex justify-content-between">
                                <div class="forgot">
                                    <small><a href="#" class="text-decoration-none" style="color: #7D5A50;">Forgot Password?</a></small>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <button class="btn btn-lg w-100 fs-6 text-white" id="loginBtn" style="background-color: #6e4d36;">Login</button>
                            </div>
                            <div class="row">
                                <small>Don't have account? <a href="signup.php" class="text-decoration-none fw-medium" style="color: #6e4d36;">Sign Up</a></small>
                            </div>
                        </form>
                        <!-- Login Form Ends  -->

                </div>           
            </div> 
            <!--------------------------- Right Box Ends ---------------------------->    

        </div>
        <!--------------------------- Login Container Ends ---------------------------->

    </div>
    <!----------------------- Main Container -------------------------->





    <!-- JAVASCRIPT -->
    <script src="js/main.js"></script>

</body>
</html>



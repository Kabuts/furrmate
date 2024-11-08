<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'includes/layout/head.php'; ?>
    
    <!-- TOGGLE PASSWORD CSS -->
    <link rel="stylesheet" href="css/eye-icon.css">

    <!-- FORMS CSS -->
    <link rel="stylesheet" href="css/forms.css">
    
    <!-- TITLE NAME -->
    <title>FurrMate - Sign Up</title>
    
</head>

<body>
    <!----------------------- MAIN CONTAINER -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- SIGN UP CONTAINER -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!-------------------------- RIGHT BOX ---------------------------->
        
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                        <div class="header-text mb-4 text-center">
                            <a href="index.php" class="d-flex justify-content-center text-decoration-none mb-2"><i class="fa-solid fa-paw fa-3x" style="color: #6e4d36;"></i></a>
                            <h2>Create an account</h2>
                            <p>Join our website</p>
                        </div>
                        
                        <!-- SIGN UP FORMS -->
                        <form action="login.php" method="post" needs-validation>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" name="full_name" id="fullName" placeholder="Full Name" required>
                                <label for="full_name" class="text-secondary">
                                    <i class="fa-solid fa-user mx-1"></i> 
                                    Full Name
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control form-control-lg bg-light fs-6" name="email_address" id="email" placeholder="Email address" required>
                                <label for="email_address" class="text-secondary">
                                    <i class="fa-solid fa-envelope mx-1"></i> 
                                    Email address
                                </label>
                            </div>
                            <div class="form-floating  mb-3">
                                <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" id="password" placeholder="Password" required>
                                <i class="fa-solid fa-eye toggle-password text-secondary mx-1" id="eye"></i>
                                <label for="password" class="text-secondary">
                                    <i class="fa-solid fa-lock mx-1"></i>
                                    Password
                                </label>
                            </div>
                            <div class="form-floating  mb-1">
                                <input type="password" class="form-control form-control-lg bg-light fs-6" name="confirm_password" id="confirmPassword" placeholder="Password" required>

                                <label for="confirm_password" class="text-secondary">
                                    <i class="fa-solid fa-lock mx-1"></i>
                                    Confirm Password
                                </label>
                            </div>
                            <div class="input-group mb-5 d-flex justify-content-start">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="agreeTerms" name="agreeTerms" required>
                                    <label for="agreeTerms" class="form-check-label text-secondary"><small>I agree to the <a href="terms-and-conditions.php" target="_blank">Terms and Conditions</a></small></label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <button class="btn btn-lg w-100 fs-6 text-white" style="background-color: #6e4d36;" id="signUpBtn">Sign Up</button>
                            </div>
                            <div class="row">
                                <small>Already has an account? <a href="login.php" class="text-decoration-none fw-medium" style="color: #6e4d36;">Log In</a></small>
                            </div>
                        </form>
                        <!-- SIGN UP FORM END  -->

                </div>
            </div> 

            <!--------------------------- LEFT BOX ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #6e4d36;">
                <div class="featured-image mb-3">
                    <img src="img/signup-img.png" class="img-fluid" style="width: 300px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Join Our PurrMate</p>
            </div> 

        </div>
    </div>









    <!-- JAVASCRIPT -->
    <script src="js/main.js"></script>

</body>
</html>



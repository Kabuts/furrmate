<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include 'includes/layout/head.php'; ?>
    
    <!-- Home CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="css/navbar.css">

    <!-- Title Name -->
    <title>FurrMate - Social Media For Your Pet</title>

</head>
<body> 

        <!-- Navbar -->
        <?php include 'includes/layout/navbar.php'; ?>

        <!-- Carousel Banner  -->
        <div id="bannerIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#bannerIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">

                </button>
                <button type="button" data-bs-target="#bannerIndicators" data-bs-slide-to="1" aria-label="Slide 2">

                </button>
                <button type="button" data-bs-target="#bannerIndicators" data-bs-slide-to="2" aria-label="Slide 3">

                </button>
                <button type="button" data-bs-target="#bannerIndicators" data-bs-slide-to="3" aria-label="Slide 4">

                </button>
            </div>

            <!-- Image Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/img1.jpg" class="d-block w-100" alt="banner-logo">
                        <div class="carousel-caption">
                            <h5>The <span class="p-2">Purrfect</span> Social Platform!</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <p><a href="about.php" class="btn rounded-3">Learn More</a></p>
                        </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/img2.jpg" class="d-block w-100" alt="banner-logo">
                        <div class="carousel-caption">
                            <h5><span class="p-2">Connect</span>. <span class="p-2">Share</span>. & <span class="p-2">Play</span> with Furry Friends.</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                            <p><a href="about.php" class="btn rounded-3">Learn More</a></p>
                        </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/img3.jpg" class="d-block w-100" alt="banner-logo">
                        <div class="carousel-caption">
                            <h5>Where <span class="p-2">Meows</span> and <span class="p-2">Woofs</span> Connect</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                            <p><a href="about.php" class="btn rounded-3">Learn More</a></p>
                        </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/img4.jpg" class="d-block w-100" alt="banner-logo">
                        <div class="carousel-caption">
                            <h5><span class="p-2">Furry</span> Friends. <span class="p-2">Forever</span> Friends</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                            <p><a href="about.php" class="btn rounded-3">Learn More</a></p>
                        </div>
                </div>
            </div>
            <!-- Image Slides Ends -->

            <!-- Previous Button -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button> -->

            <!-- Next Button -->
            <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->

        </div>

        <!-- Auto Slider Image -->
        <main>
            <div class="slider" 
            style="
                --width: 90px;
                --height: 30px;
                --quantity: 10;"
            >
            
                <div class="list">
                    <div class="item" style="--position: 1"><img src="img/logo-slider/logo-1.png" alt=""></div>
                    <div class="item" style="--position: 2"><img src="img/logo-slider/logo-2.png" alt=""></div>
                    <div class="item" style="--position: 3"><img src="img/logo-slider/logo-3.png" alt=""></div>
                    <div class="item" style="--position: 4"><img src="img/logo-slider/logo-4.png" alt=""></div>
                    <div class="item" style="--position: 5"><img src="img/logo-slider/logo-5.png" alt=""></div>
                    <div class="item" style="--position: 6"><img src="img/logo-slider/logo-6.png" alt=""></div>
                    <div class="item" style="--position: 7"><img src="img/logo-slider/logo-1.png" alt=""></div>
                    <div class="item" style="--position: 8"><img src="img/logo-slider/logo-2.png" alt=""></div>
                    <div class="item" style="--position: 9"><img src="img/logo-slider/logo-3.png" alt=""></div>
                    <div class="item" style="--position: 10"><img src="img/logo-slider/logo-4.png" alt=""></div>
                </div>
            </div>

            <div class="container-fluid">
                <h5 class="text-end text-uppercase mt-2 mb-2 fw-bold">
                    <a href="#" class="slider-link">View Pet Profiles <i class="fa-solid fa-arrow-right"></i></a>
                </h5>
            </div>
            
            <div class="slider" reverse="true">
                <div class="list">
                    <div class="item" style="--position: 1">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-1.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 2">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-2.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 3">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-3.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 4">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-4.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 5">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-5.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 6">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-6.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 7">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-7.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 8">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-8.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 9">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-9.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                    <div class="item" style="--position: 10">
                        <!-- Card Profile -->
                        <div class="card rounded-5 border-0">
                            <!-- Profile Link -->
                            <a href="#" class="profile-link" id="profile-link">
                                <img src="img/slide/slide-10.jpg" class="rounded-5 rounded-bottom-0" alt="">
                                    <div class="card-img-overlay">
                                        <p>Siberian, Husky <i class="fa-solid fa-certificate" style="color: #2ea4ff;"></i></p>
                                    </div>
                                    <div class="card-footer p-1 text-center">
                                        View Profile
                                    </div>
                            </a>
                            <!-- Profile Link -->
                        </div>
                        <!-- Card Profile Ends -->
                    </div>
                </div>
            </div>
        </main>
        <!-- Auto Slider Image Ends -->
        
        <!-- About Us Section -->
        <section id="about" class="about section-padding"> 
            <div class="container">
                    <!-- Card -->
                    <div class="card border-0 rounded-5 box-area" style="height: 500px; background-color: #E3CAA5;">
                        <!-- Rows -->
                        <div class="row box-area">
                            <!-- Left Box -->
                            <div class="col-lg-6 col-md-12 col-12 left-box">
                                <div class="about-img">
                                    <img 
                                         src="img/about.jpg" 
                                         alt="Dog Image" 
                                         class="img-fluid rounded-5" 
                                        >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 ps-lg-5 right-box">
                                <div class="about-text py-4">
                                    <h1 class="heading-text text-uppercase fw-bold mb-3">About Us</h1>
                                    <h2 class="fw-bold text-justify mb-2" style="color: #6e4d36;"><span class="text-uppercase" style="color: #E48F45; letter-spacing: 2px;">FurrMate:</span> A Pet Social Platform</h2>
                                    <p class="mb-4">
                                        <span>FurrMate</span> is a unique social media platform designed exclusively for pet lovers in the Philippines. It offers a secure and authentic space for users to connect with like-minded individuals, share heartwarming pet stories, and, discover personalized recommendations. By rigorously verifying user identities and pet documents, Furrmate ensures a genuine and trustworthy community. Whether you're seeking advice from experienced pet owners, finding the perfect playmate for your furry friend, or simply sharing adorable moments, Furrmate has you covered.
                                    </p>
                                    <a href="about.php" class="aboutBtn btn rounded-3 d-flex justify-content-center">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Rows -->
                    </div>
                    <!-- Card Ends -->
            </div>
            
        </section>
        <!-- About Section Ends -->

        <!-- Features Section -->
        <section id="feature" class="feature section-padding" style="background-color: #6e4d36;">
            <div class="container">
            <h1 class="fw-bold text-uppercase">Features</h1>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2 style="color: #E48F45; font-weight: 700;">PAWsitively Connectivity</h2>
                        <p class="lead" style="color: #E3CAA5; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                        <p class="lead" style="color: #E3CAA5; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                    </div>
                    <div class="col-md">
                        <img src="img/feature/feature-1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="feature" class="feature section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/feature/feature-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md p-5">
                        <h2 style="color: #E48F45; font-weight: 700;">Find Your Furry Friends, Share Your Purrfect Moments</h2>
                        <p class="lead" style="color: #6e4d36; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                        <p class="lead" style="color: #6e4d36; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="feature" class="feature section-padding" style="background-color: #6e4d36;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2 style="color: #E48F45; font-weight: 700;">Discover Your Pet's Perfect Match</h2>
                        <p class="lead" style="color: #E3CAA5; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                        <p class="lead" style="color: #E3CAA5; text-align: justify;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti possimus magnam corporis ratione facere!
                        </p>
                    </div>
                    <div class="col-md">
                        <img src="img/feature/feature-3.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section Ends -->

        <!-- Contact Us Section -->
        <section id="contact" class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center p-5">
                            <h2 class="fw-bold">Contact Us</h2>
                            <p>We're Here to Help, Let's Talk!</p>
                        </div>
                    </div>
                </div>

                <div class="row m-0">
                    <div class="col-md-12 p-0 pt-3 p-5 m-auto">
                        <div class="row">
                            <!-- Contact Form -->
                            <form action="contact_form.php" method="post" needs-validation>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-regular fa-user" style="color: #603f26;"></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Full Name">
                                            <label for="name">Full Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-regular fa-envelope" style="color: #603f26;"></i></span>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Message" id="message" style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>

                                <button class="container btn btn-lg btn block mt-3">Send</button>
                                
                            </form>
                            <!-- Contact Form Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Section Ends -->

        <!-- Footer Section -->
        <?php include 'includes/layout/footer.php'; ?>
    

</body>
</html>

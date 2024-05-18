<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Documentation - Epiko</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h4 class="m-0 text-white">Epiko ng mga Ifugao</h4>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="characters.php" class="nav-item nav-link">Characters</a>
                        <a href="settings.php" class="nav-item nav-link">Settings</a>
                        <a href="assets.php" class="nav-item nav-link active">Assets</a>
                        <a href="about.php" class="nav-item nav-link">About the Developer</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Assets</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <?php
            require_once 'oop/asset.php';

            $asset = new Asset();
            $stmt = $asset->read();
        ?>

        <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Epiko ng mga Ifugao: Alim<span></span></p>
            <h1 class="text-center mb-5">Assets in the Game</h1>
        </div>
        <div class="row g-4">
            <?php while ($row = $stmt->fetch_assoc()): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <!-- Square Image Container -->
                        <div class="img-container">
                            <img class="img-thumbnail w-100" src="<?php echo $row['image']; ?>" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="<?php echo $row['image']; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                        </div>
                        <br>
                        <h5 class="mb-2 "><?php echo $row['name']; ?></h5>
                        <div class="d-flex justify-content-center">
                            <audio src="<?php echo $row['audio']; ?>" controls></audio>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<style>
    .img-container {
        position: relative;
        overflow: hidden;
        /* For square shape */
        width: 100%;
        padding-top: 100%; /* 1:1 Aspect Ratio */
    }
    .img-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Cover the whole container */
        transition: transform 0.3s ease;
    }
    .img-container img:hover {
        transform: scale(1.2); /* Scale up the image on hover */
    }
</style>

<script>
    // JavaScript to expand image on click
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.img-container img');
        images.forEach(img => {
            img.addEventListener('click', function () {
                img.classList.toggle('expanded');
            });
        });
    });
</script>

        <!-- Service End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>San Pablo City, Laguna</p>
                        <p><i class="fa fa-phone-alt me-3"></i>09123456789</p>
                        <p><i class="fa fa-envelope me-3"></i>epikongmgaifugao_alim.com</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="index.php">Home</a>
                        <a class="btn btn-link" href="characters.php">Characters</a>
                        <a class="btn btn-link" href="settings.php">Settings</a>
                        <a class="btn btn-link" href="assets.php">Assets</a>
                        <a class="btn btn-link" href="about.php">About the Developer</a>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.php">Epiko ng mga Ifugao : Alim</a>,  All Right Reserved. 
						
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
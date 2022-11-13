<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Job</title>

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../client-side-web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client-side-web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client-side-web/css/flaticon.css">
    <link rel="stylesheet" href="../client-side-web/css/price_rangs.css">
    <link rel="stylesheet" href="../client-side-web/css/slicknav.css">
    <link rel="stylesheet" href="../client-side-web/css/animate.min.css">
    <link rel="stylesheet" href="../client-side-web/css/magnific-popup.css">
    <link rel="stylesheet" href="../client-side-web/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../client-side-web/css/themify-icons.css">
    <link rel="stylesheet" href="../client-side-web/css/slick.css">
    <link rel="stylesheet" href="../client-side-web/css/nice-select.css">
    <link rel="stylesheet" href="../client-side-web/css/style.css">
    <link rel="stylesheet" href="../client-side-web/css/form.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../client-side-web/assets/images/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <?php require_once('../client-side-web/components/header.php'); ?>

    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../client-side-web/assets/images/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Post your Job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

        <center>

            <form action="../client-side-web/components/publish.php" method="POST">

                <select name="job_category" >
                    <option value="Banking and Insurance">Banking and Insurance</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Sales and Marketing">Sales and Marketing</option>
                    <option value="Telecommunication">Telecommunication</option>
                    <option value="Construction">Construction</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Accounting and Auditing">Accounting and Auditing</option>
                </select>
                <br>
                Job Role: <input type="text" name="job_role" >
                <br>
                Salary: <input type="text" name="salary" >
                <br>
                <select name="salary_type" required>
                    <option value="hourly">hourly</option>
                    <option value="monthly">monthly</option>
                    <option value="yearly">yearly</option>
                </select>
                <br>
                <select name="job_location" >
                    <option value="Western Province">Western Province</option>
                    <option value="Central Province">Central Province</option>
                    <option value="Southern Province">Southern Province</option>
                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                </select>
                <br>
                Description: <textarea name="description" rows="4" cols="50" ></textarea>
                <br>
                Vacancies: <input type="text" name="vacancies" >
                <br>
                <select name="job_nature" >
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Remote">Remote</option>
                    <option value="Freelance">Freelance</option>
                </select>
                <br>
                Require Skills: <textarea name="requirement_skills" rows="4" cols="50" ></textarea>
                <br>
                Education and Experience: <textarea name="education_and_experience" rows="4" cols="50" ></textarea>
                <br>
                Application Deadline: <input type="text" name="deadline" >
                <br>

                <input type="submit" name="submit" value="Publish">

            </form>

        </center>

    </main>

    <?php require_once('../client-side-web/components/footer.php'); ?>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="../client-side-web/components/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../client-side-web/components/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../client-side-web/components/js/popper.min.js"></script>
    <script src="../client-side-web/components/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../client-side-web/components/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../client-side-web/components/js/owl.carousel.min.js"></script>
    <script src="../client-side-web/components/js/slick.min.js"></script>
    <script src="../client-side-web/components/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="../client-side-web/components/js/wow.min.js"></script>
    <script src="../client-side-web/components/js/animated.headline.js"></script>
    <script src="../client-side-web/components/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="../client-side-web/components/js/jquery.scrollUp.min.js"></script>
    <script src="../client-side-web/components/js/jquery.nice-select.min.js"></script>
    <script src="../client-side-web/components/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="../client-side-web/components/js/contact.js"></script>
    <script src="../client-side-web/components/js/jquery.form.js"></script>
    <script src="../client-side-web/components/js/jquery.validate.min.js"></script>
    <script src="../client-side-web/components/js/mail-script.js"></script>
    <script src="../client-side-web/components/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../client-side-web/components/js/plugins.js"></script>
    <script src="../client-side-web/components/js/main.js"></script>

</body>

</html>

<?php mysqli_close($connection); ?>
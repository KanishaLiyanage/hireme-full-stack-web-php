<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

$j_id = " ";
$com_id = " ";

if (isset($_GET['job_id'])) {
    echo "ID passed!";
} else {
    echo "ID pass failed!";
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../client-side-web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client-side-web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client-side-web/css/flaticon.css">
    <link rel="stylesheet" href="../client-side-web/css/slicknav.css">
    <link rel="stylesheet" href="../client-side-web/css/price_rangs.css">
    <link rel="stylesheet" href="../client-side-web/css/animate.min.css">
    <link rel="stylesheet" href="../client-side-web/css/magnific-popup.css">
    <link rel="stylesheet" href="../client-side-web/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../client-side-web/css/themify-icons.css">
    <link rel="stylesheet" href="../client-side-web/css/slick.css">
    <link rel="stylesheet" href="../client-side-web/css/nice-select.css">
    <link rel="stylesheet" href="../client-side-web/css/style.css">
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
                                <h2>UI/UX Designer</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

        <!-- job post company Start -->
        <?php

        $j_id = $_GET['job_id'];

        $query = "SELECT * FROM jobs WHERE job_id = '{$j_id}' LIMIT 1";

        $result = mysqli_query($connection, $query);

        if ($result) {

            while ($record = mysqli_fetch_array($result)) {

                $com_id = $record['company_id'];

        ?>

                <div class="job-post-company pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-between">
                            <!-- Left Content -->
                            <div class="col-xl-7 col-lg-8">
                                <!-- job single -->
                                <div class="single-job-items mb-50">
                                    <div class="job-items">
                                        <div class="company-img company-img-details">
                                            <a href="#"><img src="../client-side-web/assets/images/icon/job-list1.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="#">
                                                <h4><?php echo $record['job_role'] ?></h4>
                                            </a>
                                            <ul>
                                                <li><?php echo $record['company_id'] ?></li>
                                                <li><i class="fas fa-map-marker-alt"></i><?php echo $record['location'] ?></li>
                                                <li>$<?php echo $record['salary'] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- job single End -->

                                <div class="job-post-details">
                                    <div class="post-details1 mb-50">
                                        <!-- Small Section Tittle -->
                                        <div class="small-section-tittle">
                                            <h4>Job Description</h4>
                                        </div>
                                        <p><?php echo $record['description'] ?></p>
                                    </div>
                                    <div class="post-details2  mb-50">
                                        <!-- Small Section Tittle -->
                                        <div class="small-section-tittle">
                                            <h4>Required Knowledge, Skills, and Abilities</h4>
                                        </div>
                                        <ul>
                                            <?php echo $record['requirement_skills'] ?>
                                        </ul>
                                    </div>
                                    <div class="post-details2  mb-50">
                                        <!-- Small Section Tittle -->
                                        <div class="small-section-tittle">
                                            <h4>Education + Experience</h4>
                                        </div>
                                        <ul>
                                            <?php echo $record['education_and_experience'] ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Right Content -->
                            <div class="col-xl-4 col-lg-4">
                                <div class="post-details3  mb-50">
                                    <!-- Small Section Tittle -->
                                    <div class="small-section-tittle">
                                        <h4>Job Overview</h4>
                                    </div>
                                    <ul>
                                        <li>Posted date : <span><?php echo $record['posted_date'] ?></span></li>
                                        <li>Location : <span><?php echo $record['location'] ?></span></li>
                                        <li>Vacancy : <span><?php echo $record['vacancies'] ?></span></li>
                                        <li>Job nature : <span><?php echo $record['job_nature'] ?></span></li>
                                        <li>Salary : <span>$<?php echo $record['salary'] ?> <?php echo $record['salary_type'] ?></span></li>
                                        <li>Application Deadline : <span><?php echo $record['deadline'] ?></span></li>
                                    </ul>
                                    <div class="apply-btn2">
                                        <a href="#" class="btn">Apply Now</a>
                                    </div>
                                </div>

                                <?php

                                $query = "SELECT * FROM companies WHERE company_id = '{$com_id}' LIMIT 1";

                                $result = mysqli_query($connection, $query);

                                if ($result) {

                                    while ($record = mysqli_fetch_array($result)) {

                                ?>

                                        <div class="post-details4  mb-50">
                                            <!-- Small Section Tittle -->
                                            <div class="small-section-tittle">
                                                <h4>Company Information</h4>
                                            </div>
                                            <span><?php echo $record['company_name'] ?></span>
                                            <p><?php echo $record['company_description'] ?></p>
                                            <ul>
                                                <li>Name: <span><?php echo $record['company_name'] ?></span></li>
                                                <li>Web : <span><?php echo $record['company_website'] ?></span></li>
                                                <li>Email: <span><?php echo $record['company_email'] ?></span></li>
                                            </ul>
                                        </div>

                                <?php
                                    }
                                }

                                ?>

                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        }

        ?>
        <!-- job post company End -->

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
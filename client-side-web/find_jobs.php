<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['submit'])) {


    $cat = mysqli_real_escape_string($connection, $_POST['job_category']);
    $j_loc = mysqli_real_escape_string($connection, $_POST['job_location']);
    $sal = mysqli_real_escape_string($connection, $_POST['salary']);
    $sal2 = "";

    if ($sal == 1) {
        $sal = 1000;
        $sal2 = 2000;
    } elseif ($sal == 2) {
        $sal = 2000;
        $sal2 = 3000;
    } elseif ($sal == 3) {
        $sal = 3000;
        $sal2 = 4000;
    } elseif ($sal == 4) {
        $sal = 4000;
        $sal2 = 5000;
    } elseif ($sal == 5) {
        $sal = 5000;
    }

    if ($cat == "All Category" && $j_loc == "Anywhere" && $sal == "Any") {
        $query = "SELECT * FROM jobs";
    } elseif ($cat != "All Category" && $j_loc == "Anywhere" && $sal == "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            category = '{$cat}'";
    } elseif ($cat == "All Category" && $j_loc != "Anywhere" && $sal == "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            location = '{$j_loc}'";
    } elseif ($cat == "All Category" && $j_loc == "Anywhere" && $sal != "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            salary >= '{$sal}' AND salary < '{$sal2}'";
    } elseif ($cat != "All Category" && $j_loc != "Anywhere" && $sal == "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            category = '{$cat}'
            AND
            location = '{$j_loc}'";
    } elseif ($cat == "All Category" && $j_loc != "Anywhere" && $sal != "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            location = '{$j_loc}'
            AND
            salary >= '{$sal}' AND salary < '{$sal2}'";
    } elseif ($cat != "All Category" && $j_loc == "Anywhere" && $sal != "Any") {
        $query = "SELECT * FROM jobs
            WHERE
            category = '{$cat}'
            AND
            salary >= '{$sal}' AND salary < '{$sal2}'";
    } else {
        $query = "SELECT * FROM jobs
            WHERE
            category = '{$cat}'
            AND
            location = '{$j_loc}'
            AND
            salary >= '{$sal}' AND salary < '{$sal2}'";
    }
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Find Jobs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../client-side-web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../client-side-web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../client-side-web/css/price_rangs.css">
    <link rel="stylesheet" href="../client-side-web/css/flaticon.css">
    <link rel="stylesheet" href="../client-side-web/css/slicknav.css">
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
                                <h2>Get your dream job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                            <path fill-rule="evenodd" fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                        </svg>
                                    </div>
                                    <h4>Filter Jobs</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Job Category Listing start -->
                        <form action="../client-side-web/find_jobs.php" method="POST">
                            <div class="job-category-listing mb-50">
                                <!-- single one -->
                                <div class="single-listing">
                                    <div class="small-section-tittle2">
                                        <h4>Job Category</h4>
                                    </div>
                                    <!-- Select job items start -->
                                    <div class="select-job-items2">
                                        <select name="job_category">
                                            <option value="All Category">All Category</option>
                                            <option value="Banking and Insurance">Banking and Insurance</option>
                                            <option value="UI/UX Design">UI/UX Design</option>
                                            <option value="Sales and Marketing">Sales and Marketing</option>
                                            <option value="Telecommunication">Telecommunication</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Architecture">Architecture</option>
                                            <option value="Accounting and Auditing">Accounting and Auditing</option>
                                        </select>
                                    </div>
                                    <!--  Select job items End-->
                                </div>
                                <div class="single-listing">
                                    <div class="select-Categories pt-80 pb-50">
                                        <div class="small-section-tittle2">
                                            <h4>Job Location</h4>
                                        </div>
                                        <div class="select-job-items2">
                                            <select name="job_location">
                                                <option value="Anywhere">Anywhere</option>
                                                <option value="Western Province">Western Province</option>
                                                <option value="Central Province">Central Province</option>
                                                <option value="Southern Province">Southern Province</option>
                                                <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- single two -->
                                <div class="single-listing">
                                    <div class="select-Categories pt-80 pb-50">
                                        <div class="small-section-tittle2">
                                            <h4>Salary Between ($)</h4>
                                        </div>
                                        <label class="container">Any
                                            <input type="radio" id="sal0" name="salary" value="Any" checked="true">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">1-2K
                                            <input type="radio" id="sal1" name="salary" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">2-3K
                                            <input type="radio" id="sal2" name="salary" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">3-4K
                                            <input type="radio" id="sal3" name="salary" value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">4-5K
                                            <input type="radio" id="sal3" name="salary" value="4">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">5K-more..
                                            <input type="radio" id="sal4" name="salary" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="single-listing">

                                </div class="button"><input type="submit" name='submit' value="Filter">

                            </div>
                            <!-- Job Category Listing End -->
                    </div>
                    </form>

                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- single-job-content -->
                                <?php

                                $query = "SELECT * FROM jobs";

                                $result1 = mysqli_query($connection, $query);
                                ?>

                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span><?php echo mysqli_num_rows($result1) ?> Jobs found</span>
                                            <!-- Select job items start -->
                                            <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <?php

                                if ($result1) { ?>

                                    <?php

                                    if (mysqli_num_rows($result1) > 0) { ?>

                                        <?php while ($record1 = mysqli_fetch_array($result1)) {

                                            $_GET['j_id'] = $record1['job_id'];
                                            $com_id = $record1['company_id'];

                                            $query2 = "SELECT * FROM companies WHERE company_id = '{$com_id}' LIMIT 1";
                                            $result2 = mysqli_query($connection, $query2);

                                            if ($result2) {

                                                while ($record2 = mysqli_fetch_array($result2)) {

                                        ?>
                                                    <div class="single-job-items mb-30">
                                                        <div class="job-items">
                                                            <div class="company-img">
                                                                <a href="job_details.php?job_id=<?= $_GET['j_id'] ?>"><img src="../client-side-web/assets/images/icon/job-list1.png" alt="<?php echo $record2['company_name']; ?>"></a>
                                                            </div>
                                                            <div class="job-tittle">
                                                                <a href="job_details.php?job_id=<?= $_GET['j_id'] ?>">
                                                                    <h4><?php echo strtoupper($record1['job_role']) ?></h4>
                                                                </a>
                                                                <ul>
                                                                    <li><?php echo $record2['company_name'] ?></li>
                                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $record1['location'] ?></li>
                                                                    <li>$<?php echo $record1['salary'] ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="items-link f-right">
                                                            <a href="job_details.php"><?php echo $record1['job_nature'] ?></a>
                                                            <span><?php echo $record1['posted_date'] ?></span>
                                                        </div>
                                                    </div>

                                                <?php
                                                }

                                                ?>

                                        <?php

                                            }
                                        } ?>

                                <?php }
                                } else {
                                    echo "DB failed!";
                                }

                                ?>
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->

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

    <!-- Jquery Slick , Owl-Carousel Range -->
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
<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

$company_id = 1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireME | Applicants</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon/favicon.ico">

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
    <link rel="stylesheet" href="../client-side-web/css/footer.css">

</head>

<body>
    <?php require_once('../client-side-web/components/header.php'); ?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="../client-side-web/assets/images/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>My Applicants</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->


        <section class="featured-job-area filterContainer">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">

                        <?php

                        $query = "SELECT
                                  applications.*,
                                  jobs.*,
                                  applicants.*
                                  FROM
                                  applications
                                  INNER JOIN jobs ON applications.job_id = jobs.job_id
                                  INNER JOIN applicants ON applications.applicant_id = applicants.applicant_id
                                  WHERE
                                  applications.company_id = '{$company_id}'
                                  ORDER BY
                                  applications.application_id DESC";

                        $result = mysqli_query($connection, $query);

                        ?>

                        <?php

                        if ($result) { ?>

                            <?php

                            if (mysqli_num_rows($result) > 0) { ?>

                                <?php while ($record = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <img class="companyLogo" src="../assets/uploads/companies/company-logo/calcey.png">
                                            </div>
                                            <div class="job-tittle">
                                                <h4><?php echo strtoupper($record['job_role']) ?></h4>
                                                <ul>
                                                    <li><?php echo $record['applicant_first_name'] ?></li>
                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $record['location'] ?></li>
                                                    <li>$<?php echo $record['salary'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="items-link f-right">
                                            <a href="job_details.php?job_id=<?= $record['job_id'] ?>&company_id=<?= $company_id ?>"><?php echo $record['job_nature'] ?></a>
                                            <span><?php echo $record['posted_date'] ?></span>
                                        </div>
                                    </div>

                                <?php
                                }

                                ?>

                            <?php } else {
                            ?>
                                <div class="filter-warning">
                                    <h1>Ooops... No Any Matches Found!</h1>
                                </div>
                        <?php
                            }
                        } else {
                            echo "DB failed!";
                        }

                        ?>

                    </div>
                </div>
            </div>
        </section>

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
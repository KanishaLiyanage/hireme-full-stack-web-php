<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

$applicant_id = 1;

?>

<?php

$query = "SELECT
          applications.*,
          jobs.*,
          companies.*
          FROM
          applications
          INNER JOIN jobs ON applications.job_id = jobs.job_id
          INNER JOIN companies ON applications.company_id = companies.company_id
          WHERE
          applications.applicant_id = '{$applicant_id}'
          AND
          applications.application_recycle_bin = 0
          ORDER BY
          applications.application_id
          DESC";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireME | Applications</title>

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
                                <h2>My Applications</h2>
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

                        <div class="table-box">
                            <div class="table-row table-head">
                                <div class="table-cell first-cell">
                                    <p>Application ID</p>
                                </div>
                                <div class="table-cell second-cell">
                                    <p>Company Name</p>
                                </div>
                                <div class="table-cell third-cell">
                                    <p>Job Category</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Applied Job Role</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Company Email</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Location</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Job Posted Date</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Deadline</p>
                                </div>
                                <div class="table-cell fourth-cell">
                                    <p>Options</p>
                                </div>
                            </div>

                            <?php
                            $result = mysqli_query($connection, $query);


                            if ($result) {

                                if (mysqli_num_rows($result) > 0) {

                                    while ($record = mysqli_fetch_array($result)) {
                            ?>

                                        <div class="table-row">
                                            <div class="table-cell first-cell">
                                                <p><?php echo $record['application_id'] ?></p>
                                            </div>
                                            <div class="table-cell">
                                                <p><?php echo $record['company_name'] ?></p>
                                            </div>
                                            <div class="table-cell last-cell">
                                                <p><?php echo $record['category'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <p><?php echo $record['job_role'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <p><?php echo $record['company_email'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <p><?php echo $record['location'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <p><?php echo $record['posted_date'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <p><?php echo $record['deadline'] ?></p>
                                            </div>
                                            <div class="table-cell fourth-cell">
                                                <a href="../client-side-web/components/cancel_application.php?application_id=<?= $record['application_id'] ?>" onclick="return confirm('Are you sure to want cancel the application?');">
                                                    <button type="button" class="filter-form">Cancel Application</button>
                                                </a>
                                            </div>
                                        </div>

                                    <?php
                                    }

                                    ?>

                                <?php } else {
                                ?>
                                    <div class="filter-warning">
                                        <h1>There is no applicants here</h1>
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
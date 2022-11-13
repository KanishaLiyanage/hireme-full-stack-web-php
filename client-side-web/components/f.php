<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

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


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filtered List</title>

        <!-- CSS here -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/price_rangs.css">
        <link rel="stylesheet" href="../css/flaticon.css">
        <link rel="stylesheet" href="../css/slicknav.css">
        <link rel="stylesheet" href="../css/animate.min.css">
        <link rel="stylesheet" href="../css/magnific-popup.css">
        <link rel="stylesheet" href="../css/fontawesome-all.min.css">
        <link rel="stylesheet" href="../css/themify-icons.css">
        <link rel="stylesheet" href="../css/slick.css">
        <link rel="stylesheet" href="../css/nice-select.css">
        <link rel="stylesheet" href="../css/style.css">

    </head>

    <body>
        <div class="col-xl-9 col-lg-9 col-md-8">
            <section class="featured-job-area">
                <div class="container">
                    <?php
                    $result1 = mysqli_query($connection, $query);
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count-job mb-35">
                                <span><?php echo mysqli_num_rows($result1) ?> Jobs found</span>
                                <div class="select-job-items">
                                    <span>Sort by</span>
                                    <select name="select">
                                        <option value="">None</option>
                                        <option value="">job list</option>
                                        <option value="">job list</option>
                                        <option value="">job list</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                    <a href="job_details.php?job_id=<?= $_GET['j_id'] ?>"><img src="../assets/images/icon/job-list1.png" alt="<?php echo $record2['company_name']; ?>"></a>
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
        </div>
        </div>
        </div>
        </div>
    </body>

    </html>

<?php
} else {

    require_once('../components/job_list.php');
}

?>

<?php mysqli_close($connection); ?>
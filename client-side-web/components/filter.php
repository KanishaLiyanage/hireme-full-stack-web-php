<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

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

if (isset($_POST['submit'])) {

    echo "Values submitted!";

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filters</title>
    </head>

    <body>

        <p>

            <?php echo $cat; ?></br>
            <?php echo $j_loc; ?></br>
            <?php echo $sal; ?></br>

        </p>

        <?php

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

        $result1 = mysqli_query($connection, $query);
        ?>

        <?php

        if ($result1) { ?>

            <?php

            if (mysqli_num_rows($result1) > 0) { ?>

                <?php while ($record1 = mysqli_fetch_array($result1)) {

                    $_GET['j_id'] = $record1['job_id'];
                    $com_id = $record1['company_id'];

                    $query2 = "SELECT * FROM companies
                               WHERE company_id = '{$com_id}'
                               LIMIT 1";

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

    </body>

    </html>

<?php

} else {

    header("Location: ../find_jobs.php");
}

?>

<?php mysqli_close($connection); ?>
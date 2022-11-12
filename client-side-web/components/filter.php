<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

$cat = mysqli_real_escape_string($connection, $_POST['job_category']);
$j_nat = mysqli_real_escape_string($connection, $_POST['job_nature']);
$j_loc = mysqli_real_escape_string($connection, $_POST['job_location']);
$sal = mysqli_real_escape_string($connection, $_POST['salary']);
$p_date = mysqli_real_escape_string($connection, $_POST['posted_date']);

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
            <?php echo $j_nat; ?></br>
            <?php echo $j_loc; ?></br>
            <?php echo $sal; ?></br>
            <?php echo $p_date; ?>

        </p>

    </body>

    </html>

    <?php mysqli_close($connection); ?>


<?php

} else {

    header("Location: ../find_jobs.php");
}

?>
<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['submit']) && isset($_GET['job_id']) && isset($_GET['company_id'])) {

    $cl_id = 1;
    $j_id = $_GET['job_id'];
    $com_id = $_GET['company_id'];

    $cv = mysqli_real_escape_string($connection, $_POST['job_location']);

    echo $j_id;
    echo $com_id;

    $query = "INSERT INTO applications(client_id, job_id, company_id, cv)
              VALUES ('{$cl_id}', '{$j_id}', '{$com_id}', '{$cv}')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../index.php");
    } else {
        header('Location: error.php');
    }
} else {
    header('Location: ../apply_now.php');
}

?>

<?php mysqli_close($connection); ?>
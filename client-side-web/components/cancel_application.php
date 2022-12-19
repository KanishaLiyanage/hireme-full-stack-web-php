<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php


if (isset($_GET['application_id'])) {

    $application_id = mysqli_real_escape_string($connection, $_GET['application_id']);

    $query = "UPDATE applications
              SET application_recycle_bin = 1
              WHERE application_id = '{$application_id}'
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: ../applicant_applications.php?message=application_canceled');
    } else {
        header('Location: ../applicant_applications.php?error=failed_to_cancel_application!');
    }
} else {
    header('Location: ../applicant_applications.php');
}


?>

<?php mysqli_close($connection); ?>
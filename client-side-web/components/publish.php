<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['submit'])) {

    $com_id = 5;

    $cat = mysqli_real_escape_string($connection, $_POST['job_category']);
    $j_role = mysqli_real_escape_string($connection, $_POST['job_role']);
    $sal = mysqli_real_escape_string($connection, $_POST['salary']);
    $sal_type = mysqli_real_escape_string($connection, $_POST['salary_type']);
    $j_loc = mysqli_real_escape_string($connection, $_POST['job_location']);
    $desc = mysqli_real_escape_string($connection, $_POST['description']);
    $vac = mysqli_real_escape_string($connection, $_POST['vacancies']);
    $j_nat = mysqli_real_escape_string($connection, $_POST['job_nature']);
    $req_skills = mysqli_real_escape_string($connection, $_POST['requirement_skills']);
    $ed_exp = mysqli_real_escape_string($connection, $_POST['education_and_experience']);
    $app_deadline = mysqli_real_escape_string($connection, $_POST['deadline']);

    echo $cat;
    echo $j_role;
    echo $sal;
    echo $sal_type;
    echo $j_loc;
    echo $desc;
    echo $vac;
    echo $j_nat;
    echo $req_skills;
    echo $ed_exp;
    echo $app_deadline;

    $query = "INSERT INTO jobs(company_id, category, job_role, salary, salary_type, location, description, vacancies, job_nature, requirement_skills, education_and_experience, deadline)
              VALUES ('{$com_id}', '{$cat}', '{$j_role}','{$sal}', '{$sal_type}', '{$j_loc}','{$desc}','{$vac}','{$j_nat}','{$req_skills}','{$ed_exp}','{$app_deadline}')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../post_job.php");
    } else {
        header('Location: error.php');
    }
} else {
    header('Location: ../post_job.php');
}

?>

<?php mysqli_close($connection); ?>
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
} else {

    header("Location: ../find_jobs.php");
}

?>
<?php

include 'configAdmin.php';
session_start();

$username = $_SESSION['admin_username'];
$email = $_SESSION['admin_email'];
$id = $_SESSION['admin_id'];
// if (!isset($username)) {
//     header('location:index.php');
//   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->
    <title>Peellakanda Hotel - Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="./css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here css/colors/blue.css -->
    <link href="./css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="./images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="./images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="./images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="./images/users/profile.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $username; ?></h4>
                                                <p class="text-muted"><?php echo $email; ?></p></div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="./images/users/profile.png" alt="user" /> 
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> 
                            <h5><?php echo $username; ?></h5>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li class="nav-devider"></li>
                        <li class="nav-small-cap">Admin Panel</li>
                        <li class="active"> <a class="waves-dark active" href="dashboard.php"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-dark" href="applicants.php"><i class="fa fa-users"></i><span class="hide-menu">Applicants</span></a>
                        </li>  
                        <li> <a class="waves-dark" href="report.php"><i class="fa  fa-bar-chart-o"></i><span class="hide-menu">Reports</span></a>
                        </li>  
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                    <h3 class="">2456</h3>
                                    <h6 class="card-subtitle">New Projects</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                    <h3 class="">546</h3>
                                    <h6 class="card-subtitle">Pending Project</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                    <h3 class="">$24561</h3>
                                    <h6 class="card-subtitle">Total Cost</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i></h2>
                                    <h3 class="">$30010</h3>
                                    <h6 class="card-subtitle">Total Earnings</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Earning Report<br/><small class="text-muted">Emplyee earning report</small></h4>
                                    <div class="ml-auto">
                                        <select class="custom-select">
                                            <option selected="">July</option>
                                            <option value="1">Aug</option>
                                            <option value="2">Sept</option>
                                            <option value="3">Oct</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-20">
                                <div class="d-flex">
                                    <div class="align-self-center">
                                        <h3 class="m-b-0">July 2017</h3><small>Total Earning</small></div>
                                    <div class="ml-auto align-self-center">
                                        <h2 class="text-success">$5470</h2></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover earning-box">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Priority</th>
                                                <th>Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Manager</small></td>
                                                <td><span class="label label-success">Low</span></td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td>
                                                    <h6>Andrew</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-info">Medium</span></td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Bhavesh patel</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-primary">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Nirav Joshi</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-danger">Low</span></td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Micheal Doe</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-warning">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr> 
                                                <td>
                                                    <h6>Johnathan</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-info">High</span></td>
                                                <td>$2.6K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Vishal Doe</h6><small class="text-muted">Reception</small></td>
                                                <td><span class="label label-warning">High</span></td>
                                                <td>$12.9K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Peellakanda Hotels. All Rights Reserved.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./css/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./css/plugins/bootstrap/js/popper.min.js"></script>

    <script src="./css/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="./js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="./css/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./css/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./js/custom.min.js"></script>
    
    <script src="./js/dashboard1.js"></script>
    <!-- ============================================================== -->
</body>

</html>

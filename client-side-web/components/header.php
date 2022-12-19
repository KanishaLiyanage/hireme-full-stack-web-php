<header>
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-2">
                        <div class="logo">
                            <a href="home.php">
                                <img src="../client-side-web/assets/images/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">

                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="find_jobs.php">Find Jobs</a></li>
                                        <li><a href="post_job.php">Post a Job</a></li>
                                        <!-- <li><a href="contact.php">Contact</a></li> -->
                                        <li><a href="profile.php">Profile</a></li>
                                        <?php
                                        if (isset($_SESSION['applicant_id'])) { ?>
                                            <li><a href="./login and register/logout.php">Logout</a></li>
                                        <?php } else if (isset($_SESSION['company_id'])) { ?>
                                            <li><a href="./login and register/logout.php">Logout</a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="./login and register/register.php" class="btn head-btn1">Register</a>
                                <a href="./login and register/login.php" class="btn head-btn2">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
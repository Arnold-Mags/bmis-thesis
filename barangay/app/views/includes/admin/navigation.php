<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">
                <div class="row g-3">
                    <img src="<?php echo URLROOT .'/img/brgy-logo.png '?>" id="nav-logo" class="img-fluid col-4 col-md-4" width="80px">
                    <div class="col-8 col-md-8 d-flex align-items-center">
                        <div class="row g-0">
                            <div class="col-12 col-md-12 text-logo-s text-primary">Barangay Cabugo</div>
                            <div class="col-12 col-md-12 text-logo-e text-secondary">Claver SDN</div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!--<div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><div class="dropdown-item" href="<?php echo URLROOT . '/admins/profile' ?>"></div>
                            <div class="sb-nav-link-icon text-center"><img src="<?php echo URLROOT . '/img/id/resident/placeholder.png' ?>" class="img-fluid" style="width:25px;" alt=""></div>
                            <div class="text-center"><span><?php echo  $_SESSION['username']?></span></div>

                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo URLROOT . '/admins/password' ?>">Change Password</a></li>
                        <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-transparent" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">General</div>
                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/admins/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/admins/brgy_official">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-shield"></i></div>
                                Barangay Officials
                            </a>

                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/residents/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Residents
                            </a>

                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/certificates/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-signature"></i></div>
                                Certification
                            </a>
                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/certificates/request">
                                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                                Online Request
                            </a>
                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/posts/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                                Announcements
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link collapsed text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                                Accounts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/accounts/index"><div class="badge rounded-pill bg-warning text-dark">To verify&nbsp;<i class="fas fa-search"></i></div></a>
                                    <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/accounts/verified"><div class="badge rounded-pill bg-primary text-light">Verified&nbsp;<i class="fas fa-check"></i></div></a>

                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Settings</div>
                            <a class="nav-link text-dark" href="<?php echo URLROOT; ?>/admins/barangay_detail">
                                <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                                Barangay Details
                            </a>

                            <!-- <a class="nav-link" href="<?php echo URLROOT; ?>/admins/index">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                Accounts
                            </a> -->


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <?php
                        echo "Today is " . date("l Y/m/d") . "<br>";
                        ?>

                        
                    </div>
                </nav>
            </div>
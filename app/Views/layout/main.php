<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Aplikasi HMS nyaman.com</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon/logo_icon_little.ico') ?>" />

    <!-- Fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/font/fonts.css') ?>" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/boxicons.css') ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/apex-charts/apex-charts.css') ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/js/config.js') ?>"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>

    <style>
        .content-wrapper {
            margin-top: 120px;
            /* Total tinggi navbar 1 + navbar 2 */
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <div class="fixed-top shadow-sm">
                    <nav
                        class="layout-navbar container-xxl navbar navbar-expand-xl align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <span>Aplikasi Hotel Manajemen Sistem</span>
                                    <!-- <i class="bx bx-search fs-4 lh-0"></i>
                                <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..." /> -->
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->


                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="<?= base_url('assets/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="<?= base_url('assets/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="grow">
                                                        <span class="fw-semibold d-block"><?= session('username') ?></span>
                                                        <small class="text-muted"><?= session('role') ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?= base_url('logout') ?>">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?= base_url('/dashboard') ?>">Home <i class='bx bx-home'></i></a>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
                                    <!-- <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="javascript:void(0)">Home</a>
                                </li> -->
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="reservation_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Reservation
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="reservation_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">New Booking</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Booking List</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Booking Calender</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Guest List</a></li>


                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="front-office_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Front Office
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="front-office_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Room Availability</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Check-in</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Check-out</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Extend Stay</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Cancel Booking</a></li>
                                            <!-- <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="housekeeping_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Housekeeping
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="housekeeping_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Task Board</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Room Status</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Asset Monitoring</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Housekeeping Report</a></li>
                                            <!-- <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="folio_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Folio
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="folio_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Open Folio</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Add Service</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Post Charges</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Payment</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Refund</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Folio Ledger</a></li>


                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="finance_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Finance
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="finance_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Payment History</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Tax Report</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Daily Closing</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Cashier Report</a></li>



                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="master-data_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Master Data
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="master-data_dropdown">
                                            <li><a class="dropdown-item" href="<?= base_url('rooms') ?>">Rooms</a></li>
                                            <li><a class="dropdown-item" href="<?= base_url('room-types') ?>">Room Types</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Price Rules</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Services</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Taxes</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Assets</a></li>



                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="reports_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Reports
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="reports_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Occupancy Report</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Revenue Report</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Room Performance</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Services Revenue</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Outstanding Payments</a></li>




                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="javascript:void(0)"
                                            id="settings_dropdown"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Settings
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="settings_dropdown">
                                            <li><a class="dropdown-item" href="javascript:void(0)">User Management</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Role Management</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Hotel Profile</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Backup Database</a></li>

                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="javascript:void(0)"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="javascript:void(0)" tabindex="-1">Disabled</a>
                                </li> -->
                                </ul>
                                <!-- <form class="d-flex" onsubmit="return false">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form> -->
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl grow container-p-y">
                        <div class="row">
                            <?php if (session()->has('errors')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        <?php foreach (session('errors') as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif ?>

                            <?php if (session()->has('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session('success') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif ?>

                            <?php if (session()->has('error_msg')) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= session('error_msg') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif ?>

                            <?= $this->renderSection('content') ?>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                HMS

                            </div>

                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

    <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/js/dashboards-analytics.js') ?>"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="<?= base_url('assets/js/button-github.js') ?>"></script>
</body>

</html>
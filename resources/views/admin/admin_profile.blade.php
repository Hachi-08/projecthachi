<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin_Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="NiceAdmin/assets/img/favicon.png" rel="icon">
    <link href="NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="NiceAdmin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="NiceAdmin/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ session()->get('name') }}
                            {{ session()->get('surname') }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ session()->get('name') }} {{ session()->get('surname') }}</h6>
                            <span>{{ session()->get('level_id') }} </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin_profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin_profile') }}">
                    <i class="bi bi-house"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_member') }}">
                    <i class="bi bi-person"></i>
                    <span>สมาชิก</span>
                </a>
            </li><!-- End สมาชิก  Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_car') }}">
                    <i class="bi bi-trash3"></i>
                    <span>รถ</span>
                </a>
            </li><!-- End รถ  Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_QRcode') }}">
                    <i class="bi bi-qr-code"></i>
                    <span> QR code</span>
                </a>
            </li><!-- End QR code Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_record') }}">
                    <i class="bi bi-calendar-range"></i>
                    <span>ประวัติการเข้า-ออก</span>
                </a>
            </li><!-- End ประวัติการเข้า-ออก Nav -->

        </ul>

    </aside><!-- End Sidebar-->


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ session()->get('name') }} {{ session()->get('surname') }} </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center"> <img
                                src="NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2>ชื่อ {{ session()->get('name') }} นามสกุล {{ session()->get('surname') }}</h2>
                            <h3>สถานะ {{ session()->get('level_id') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                                <li class="nav-item" role="presentation"> <button class="nav-link active"
                                        data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true"
                                        role="tab">Overview</button></li>
                                <li class="nav-item" role="presentation"> <button class="nav-link"
                                        data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false"
                                        tabindex="-1" role="tab">Edit Profile</button></li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview"
                                    role="tabpanel">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam
                                        maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor.
                                        Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi
                                        sed ea saepe at unde.</p>
                                    <h5 class="card-title">Profile Details</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">USA</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                    </div>
                                </div>
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                                    <form>
                                        <div class="row mb-3"> <label for="profileImage"
                                                class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9"> <img
                                                    src="NiceAdmin/assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2"> <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a> <a href="#"
                                                        class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i
                                                            class="bi bi-trash"></i></a></div>
                                            </div>
                                        </div>
                                        <div class="row mb-3"> <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                            <div class="col-md-8 col-lg-9"> <input name="fullName" type="text"
                                                    class="form-control" id="fullName" value="Kevin Anderson">
                                            </div>
                                        </div>
                                        <div class="row mb-3"> <label for="about"
                                                class="col-md-4 col-lg-3 col-form-label">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3"> <label for="company"
                                                class="col-md-4 col-lg-3 col-form-label">Company</label>
                                            <div class="col-md-8 col-lg-9"> <input name="company" type="text"
                                                    class="form-control" id="company"
                                                    value="Lueilwitz, Wisoky and Leuschke"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Job"
                                                class="col-md-4 col-lg-3 col-form-label">Job</label>
                                            <div class="col-md-8 col-lg-9"> <input name="job" type="text"
                                                    class="form-control" id="Job" value="Web Designer">
                                            </div>
                                        </div>
                                        <div class="row mb-3"> <label for="Country"
                                                class="col-md-4 col-lg-3 col-form-label">Country</label>
                                            <div class="col-md-8 col-lg-9"> <input name="country" type="text"
                                                    class="form-control" id="Country" value="USA"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Address"
                                                class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9"> <input name="address" type="text"
                                                    class="form-control" id="Address"
                                                    value="A108 Adam Street, New York, NY 535022"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Phone"
                                                class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9"> <input name="phone" type="text"
                                                    class="form-control" id="Phone"
                                                    value="(436) 486-3538 x29071"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9"> <input name="email" type="email"
                                                    class="form-control" id="Email"
                                                    value="k.anderson@example.com"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Twitter"
                                                class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                            <div class="col-md-8 col-lg-9"> <input name="twitter" type="text"
                                                    class="form-control" id="Twitter"
                                                    value="https://twitter.com/#"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Facebook"
                                                class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                            <div class="col-md-8 col-lg-9"> <input name="facebook" type="text"
                                                    class="form-control" id="Facebook"
                                                    value="https://facebook.com/#"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Instagram"
                                                class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                            <div class="col-md-8 col-lg-9"> <input name="instagram" type="text"
                                                    class="form-control" id="Instagram"
                                                    value="https://instagram.com/#"></div>
                                        </div>
                                        <div class="row mb-3"> <label for="Linkedin"
                                                class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                            <div class="col-md-8 col-lg-9"> <input name="linkedin" type="text"
                                                    class="form-control" id="Linkedin"
                                                    value="https://linkedin.com/#"></div>
                                        </div>
                                        <div class="text-center"> <button type="submit" class="btn btn-primary">Save
                                                Changes</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="NiceAdmin/assets/js/main.js"></script>

</body>

</html>

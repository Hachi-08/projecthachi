<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">



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
                <span class="d-none d-lg-block">NiceAdmin</span>
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
                            {{ session()->get('surname') }}
                        </span>
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
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_member') }}">
                    <i class="bi bi-person"></i>
                    <span>??????????????????</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_car') }}">
                    <i class="bi bi-person"></i>
                    <span>??????</span>
                </a>
            </li><!-- End ??????  Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_QRcode') }}">
                    <i class="bi bi-qr-code"></i>
                    <span> QR code</span>
                </a>
            </li><!-- End Register Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_record') }}">
                    <i class="bi bi-calendar-range"></i>
                    <span>??????????????????????????????????????????-?????????</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>??????????????????????????????????????????????????????????????????</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin_profile') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">????????????????????????????????????</h5>
                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{ route('dataUpdate_admin_member') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">????????????</label>
                                    <input type="text" class="form-control" id="inputName5" name="name" value="{{$users_data->users_name}}" >
                                </div>
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">?????????????????????</label>
                                    <input type="text" class="form-control" id="inputName5"
                                        name="surname" value="{{$users_data->surname}}">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">??????????????????????????????????????????</label>
                                    <input type="text" class="form-control" id="inputAddres5s"
                                        placeholder="XXX-XXX-XXXX" name="phone" value="{{$users_data->phone}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">??????????????????????????????</label>
                                    <input type="text" class="form-control" id="inputCity"
                                        name="house_registration" value="{{$users_data->house_registration}}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">???????????????</label>
                                    <select id="inputState" class="form-select" name="level_id" value="{{$users_data->level_id}}">
                                        <option selected>
                                            -- ?????????????????????????????????????????? --
                                        </option>
                                        <option value="1">
                                            ????????????????????????????????????
                                        </option>
                                        <option name="" value="2">
                                            ?????????????????????????????????????????????????????????????????????????????????
                                        </option>
                                        <option value="3">
                                            ?????????????????????
                                        </option>
                                    </select>
                                </div>
                                <input type="hidden" name="users_id" value="{{$users_data->users_id}}">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Save</button>
                                  </div>
                            </form><!-- End Multi Columns Form -->
                        </div>
                    </div>
        </section>
    </main>
    <!-- End #main -->

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</body>

</html>

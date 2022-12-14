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
            </li><!-- End Profile Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_member') }}">
                    <i class="bi bi-person"></i>
                    <span>??????????????????</span>
                </a>
            </li><!-- End ??????????????????  Nav -->

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
            </li><!-- End QR code Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin_record') }}">
                    <i class="bi bi-calendar-range"></i>
                    <span>??????????????????????????????????????????-?????????</span>
                </a>
            </li><!-- End ??????????????????????????????????????????-????????? Nav -->

        </ul>

    </aside><!-- End Sidebar-->


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>?????????????????????????????????????????????????????????</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin_profile') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">????????????????????????????????????</h5>
                            <div>
                                <!-- Disabled Backdrop Modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#disablebackdrop_add">
                                    ???????????????????????????????????????????????????
                                </button>
                                <div class="modal fade" id="disablebackdrop_add" tabindex="-1"
                                    data-bs-backdrop="false">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">????????????????????????????????????????????????????????????</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Multi Columns Form -->
                                                <form class="row g-3" action="{{ route('add_admin_member') }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="col-md-12">
                                                        <label for="inputName5" class="form-label">????????????</label>
                                                        <input type="text" class="form-control" id="inputName5"
                                                            name="name" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="inputName5" class="form-label">?????????????????????</label>
                                                        <input type="text" class="form-control" id="inputName5"
                                                            name="surname"required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEmail5" class="form-label">????????????
                                                            ?????????????????????????????????</label>
                                                        <input type="text" class="form-control" id="inputEmail5"
                                                            name="users_name"required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputPassword5"
                                                            class="form-label">????????????????????????</label>
                                                        <input type="password" class="form-control"
                                                            id="inputPassword5" name="password" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputAddress5"
                                                            class="form-label">??????????????????????????????????????????</label>
                                                        <input type="text" class="form-control" id="inputAddres5s"
                                                            placeholder="XXX-XXX-XXXX" name="phone" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputCity" class="form-label">??????????????????????????????</label>
                                                        <input type="text" class="form-control" id="inputCity"
                                                            name="house_registration" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputState" class="form-label">???????????????</label>
                                                        <select id="inputState" class="form-select" name="level_id"
                                                            required>
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
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                    </div>
                                                </form>
                                                <!-- End Multi Columns Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Disabled Backdrop Modal-->
                            </div>
                            <br>
                            <div
                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table id="myTable" class="table datatable dataTable-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-sortable="" style="width: 5.58882%;"><a
                                                        href="#" class="dataTable-sorter">???????????????</a></th>
                                                <th scope="col" data-sortable="" style="width: 18.9621%;"><a
                                                        href="#" class="dataTable-sorter">????????????</a></th>
                                                <th scope="col" data-sortable="" style="width: 18.9621%;"><a
                                                        href="#" class="dataTable-sorter">?????????????????????</a></th>
                                                <th scope="col" data-sortable="" style="width: 9.1151%;"><a
                                                        href="#" class="dataTable-sorter">??????????????????????????????</a></th>
                                                <th scope="col" data-sortable="" style="width: 18.9621%;"><a
                                                        href="#" class="dataTable-sorter">??????????????????????????????????????????</a>
                                                </th>
                                                <th scope="col" data-sortable="" style="width: 18.9621%;"><a
                                                        href="#" class="dataTable-sorter">???????????????</a>
                                                </th>
                                                <th scope="col" data-sortable="" style="width: 9.1151%;"><a
                                                        href="#" class="dataTable-sorter">??????????????????????????????</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        @php
                                            $i = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($users as $row)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->surname }}</td>
                                                    <td>{{ $row->house_registration }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->level_name() }}</td>
                                                    <td>
                                                        {{-- <!-- <a href="{{ url('/admin_member_edit' . $row->users_id) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="bi bi-pencil-square"></i>
                                                        </a> --> --}}

                                                        <a type="button" href="{{ route('admin_car_from_add',$row->users_id) }}" class="btn btn-outline-warning"><i class="bi bi-car"></i><i class="bi bi-car-front-fill"></i></a>
                                                        <a type="button" href="/admin_member_edit{{$row->users_id}}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                                                        <a type="button" href="/admin_member_delete{{$row->users_id}}" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></a>


                                                        {{-- <a href="{{ url('/admin_member_delete' . $row->users_id) }}"
                                                            class="btn btn-outline-danger">
                                                            <i class="bi bi-trash3"></i></a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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

    {{-- script datatable ????????????????????? --}}
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#myTable').dataTable({
                "oLanguage": {
                    "sLengthMenu": "???????????? _MENU_ ??????????????????????????? ?????????????????????",
                    "sZeroRecords": "????????????????????????????????????????????????????????????",
                    "sInfo": "???????????? _START_ ????????? _END_ ????????? _TOTAL_ ???????????????????????????",
                    "sInfoEmpty": "???????????? 0 ????????? 0 ????????? 0 ???????????????????????????",
                    "sInfoFiltered": "(????????????????????????????????????????????????????????? _MAX_ ???????????????????????????)",
                    "sSearch": "??????????????? :",
                    "aaSorting": [
                        [0, 'desc']
                    ],
                    "oPaginate": {
                        "sFirst": "?????????????????????",
                        "sPrevious": "????????????????????????",
                        "sNext": "???????????????",
                        "sLast": "?????????????????????????????????"
                    },
                }
            });
        });
    </script>

    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('dataUpdate_admin_member'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '???????????????????????????????????????????????????????????????',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if (session('delete_admin_member'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '???????????????????????????????????????????????????????????????',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif



    <script>
        $('.btn-outline-danger').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            Swal.fire({
                title: '??????????????????????????????????????????????????????????????????',
                text: "???????????????????????? ????????????????????????????????????????????????????????????!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '?????????, ????????????????????????????????????!',
                cancelButtonText: '?????????, ?????????????????????????????????????????????'
            }).then(function(value) {
                if (value.isConfirmed) {
                    window.location.href = url;
                } else {
                    window.location.href = "{{ route('admin_member') }}";
                }
            });
        });
    </script>


</body>

</html>

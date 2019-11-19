<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Công Ty Dược Phẩm HTML</title>
  </style>
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li id="name" style="color: white;"><p style="padding-top: 20%">LEADER</li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index-leader.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quy Trình</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../login.html">Quản Lý</a>
          <a class="dropdown-item" href="../register.html">Tuyển Dụng</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quản Lý</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../login.html">Nhân viên</a>
          <a class="dropdown-item" href="../register.html">Ứng Viên</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Thống Kê</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="kpi-all.php">Phòng ban</a>
          <a class="dropdown-item" href="staff-kpi.php">Nhân Viên</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>KPI</span>
        </a>
       <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="">Phòng ban</a>
          <a class="dropdown-item" href="">Nhân Viên</a>
          <a class="dropdown-item" href="leader-kpi.php">Cá Nhân</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-12 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Tin Nhắn</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="leader-message.php" data-toggle="modal" data-target=".modal-example">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          </div>
          <div class="modal modal-example" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">
                  Thông Báo
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <ul>
                  <li>Bạn nhận được <a href="">10 hồ sơ ứng tuyển mới</a></li>
                  <li>Bạn có <a href="">5 Ứng viên đang chờ phỏng vấn</a></li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Bảng Theo Dõi Tiến Độ Nhân Viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Bộ Phận</th>
                    <th>Đã Hoàn Thành</th>
                    <th>Đang Làm</th>
                    <th>Đã Quá Hạn</th>
                    <th>Đánh Giá</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>Phòng Nhân Sự</td>
                    <td>5</td>
                    <td>2</td>
                    <td>1</td>
                    <td>
                      <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Phòng Nhân Sự</td>
                    <td>7</td>
                    <td>0</td>
                    <td>0</td>
                     <td>
                      <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Phòng Nhân Sự</td>
                    <td>2</td>
                    <td>1</td>
                    <td>5</td>
                     <td>
                       <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Phòng Nhân Sự</td>
                    <td>3</td>
                    <td>2</td>
                    <td>0</td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Phòng Nhân Sự</td>
                    <td>4</td>
                    <td>2</td>
                    <td>0</td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Phòng Nhân Sự</td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                   <td>Phòng Nhân Sự</td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Phòng Nhân Sự</td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Phòng Nhân Sự</td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td>
                        <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                   <td>Phòng Nhân Sự</td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td>
                      <i class="far fa-star" data-id="1"></i>
                      <i class="far fa-star" data-id="2"></i>
                      <i class="far fa-star" data-id="3"></i>
                      <i class="far fa-star" data-id="4"></i>
                      <i class="far fa-star" data-id="5"></i>
                     </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
  <script type="text/javascript">
    $('.fa-star').on('click',function(){
      $(this).css('color','yellow');
      $(this).prevAll().css('color','yellow');
    });
  </script>
</body>

</html>

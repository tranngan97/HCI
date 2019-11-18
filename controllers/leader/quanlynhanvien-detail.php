<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Công Ty Dược Phẩm HTML</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

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
      <li id="name" style="color: white;"><p style="padding-top: 20%">BOSS</p></li>
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
        <a class="nav-link" href="../../index-leader.php">
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
          <a class="dropdown-item" href="login.html">Quản Lý</a>
          <a class="dropdown-item" href="register.html">Tuyển Dụng</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quản Lý</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="quanlynhanvien.php">Nhân viên</a>
          <a class="dropdown-item" href="quanlyungvien.php">Ứng Viên</a>
          <a class="dropdown-item" href="quanlydangtuyen.php">Đăng tuyển</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Thống Kê</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="login.html">Phòng ban</a>
          <!-- <a class="dropdown-item" href="register.html">Nhân Viên</a> -->
          <a class="dropdown-item" href="register.html">Cá Nhân</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>KPI</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="kpi-all.php">Phòng ban</a>
          <a class="dropdown-item" href="staff-kpi.php">Nhân Viên</a>
          <a class="dropdown-item" href="leader-kpi.php">Cá Nhân</a>
        </div>
      </li>
    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Quản lý nhân viên</a>
          </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Danh sách nhân viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Mã NV</th>
                    <th>Tên NV</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Vị trí</th>
                    <th> <th>
                   
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Mã NV</th>
                    <th>Tên NV</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Vị Trí </th>
                    <th> <th>
                    
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>NV001</td>
                    <td>Đặng Thị Linh</td>
                    <td>06/11/1990</td>
                    <td>Nữ</td>
                    <td>Trưởng Phòng</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV002</td>
                    <td>Nguyễn Văn An</td>
                    <td>08/08/1995</td>
                    <td>Nam</td>
                    <td>Phó phòng</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                  </tr>
                  <tr>
                    <td>NV003</td>
                    <td>Trần Văn Ban</td>
                    <td>22/07/1991</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV004</td>
                    <td>Trần Văn Dũng</td>
                    <td>01/01/1995</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                   
                  </tr>
                  <tr>
                    <td>NV005</td>
                    <td>Nguyễn Văn Hiếu</td>
                    <td>02/01/1992</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                   </tr>
                  <tr>
                    <td>NV006</td>
                    <td>Đặng Thị Khuyên</td>
                    <td>20/08/1997</td>
                    <td>Nữ</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV007</td>
                    <td>Trần Văn Hiệp</td>
                    <td>03/02/1993</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV008</td>
                    <td>Đặng Thị Ngọc</td>
                    <td>03/04/1990</td>
                    <td>Nữ</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV009</td>
                    <td>Nguyễn Nam Anh</td>
                    <td>04/05/1992</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV010</td>
                    <td>Nguyễn Lan Anh</td>
                    <td>22/12/1989</td>
                    <td>Nữ</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                 
                  </tr>
                  <tr>
                    <td>NV011</td>
                    <td>Trần Văn Đông</td>
                    <td>06/07/1987</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV012</td>
                    <td>Trần Thu Trang</td>
                    <td>08/11/1987</td>
                    <td>Nữ</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
                  </tr>
                  <tr>
                    <td>NV013</td>
                    <td>Nguyễn Văn long</td>
                    <td>03/12/1998</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td><button name="button" type="button">Chi tiết</button><td>
                    
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
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../vendor/chart.js/Chart.min.js"></script>
  <script src="../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../js/demo/datatables-demo.js"></script>
  <script src="../../js/demo/chart-area-demo.js"></script>

</body>

</html>
